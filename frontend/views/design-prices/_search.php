<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DesignPricesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="design-prices-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Country') ?>

    <?= $form->field($model, 'WIPO') ?>

    <?= $form->field($model, 'OfficialFee1') ?>

    <?= $form->field($model, 'OfficialFee2plus') ?>

    <?php // echo $form->field($model, 'OurFeeSimple1') ?>

    <?php // echo $form->field($model, 'OurFeeSimple2plus') ?>

    <?php // echo $form->field($model, 'OurFeeDetailed1') ?>

    <?php // echo $form->field($model, 'OurFeeDetailed2plus') ?>

    <?php // echo $form->field($model, 'AgentFee1') ?>

    <?php // echo $form->field($model, 'AgentFee2plus') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
