<?php

namespace app\controllers;

use app\models\Tempreture;
use app\models\TempretureSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TempretureController implements the CRUD actions for Tempreture model.
 */
class TempretureController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Tempreture models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TempretureSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tempreture model.
     * @param int $temp_id Temp ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($temp_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($temp_id),
        ]);
    }

    /**
     * Creates a new Tempreture model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Tempreture();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'temp_id' => $model->temp_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Tempreture model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $temp_id Temp ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($temp_id)
    {
        $model = $this->findModel($temp_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'temp_id' => $model->temp_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tempreture model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $temp_id Temp ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($temp_id)
    {
        $this->findModel($temp_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tempreture model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $temp_id Temp ID
     * @return Tempreture the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($temp_id)
    {
        if (($model = Tempreture::findOne(['temp_id' => $temp_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
