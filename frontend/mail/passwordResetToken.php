<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = "http://mallsonline.com/#/change-password?token=".$user->password_reset_token;
?>

Hello <?= Html::encode($user->username) ?>, <br/><br/>

Follow this link to reset your password: <?= Html::a('Reset Password', $resetLink) ?> <br/><br/>

We hope you enjoy our services.<br/><br/>
Regards,<br/><br/>
MALLSONLINE ADMIN
