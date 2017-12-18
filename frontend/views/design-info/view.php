<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\editable\Editable;
/* @var $this yii\web\View */
/* @var $model common\models\DesignInfo */
?>
<?php if (!Yii::$app->user->isGuest) {
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Design Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
}
?>

<div class="design-info-view">

<?php
$user_id = Yii::$app->user->getId();
    $Role =   Yii::$app->authManager->getRolesByUser($user_id);
    if(isset($Role['super_admin'])){
?>
    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>
        <?php } ?>
        <?php if (!Yii::$app->user->isGuest) { ?>

<table id="w1" class="table table-striped table-bordered detail-view"><tbody>
<tr><th>Country</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'country', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Hague</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'hague', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Maxterm</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'maxterm', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Renewals</th><td><?=Editable::widget([
    'model' => $model, 
    'attribute'=>'renewals', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?></td></tr>
<tr><th>Renewals Details</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'renewals_details', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?></td></tr>
<tr><th>Grace</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'grace', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Grace Details</th><td><?=Editable::widget([
    'model' => $model, 
    'attribute'=>'grace_details', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?></td></tr>
<tr><th>Max No</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'max_no', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>What</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'what', 
    'asPopover' => true,
    'inputType' => Editable::INPUT_TEXTAREA,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>What Details</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'what_details', 
    'asPopover' => true,
    'inputType' => Editable::INPUT_TEXTAREA,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Subst Exam</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'subst_exam', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Fees</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'fees', 
    'inputType' => Editable::INPUT_TEXTAREA,
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Misc</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'misc', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Misc Details</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'misc_details', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Claim</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'claim', 
    'inputType' => Editable::INPUT_TEXTAREA,
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Req Docs</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'req_docs', 
    'inputType' => Editable::INPUT_TEXTAREA,
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Req Docs Details</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'req_docs_details', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Deferment Period</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'deferment_period', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Reprod</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'reprod', 
    'asPopover' => true,
    'inputType' => Editable::INPUT_TEXTAREA,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Reprod Details</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'reprod_details', 
    'inputType' => Editable::INPUT_TEXTAREA,
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Dashed</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'dashed', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter country name...']
]);?>
</td></tr>
<tr><th>Shading</th><td>
<?=Editable::widget([
    'model' => $model, 
    'attribute'=>'shading', 
    'asPopover' => true,
    'header' => 'Name',
    'size'=>'md',
    'options' => ['class'=>'form-control', 'placeholder'=>'Enter person name...']
]);?>
</td></tr>
<tr><th>Sections</th><td>1</td></tr></tbody></table>
      <?php  } else{?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'country',
            'hague',
            'maxterm',
            'renewals',
            'renewals_details:ntext',
            'grace',
            'grace_details:ntext',
            'max_no',
            'what',
            'what_details:ntext',
            'subst_exam',
            'fees:ntext',
            'misc',
            'misc_details:ntext',
            'description',
            'claim',
            'req_docs',
            'req_docs_details:ntext',
            'deferment_period',
            'reprod',
            'reprod_details:ntext',
            'dashed',
            'shading',
            'sections',
        ],
    ]);
     } ?>

    

</div>
