<?php

namespace frontend\controllers;

use Yii;
use common\models\DesignInfo;
use common\models\DesignInfoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;

/**
 * DesignInfoController implements the CRUD actions for DesignInfo model.
 */
class DesignInfoController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DesignInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
       // $model = new DesignInfo();
        $searchModel = new DesignInfoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
  
        if(Yii::$app->request->post('hasEditable')){
    $country = Yii::$app->request->post('editableKey');
    $country_name = DesignInfo::findOne($country);
   
    $out = Json::encode(['output'=>'','message'=>'']);
    $post = [];
    $posted = current($_POST['DesignInfo']);
    $post['DesignInfo'] = $posted;

  
    if($country_name->load($post)){
     
       $country_name->save();
    }
    echo $out;
    return;

}
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DesignInfo model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = new  DesignInfo();
        if(Yii::$app->request->post('hasEditable')){
            $country = $_GET['id'];
            $model = DesignInfo::findOne($country);
            $out = Json::encode(['output'=>'','message'=>'']);
            $post = [];
            $posted = $_POST['DesignInfo'];
            if($model->load($posted)){
                
                  $model->save();
               }
         
          
            echo $out;
            return;
        
        }
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DesignInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DesignInfo();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        if(Yii::$app->request->isAjax){
            return $this->renderAjax('create', [
                'model' => $model,
            ]);
            }else{
                return $this->render('create', [
                    'model' => $model,
                ]);
    
            }
     
    }
    public function actionEditableDemo() {
        $model = new DesignInfo(); // your model can be loaded here
        // Check if there is an Editable ajax request
        if (isset($_POST['hasEditable'])) {
            // use Yii's response format to encode output as JSON
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            
            // read your posted model attributes
            if ($model->load($_POST)) {
                // read or convert your posted information
                $value = $model->name;
                
                // return JSON encoded output in the below format
                return ['output'=>$value, 'message'=>''];
                
                // alternatively you can return a validation error
                // return ['output'=>'', 'message'=>'Validation error'];
            }
            // else if nothing to do always return an empty JSON encoded output
            else {
                return ['output'=>'', 'message'=>''];
            }
        }
        
        // Else return to rendering a normal view
        return $this->render('view', ['model'=>$model]);
    }
    /**
     * Updates an existing DesignInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DesignInfo model.
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
     * Finds the DesignInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DesignInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DesignInfo::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
