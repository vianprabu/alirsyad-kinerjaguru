<?php

namespace app\controllers;

use Yii;
use app\models\Kuismaster;
use app\models\KuismasterSearch;
use app\models\Guru;
use app\models\GuruSearch;
use app\models\KgMaster;
use app\models\KgMasterSearch;
use app\models\Skor;
use app\models\Instansi;
use app\models\LaporanForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * KuismasterController implements the CRUD actions for Kuismaster model.
 */
class KuismasterController extends Controller
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
     * Lists all Kuismaster models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KuismasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kuismaster model.
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
     * Creates a new Kuismaster model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Kuismaster();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kuismaster_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kuismaster model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kuismaster_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Kuismaster model.
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
     * Finds the Kuismaster model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Kuismaster the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kuismaster::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    public function actionKuissejawat($id) {
        
        $key = Yii::$app->user->identity->username;
        $model = \app\models\Guru::findOne($key);
        
        $kgmaster= \app\models\KgMaster::findOne($id);
        $kgmaster_id=$kgmaster['kgmaster_id'];
        $db = Yii::$app->db;
        // generate kuismaster
        // cek dulu apakah sudah ada datakuisnya berdasarkan user yg ngisi dan guru yg dipilih
         
        $qry = "select count(*) from kuismaster where "
                 . " kgmaster_id='$kgmaster_id' and kuismaster.nip='$key' ";
        $cek = $db->createCommand($qry)->queryScalar();
        
         if($cek==0){
            $kuismaster= new Kuismaster;
            $kuismaster->kuismaster_id = uniqid();
            $kuismaster->kgmaster_id=$kgmaster_id;
            $kuismaster->nip=$key;
            $kuismaster->save(false);
            
            // generate detailnya
            $qry = "select * from pernyataan";
            $cmd = $db->createCommand($qry);
            $pernyataan = $cmd->queryAll();
            
            foreach($pernyataan as $row){
                $detail= new \app\models\Kuisdetail;
                $detail->kuismaster_id=$kuismaster->kuismaster_id;
                $detail->kuisdetail_id=uniqid();
                $detail->nilai_id='00';
                $detail->pernyataan_id=$row['pernyataan_id'];
                $detail->save(false);
                
            }
        }
        
        $qry = "select * from kuismaster where kgmaster_id ='$kgmaster_id' and kuismaster.nip='$key' ";
        $km = $db->createCommand($qry)->queryOne();
        $kuismasterid=$km['kuismaster_id'];
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['kuissejawat', 'id' => $model->nip]);
        }
        
        $db = Yii::$app->db;
        $qry = "select * from komponen where kelkompo_id = '1' ";
        $cmd = $db->createCommand($qry);
        $rekapkomponen = $cmd->queryAll();
        
        
        $qry = "SELECT komponen.komponen_id, kuisdetail_id, komponen.nama_komponen, pernyataan.nama_pernyataan,
                    kuisdetail.pernyataan_id,kuisdetail.nilai_id, nilai.bobot_nilai as skor from kuisdetail 
                    INNER JOIN kuismaster ON kuismaster.kuismaster_id=kuisdetail.kuismaster_id
                    INNER JOIN pernyataan ON pernyataan.pernyataan_id=kuisdetail.pernyataan_id
                    INNER JOIN komponen ON komponen.komponen_id=pernyataan.komponen_id
                    INNER JOIN nilai ON nilai.nilai_id=kuisdetail.nilai_id
                    WHERE kuismaster.kgmaster_id='$id' AND komponen.kelkompo_id='1'
                    ORDER BY pernyataan.pernyataan_id";
        $cmd = $db->createCommand($qry);
        $pernyataan = $cmd->queryAll();
        
        $qry = "select nilai_id, nama_nilai from nilai";
        $cmd = $db->createCommand($qry);
        $rekapnilai = $cmd->queryAll();
        
        $qry = "select * from guru 
                INNER JOIN kg_master ON guru.nip=kg_master.nip 
                INNER JOIN instansi ON instansi.instansi_id=guru.instansi_id
                
                where kgmaster_id='$id'";
        $cmd = $db->createCommand($qry);
        $guru = $cmd->queryOne();
        
        
        
        
        return $this->render('kuissejawat',['kgmaster'=> $kgmaster,
                                            'rekapkomponen' => $rekapkomponen,
                                            'pernyataan' => $pernyataan,
                                            'rekapnilai' => $rekapnilai,
                                            'guru' => $guru,
                                            'model' => $model,
            ]);
    }
    
    public function actionKuissiswa($id) {
        $model = \app\models\Guru::findOne($id);
        $db = Yii::$app->db;
        
        $kgmaster= \app\models\KgMaster::findOne($id);
        $kgmaster_id=$kgmaster['kgmaster_id'];
        
        $qry = "select count(*) from kuismaster where kuismaster.nip='$id' ";
        $cek = $db->createCommand($qry)->queryScalar();
        
        
        $db = Yii::$app->db;
        $qry = "select * from komponen where kelkompo_id = '2' ";
        $cmd = $db->createCommand($qry);
        $rekapkomponen = $cmd->queryAll();
        
        
        $qry = "select pernyataan.komponen_id, pernyataan_id, komponen.kelkompo_id, nama_pernyataan from pernyataan inner join komponen "
                . "on pernyataan.komponen_id=komponen.komponen_id where komponen.komponen_id = '21'";
        $cmd = $db->createCommand($qry);
        $pernyataan = $cmd->queryAll();
        
        $qry = "select nilai_id, nama_nilai from nilai";
        $cmd = $db->createCommand($qry);
        $rekapnilai = $cmd->queryAll();
        
        $qry = "select nama_guru, bidang, guru.nip, instansi.instansi_id , instansi.nama_instansi, kelas.nama_kelas from guru inner join instansi on 
            instansi.instansi_id=guru.instansi_id inner join guru_kelas on guru_kelas.nip=guru.nip inner join kelas on kelas.kelas_id=guru_kelas.kelas_id
            where guru.nip='$id'";
        $cmd = $db->createCommand($qry);
        $guru = $cmd->queryOne();
        
        return $this->render('kuissiswa',['model'=> $model,
                                            'rekapkomponen' => $rekapkomponen,
                                            'pernyataan' => $pernyataan,
                                            'rekapnilai' => $rekapnilai,
                                            'guru' => $guru]);
    }
    
    
    public function actionDaftarkuissejawat() {
       
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
        
        $searchModel = new KgMasterSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
     
        return $this->render('daftarkuissejawat',['ambilperiode'=> $ambilperiode,
                                            'searchModel' => $searchModel,
                                            'dataProvider' => $dataProvider,
                                            'model' => $model,
                                            ]);
    }
    
    public function actionDaftarkuissiswa() {
       
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
        
        return $this->render('daftarkuissiswa', ['ambilperiode'=> $ambilperiode,
                                            'searchModel' => $searchModel,
                                            'dataProvider' => $dataProvider,
                                            'model' => $model,
                                            ]);
    }
    
}
