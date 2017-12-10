<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DesignInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="design-info-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'hague')->textInput() ?>
   </div>
   </div>
   <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'maxterm')->textInput() ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'renewals')->textInput(['maxlength' => true]) ?>
   </div>
   </div>
   <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'renewals_details')->textarea(['rows' => 6]) ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'grace')->textInput(['maxlength' => true]) ?>
   </div>
   </div>
   <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'grace_details')->textarea(['rows' => 6]) ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'max_no')->textInput() ?>
   </div>
   </div>
   <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'what')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'what_details')->textarea(['rows' => 6]) ?>
   </div>
   </div>
   <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'subst_exam')->textInput() ?>
     
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'fees')->textarea(['rows' => 6]) ?>
   </div>
   </div>
   <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'misc')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'misc_details')->textarea(['rows' => 6]) ?>
   </div>
   </div>
   <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'claim')->textInput(['maxlength' => true]) ?>
   </div>
   </div>
   <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'req_docs')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'req_docs_details')->textarea(['rows' => 6]) ?>
   </div>
   </div>

   <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'deferment_period')->textInput(['maxlength' => true]) ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'reprod')->textInput(['maxlength' => true]) ?>
   </div>
   </div>

   <div class="row">
 <div class="col-md-6">
    <?= $form->field($model, 'reprod_details')->textarea(['rows' => 6]) ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'dashed')->textInput() ?>
   </div>
   </div>
   <div class="row">
    <div class="col-md-6">
    <?= $form->field($model, 'shading')->textInput() ?>
   </div>
   <div class="col-md-6">
    <?= $form->field($model, 'sections')->textInput() ?>
   </div>
   </div>





    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
