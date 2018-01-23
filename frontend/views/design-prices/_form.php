<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DesignPrices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="design-prices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'WIPO')->textInput() ?>

    <?= $form->field($model, 'OfficialFee1')->textInput() ?>

    <?= $form->field($model, 'OfficialFee2plus')->textInput() ?>

    <?= $form->field($model, 'OurFeeSimple1')->textInput() ?>

    <?= $form->field($model, 'OurFeeSimple2plus')->textInput() ?>

    <?= $form->field($model, 'OurFeeDetailed1')->textInput() ?>

    <?= $form->field($model, 'OurFeeDetailed2plus')->textInput() ?>

    <?= $form->field($model, 'AgentFee1')->textInput() ?>

    <?= $form->field($model, 'AgentFee2plus')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
