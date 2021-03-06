<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Json;
/* @var $this yii\web\View */
/* @var $searchModel common\models\DesignInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Design Infos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="design-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Design Info'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'pjax'=>true,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
        'class'=>'kartik\grid\EditableColumn',
        'attribute'=>'country',
            ],
            'country',
            'hague',
            'maxterm',
            'renewals',
            //'renewals_details:ntext',
            //'grace',
            //'grace_details:ntext',
            //'max_no',
            //'what',
            //'what_details:ntext',
            //'subst_exam',
            //'fees:ntext',
            //'misc',
            //'misc_details:ntext',
            //'description',
            //'claim',
            //'req_docs',
            //'req_docs_details:ntext',
            //'deferment_period',
            //'reprod',
            //'reprod_details:ntext',
            //'dashed',
            //'shading',
            //'sections',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
  
</div>
