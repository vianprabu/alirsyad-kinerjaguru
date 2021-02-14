<?php

namespace app\controllers;

use Yii;
use app\models\Guru;
use app\models\GuruSearch;
use yii\web\Controller;
use app\models\Kompetensi;
use app\models\Indikator;
use app\models\Skor;
use app\models\LaporanForm;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\controllers\Periode;

/**
 * GuruController implements the CRUD actions for Guru model.
 */
class GuruController extends Controller
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
     * Lists all Guru models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GuruSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Guru model.
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
    
     public function actionViewbyguru()
    {
         $id=Yii::$app->user->identity->username;
         $model= $this->findModel($id);
        return $this->render('viewbyguru', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Guru model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Guru();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nip]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Guru model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
     public function actionUpdatebyguru()
    {
         $id=Yii::$app->user->identity->username;
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['viewbyguru']);
        }

        return $this->render('updatebyguru', [
            'model' => $model,
        ]);
    }
    
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nip]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Guru model.
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
     * Finds the Guru model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Guru the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Guru::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionNilaikompetensi($no, $id) {
        
        $db = Yii::$app->db;
        $qry = "select * from kompetensi where kompetensi_id=$no";
        $cmd = $db->createCommand($qry);
        $kompetensi = $cmd->queryOne();
        
        $qry = "SELECT kompetensi.kompetensi_id, kgdetail_id, kompetensi.nama_kompetensi, indikator.nama_indikator,
                    kg_detail.skor_id, skor.bobot_skor as nilai from kg_detail INNER JOIN indikator 
                    ON indikator.indikator_id=kg_detail.indikator_id
                    INNER JOIN kompetensi ON kompetensi.kompetensi_id=indikator.kompetensi_id
                    INNER JOIN skor ON skor.skor_id=kg_detail.skor_id
                    WHERE kgmaster_id='$id' AND kompetensi.kompetensi_id=$no
                    ORDER BY indikator.indikator_id";
        $cmd = $db->createCommand($qry);
        $indikator = $cmd->queryAll();
        
        $qry = "select skor_id, nama_skor from skor";
        $cmd = $db->createCommand($qry);
        $rekapskor = $cmd->queryAll();
        
         $qry = "select * from guru inner join kg_master on guru.nip=kg_master.nip inner join periode "
                 . " on periode.periode_id=kg_master.periode_id "
                 . "where kgmaster_id='$id'";
        $cmd = $db->createCommand($qry);
        $guru = $cmd->queryOne();
        
        $model = new LaporanForm();
        if (Yii::$app->request->post()) {
            $hasil=Yii::$app->request->post();
            
            //var_dump($hasil);
            foreach($hasil as $key => $nilai){
              // $qry="update kg_detail set skor_id='$nilai' where kgdetail_id='$key'";
               //echo $qry;
                //echo $key; echo '<br>';
                if($nilai=='01' || $nilai=='02' || $nilai=='03'){
                     $qry="update kg_detail set skor_id='$nilai' where kgdetail_id='$key'";
                      $db->createCommand($qry)->execute();
                    
                }
                 
               
               
            }
            
            Yii::$app->session->setFlash('success', "Data telah disimpan...");
           return $this->redirect(Yii::$app->request->referrer);
           
        }
     
        return $this->render('nilaikompetensi',['kompetensi' => $kompetensi,
                                          'indikator' => $indikator,
                                          'rekapskor' => $rekapskor,
                                            'guru'=>$guru,
                                             
                                           ]);
    }
    
    public function actionPetunjuk() {
     
        return $this->render('petunjuk', []);
        
    }
    public function actionData() {
        $searchModel = new GuruSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('data', [
                                            'searchModel' => $searchModel,
                                            'dataProvider' => $dataProvider,
                                            ]);
        
    }
    public function actionDatakehadiran() {
     
        return $this->render('datakehadiran', []);
        
    }
    public function actionKetentuan() {
     
        return $this->render('ketentuan', []);
        
    }
    public function actionProporsi() {
        $db = Yii::$app->db;
        $qry = "select * from kompetensi where kompetensi_id = '1'";
        $cmd = $db->createCommand($qry);
        $rekapkompetensi = $cmd->queryAll();
        
        $qry = "select kompetensi_id, nama_indikator from indikator where kompetensi_id = '1'";
        $cmd = $db->createCommand($qry);
        $indikator = $cmd->queryAll();
        
        $qry = "select skor_id, nama_skor from skor";
        $cmd = $db->createCommand($qry);
        $rekapskor = $cmd->queryAll();
        
        $db = Yii::$app->db;
        $qry = "select * from kompetensi ";
        $cmd = $db->createCommand($qry);
        $totalkompetensi = $cmd->queryAll();
        return $this->render('Proporsi', ['rekapkompetensi' => $rekapkompetensi,
                                          'indikator' => $indikator,
                                          'rekapskor' => $rekapskor,
                                          'totalkompetensi' => $totalkompetensi,
                                           ]);
        
    }
    
    public function actionProfileguru($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nip]);
        }
        
        $db = Yii::$app->db;
        $qry = "select * from kompetensi ";
        $cmd = $db->createCommand($qry);
        $rekapkompetensi = $cmd->queryAll();
        
        $qry = "select kompetensi_id, nama_indikator from indikator where kompetensi_id = '1'";
        $cmd = $db->createCommand($qry);
        $indikator = $cmd->queryAll();
        
        $qry = "select nip, nama_guru from guru";
        $cmd = $db->createCommand($qry);
        $rekapguru = $cmd->queryAll();
     
        return $this->render('profileguru',['model' => $model,
                                       'rekapkompetensi' => $rekapkompetensi,
                                       'indikator' => $indikator,
                                       'rekapguru' => $rekapguru]);
    }
}
