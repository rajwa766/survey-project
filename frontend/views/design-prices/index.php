<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DesignPricesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Design Prices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="design-prices-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Design Prices'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Country',
            'WIPO',
            'OfficialFee1',
            'OfficialFee2plus',
            //'OurFeeSimple1',
            //'OurFeeSimple2plus',
            //'OurFeeDetailed1',
            //'OurFeeDetailed2plus',
            //'AgentFee1',
            //'AgentFee2plus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
