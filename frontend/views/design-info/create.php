<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DesignInfo */

$this->title = Yii::t('app', 'Create Design Info');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Design Infos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="design-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
