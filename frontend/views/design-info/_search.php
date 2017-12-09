<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DesignInfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="design-info-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'hague') ?>

    <?= $form->field($model, 'maxterm') ?>

    <?= $form->field($model, 'renewals') ?>

    <?php // echo $form->field($model, 'renewals_details') ?>

    <?php // echo $form->field($model, 'grace') ?>

    <?php // echo $form->field($model, 'grace_details') ?>

    <?php // echo $form->field($model, 'max_no') ?>

    <?php // echo $form->field($model, 'what') ?>

    <?php // echo $form->field($model, 'what_details') ?>

    <?php // echo $form->field($model, 'subst_exam') ?>

    <?php // echo $form->field($model, 'fees') ?>

    <?php // echo $form->field($model, 'misc') ?>

    <?php // echo $form->field($model, 'misc_details') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'claim') ?>

    <?php // echo $form->field($model, 'req_docs') ?>

    <?php // echo $form->field($model, 'req_docs_details') ?>

    <?php // echo $form->field($model, 'deferment_period') ?>

    <?php // echo $form->field($model, 'reprod') ?>

    <?php // echo $form->field($model, 'reprod_details') ?>

    <?php // echo $form->field($model, 'dashed') ?>

    <?php // echo $form->field($model, 'shading') ?>

    <?php // echo $form->field($model, 'sections') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
