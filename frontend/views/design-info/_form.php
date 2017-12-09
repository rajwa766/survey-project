<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DesignInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="design-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hague')->textInput() ?>

    <?= $form->field($model, 'maxterm')->textInput() ?>

    <?= $form->field($model, 'renewals')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'renewals_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'grace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grace_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'max_no')->textInput() ?>

    <?= $form->field($model, 'what')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'what_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'subst_exam')->textInput() ?>

    <?= $form->field($model, 'fees')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'misc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'misc_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'claim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'req_docs')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'req_docs_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'deferment_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reprod')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reprod_details')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'dashed')->textInput() ?>

    <?= $form->field($model, 'shading')->textInput() ?>

    <?= $form->field($model, 'sections')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
