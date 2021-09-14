<?php

namespace frontend\controllers;

use common\models\Estudiante;
use frontend\models\EstudianteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EstudianteController implements the CRUD actions for Estudiante model.
 */
class EstudianteController extends Controller
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
     * Lists all Estudiante models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EstudianteSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Estudiante model.
     * @param string $no_de_control No De Control
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_de_control)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_de_control),
        ]);
    }

    /**
     * Creates a new Estudiante model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Estudiante();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_de_control' => $model->no_de_control]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Estudiante model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $no_de_control No De Control
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_de_control)
    {
        $model = $this->findModel($no_de_control);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_de_control' => $model->no_de_control]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Estudiante model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $no_de_control No De Control
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_de_control)
    {
        $this->findModel($no_de_control)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Estudiante model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $no_de_control No De Control
     * @return Estudiante the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_de_control)
    {
        if (($model = Estudiante::findOne($no_de_control)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
