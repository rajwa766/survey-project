<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */


?>

Hello <strong><?= Html::encode($customer->username) ?></strong>,<br/>

Your below item reservation request has been sent successfully to the retailer with your details.<br/><br/>
We advise you to contact the retailer for verification of product availability in order to avoid any confusion or reservation’s cancellation. <br/>
Item Type : <?php echo $product->productType->name; ?><br/>
Item Name : <?php echo $product->name;?><br/>
Item Image : Attached with email<br/>
<?php foreach ($product->productVariants as $price)  
{?>
Item Price : <?php echo $price->price;?><br/>
<?php }?>
<?php 
foreach ($product->productVariants as $pv) 
{
	foreach($pv->productVariantOptions as $pvo)
	{
		echo $pvo->variant_name ." : " . $pvo->variant_value ."<br/>";
	}
}
?>
<br/>Shop Name : <?php echo $shop->shop_name;?><br/>
Mall Name : <?php echo $shop->mall->name;?><br/><br/>



We welcome you again at MallsOnline and we hope that you always enjoy our services.
<br/><br/>
Regards,<br/><br/>
MALLSONLINE RESERVATIONS DEPARTMENT
