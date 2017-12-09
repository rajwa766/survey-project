<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DesignInfo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Design Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="design-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
    ]) ?>

</div>
