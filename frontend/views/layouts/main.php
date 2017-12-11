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

    <img src="http://localhost:8080/survey-project/frontend/web/assets/img/logo.png">
     <?php
    $user_id = Yii::$app->user->getId();
    $Role =   Yii::$app->authManager->getRolesByUser($user_id);
    if(isset($Role['super_admin'])){
       $menuItems = [
           ['label' => 'Home', 'url' => ['/site/index']],
           //['label' => 'Roles', 'url' => ['/admin']],
           //['label' => 'Design Info', 'url' => ['/design-info/index']],
           ['label' => 'Price Calculator', 'url' => ['/site/price-calculator']],
           ['label' => 'Figure Info', 'url' => ['/site/figure-info']],
           ['label' => 'Country Details', 'url' => ['/site/country-detail']],
           ['label' => 'About Guardian', 'url' => ['/site/about-guardian']],
           ['label' => 'Why Design', 'url' => ['/site/why-design']],
           ['label' => 'Strategy', 'url' => ['/site/strategy']],
          
       ];
   }else{
       $menuItems = [
           ['label' => 'Home', 'url' => ['/site/index']],
          
           ['label' => 'Price Calculator', 'url' => ['/site/price-calculator']],
           ['label' => 'Figure Info', 'url' => ['/site/figure-info']],
          ['label' => 'Country Details', 'url' => ['/site/country-detail']],
          ['label' => 'About Guardian', 'url' => ['/site/about-guardian']],
           ['label' => 'Why Design', 'url' => ['/site/why-design']],
           ['label' => 'Strategy', 'url' => ['/site/strategy']],
          // ['label' => 'Roles', 'url' => ['/admin']],
         //  ['label' => 'Contact', 'url' => ['/site/contact']],
       ];
   }

    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
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
