<?php

namespace app\controllers;

use Yii;
use app\models\KgDetail;
use app\models\KgDetailSearch;
use app\models\LaporanForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * KgDetailController implements the CRUD actions for KgDetail model.
 */
class KgDetailController extends Controller
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
     * Lists all KgDetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KgDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KgDetail model.
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
     * Creates a new KgDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new KgDetail();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kgdetail_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing KgDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kgdetail_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing KgDetail model.
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
     * Finds the KgDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return KgDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = KgDetail::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionDaftarkompetensi()
    {
        
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
     
        return $this->render('daftarkompetensi',['model' => $model,
                                       'rekapkompetensi' => $rekapkompetensi,
                                       'indikator' => $indikator,
                                       'rekapguru' => $rekapguru]);
    }
    
     public function actionDaftarkompetensi1() {
        
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
        
        $searchModel = new KgDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('daftarkompetensi1', ['ambilperiode'=> $ambilperiode,
                                            'searchModel' => $searchModel,
                                            'dataProvider' => $dataProvider,
                                            'model' => $model,
                                            ]);
    }
    
    
}
