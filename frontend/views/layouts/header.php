<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
    NavBar::begin([
        'brandLabel' => 'Survey',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    ?>

  <?php
   if (!Yii::$app->user->isGuest) {

 $user_id = Yii::$app->user->getId();
 $Role =   Yii::$app->authManager->getRolesByUser($user_id);
 if(isset($Role['super_admin'])){
    $menuItems = [
         ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Customer', 'url' => ['/customer/index']],
        ['label' => 'Consignee', 'url' => ['/consignee/index']],
        ['label' => 'Vehicle', 'url' => ['/vehicle/index']],
        ['label' => 'Vehicle Export', 'url' => ['/vehicle-export/index']],
        ['label' => 'Export', 'url' => ['/export/index']],
        ['label' => 'Invoice', 'url' => ['/invoice/index']],
        ['label' => 'Roles', 'url' => ['/admin']],
    ];
} else if(isset($Role['customer'])){
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
      // ['label' => 'Customer', 'url' => ['/customer/index']],
      // ['label' => 'Consignee', 'url' => ['/consignee/index']],
       ['label' => 'Autos', 'url' => ['/vehicle/index']],
       ['label' => 'Container', 'url' => ['/export/index']],
       ['label' => 'Auto Container', 'url' => ['/vehicle-export/index']],
       ['label' => 'Invoice', 'url' => ['/invoice/index']],
     //  ['label' => 'Roles', 'url' => ['/admin']],
   ]; 
}
else {
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
      // ['label' => 'Customer', 'url' => ['/customer/index']],
      // ['label' => 'Consignee', 'url' => ['/consignee/index']],
       ['label' => 'Vehicle', 'url' => ['/vehicle/index']],
       ['label' => 'Export', 'url' => ['/export/index']],
       ['label' => 'Invoice', 'url' => ['/invoice/index']],
     //  ['label' => 'Roles', 'url' => ['/admin']],
   ]; 
}
   }
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => ' btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>