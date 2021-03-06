<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DesignPrices */

$this->title = Yii::t('app', 'Create Design Prices');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Design Prices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="design-prices-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
