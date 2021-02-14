<?php

namespace app\controllers;

use Yii;
use app\models\Kompetensi;
use app\models\KompetensiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * KompetensiController implements the CRUD actions for Kompetensi model.
 */
class KompetensiController extends Controller
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
     * Lists all Kompetensi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KompetensiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kompetensi model.
     * @param integer $id
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
     * Creates a new Kompetensi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kompetensi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kompetensi_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kompetensi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kompetensi_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kompetensi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kompetensi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Kompetensi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    
    public function actionNilai($id)
    {
        $model = $this->findModel($id);
        $searchModel = new KompetensiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kompetensi_id]);
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
     
        return $this->render('nilai',['model' => $model,
                                       'rekapkompetensi' => $rekapkompetensi,
                                       'indikator' => $indikator,
                                       'rekapguru' => $rekapguru,
                                        'searchModel' => $searchModel,
                                            'dataProvider' => $dataProvider,]);
    }
    
    protected function findModel($id)
    {
        if (($model = Kompetensi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionNilaikompetensi() {
        
        $searchModel = new KompetensiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('nilaikompetensi', [
                                            'searchModel' => $searchModel,
                                            'dataProvider' => $dataProvider,
                                            ]);
    }
   
}
