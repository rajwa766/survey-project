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
    NavBar::begin([
     ]
    );
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

    <div class="container-fluid">
    <?php
$controller = $this->context;
$menus = $controller->module->menus;
$route = $controller->route;
foreach ($menus as $i => $menu) {
    $menus[$i]['active'] = strpos($route, trim($menu['url'][0], '/')) === 0;
}
$this->params['nav-items'] = $menus;
?>
   <div class="row">
    <div class="col-sm-3">
        <div id="manager-menu" class="list-group">
            <?php
            foreach ($menus as $menu) {
                $label = Html::tag('i', '', ['class' => 'glyphicon glyphicon-chevron-right pull-right']) .
                    Html::tag('span', Html::encode($menu['label']), []);
                $active = $menu['active'] ? ' active' : '';
                echo Html::a($label, $menu['url'], [
                    'class' => 'list-group-item' . $active,
                ]);
            }
            ?>
        </div>
    </div>
    <div class="col-sm-9">
        <?= $content ?>
    </div>
</div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
