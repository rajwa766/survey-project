<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = "http://mallsonline.com/#/activate-account?token=". $user->account_activation_token;
?>

Hello <strong><?= Html::encode($user->username) ?></strong>,<br/><br/>
We welcome you at MallsOnline. <br/><br/>

Kindly follow this link to activate your account: <?= Html::a('ACTIVATE ACCOUNT', $resetLink) ?> <br/><br/>
We hope you enjoy our services.<br/><br/>
Regards,<br/><br/>
MALLSONLINE ADMIN


