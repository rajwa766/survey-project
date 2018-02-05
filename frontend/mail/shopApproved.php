<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

?>

Hello <?= Html::encode($user->username) ?>,<br/><br/>
We welcome you at MallsOnline.<br/><br/>
Your account is now active and ready to be used. You can now login using your email and password at <a href="http://mallsonline.com">Malls online</a><br/><br/>
Your trial period of 7 days started and will end on <?php echo $shop->end_date; ?> and You can pay the subscription fee anytime using the website only during the trial period. <br/><br/>

We hope you enjoy our services.<br/><br/>

Regards,<br>
Malls Online Admin

