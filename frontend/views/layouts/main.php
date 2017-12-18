<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([]);
    ?>
<a href="index">
    <img src="<?= \yii\helpers\Url::to('@web/img/logo.png', true) ?>">
    </a>
     <?php
    $user_id = Yii::$app->user->getId();
    $Role =   Yii::$app->authManager->getRolesByUser($user_id);
    if(isset($Role['super_admin'])){
       $menuItems = [
        //    ['label' => 'Home', 'url' => ['/site/index']],
           //['label' => 'Roles', 'url' => ['/admin']],
           //['label' => 'Design Info', 'url' => ['/design-info/index']],
           ['label' => 'About Guardian', 'url' => ['/site/about-guardian']],
           ['label' => 'Why Design', 'url' => ['/site/why-design']],
           ['label' => 'Price Calculator', 'url' => ['/site/price-calculator']],
           ['label' => 'Country Details', 'url' => ['/site/country-detail']],
           ['label' => 'Strategy', 'url' => ['/site/strategy']],
           ['label' => 'Figure Info', 'url' => ['/site/figure-info']],
           ['label' => 'User', 'url' => ['/user/index']],
           
          
       ];
   }elseif(Yii::$app->user->isGuest){
       $menuItems = [
        ['label' => 'About Guardian', 'url' => ['/site/about-guardian']],
        ['label' => 'Why Design', 'url' => ['/site/why-design']],
        ['label' => 'Price Calculator', 'url' => ['/site/price-calculator']],
        // ['label' => 'Country Details', 'url' => ['/site/country-detail']],
        // ['label' => 'Strategy', 'url' => ['/site/strategy']],
        // ['label' => 'Figure Info', 'url' => ['/site/figure-info']],
        ['label' => 'User', 'url' => ['/user/index']],
       ];
   }else{
    $menuItems = [
        ['label' => 'About Guardian', 'url' => ['/site/about-guardian']],
        ['label' => 'Why Design', 'url' => ['/site/why-design']],
        ['label' => 'Price Calculator', 'url' => ['/site/price-calculator']],
        ['label' => 'Country Details', 'url' => ['/site/country-detail']],
        ['label' => 'Strategy', 'url' => ['/site/strategy']],
        ['label' => 'Figure Info', 'url' => ['/site/figure-info']],
        ['label' => 'User', 'url' => ['/user/index']],
        
       
    ]; 
   }

    if (Yii::$app->user->isGuest) {
       // $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
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

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right">Powered By: <a href="http://www.thecodeflex.com/">TheCodeFlex</a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
