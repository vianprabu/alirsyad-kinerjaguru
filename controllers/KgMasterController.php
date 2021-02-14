<?php

namespace app\controllers;

use Yii;
use app\models\KgMaster;
use app\models\KgMasterSearch;
use app\models\Guru;
use app\models\GuruSearch;
use app\models\Kompetensi;
use app\models\Indikator;
use app\models\Skor;
use app\models\LaporanForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * KgMasterController implements the CRUD actions for KgMaster model.
 */
class KgMasterController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
	return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'data', 'grafik'],
                'rules' => [
                    ['allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all KgMaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KgMasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KgMaster model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new KgMaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new KgMaster();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kgmaster_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KgMaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kgmaster_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KgMaster model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the KgMaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return KgMaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = KgMaster::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionDaftarguru() {
        
        $model = new LaporanForm();
        if ($model->load(Yii::$app->request->get())) {
            
        }

        $periode_id = $model->periode_id;
        if ($periode_id != null) {
            $db = Yii::$app->db;
            $qry = "select periode_id from periode where periode_id = '$periode_id'";
            $cmd = $db->createCommand($qry);
            $ambilperiode = $cmd->queryAll();
        } else {
            $db = Yii::$app->db;
            $qry = "select * from periode";
            $cmd = $db->createCommand($qry);
            $ambilperiode = $cmd->queryAll();
        }
        
        $searchModel = new GuruSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('daftarguru', ['ambilperiode'=> $ambilperiode,
                                            'searchModel' => $searchModel,
                                            'dataProvider' => $dataProvider,
                                            'model' => $model,
                                            ]);
    }
    
    
    public function actionDaftarkompetensi($id)
    {   
        $model = \app\models\Guru::findOne($id);
         $db = Yii::$app->db;
        
        $periode=\app\models\Periode::find()->where(['is_aktif'=>1])->one();
        $periode_id=$periode['periode_id'];
        
        $qry = "select count(*) from kg_master where nip='$id' and periode_id='$periode_id' ";
        $cek = $db->createCommand($qry)->queryScalar();
        
        if($cek==0){
            $kgmaster= new KgMaster;
            $kgmaster->kgmaster_id= uniqid();
            $kgmaster->nip=$id;
            $kgmaster->periode_id=$periode_id;
            $kgmaster->save(false);
            
            // generate detailnya
            $qry = "select * from indikator";
            $cmd = $db->createCommand($qry);
            $indikator = $cmd->queryAll();
            
            foreach($indikator as $row){
                $detail= new \app\models\KgDetail;
                $detail->kgmaster_id=$kgmaster->kgmaster_id;
                $detail->kgdetail_id=uniqid();
                $detail->skor_id='00';
                $detail->indikator_id=$row['indikator_id'];
                $detail->save(false);
                
            }
        }
        
        $qry = "select * from kg_master where nip='$id' and periode_id='$periode_id' ";
        $kg = $db->createCommand($qry)->queryOne();
        $kgmasterid=$kg['kgmaster_id'];
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['daftarkompetensi', 'id' => $model->nip]);
        }
        
       
        $qry = "SELECT kompetensi.kompetensi_id, kompetensi.nama_kompetensi, sum(skor.bobot_skor) as nilai from kg_detail INNER JOIN indikator 
                    ON indikator.indikator_id=kg_detail.indikator_id
                    INNER JOIN kompetensi ON kompetensi.kompetensi_id=indikator.kompetensi_id
                    INNER JOIN skor ON skor.skor_id=kg_detail.skor_id
                    WHERE kgmaster_id='$kgmasterid'
                    GROUP BY kompetensi.kompetensi_id, kompetensi.nama_kompetensi";
        $cmd = $db->createCommand($qry);
        $rekapkompetensi = $cmd->queryAll();
        
        $qry = "select kompetensi_id, nama_indikator from indikator ";
        $cmd = $db->createCommand($qry);
        $indikator = $cmd->queryAll();
        
        $qry = "select nip, nama_guru from guru";
        $cmd = $db->createCommand($qry);
        $rekapguru = $cmd->queryAll();
     
        return $this->render('daftarkompetensi',['model' => $model,
                                       'rekapkompetensi' => $rekapkompetensi,
                                       'indikator' => $indikator,
                                       'rekapguru' => $rekapguru,
                                       'model' => $model,
                                       'kg'=>$kg 
            ]);
    }
}
