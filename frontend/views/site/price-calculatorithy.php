<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// $this->title = 'Price Calculator';
// $this->params['breadcrumbs'][] = $this->title;
?>
<style>
/* .product_label{
	width: 89%;
    display: inline-block;
    float: left;
} */
#product{
	width: 10%;
}
.steps{
	width: 100%;
	display: block;
    font-size: 14px;
    color: #337ab7;
    font-weight: 600;
}
.option_one,.option_two,.option_three{
	display: none;
}
.display_flag{
	display: inline-block;
	color: red;
}
.half{
	float: right;
}
</style>
<div class="site-about">
<?php
    $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'],
                'action' => ['design-info/mail'],
                    ]
    );
    ?>
   <div class="row">

   <div class="col-md-12">
	 <span class="steps">Step 1</span>

		<label class="product_label" for="product" class="control-label">Please state the number of products you would like to register as a design</label>
		<input type="text"  class="form-control" name="product" id="product" name="product">
	</div>

   <div class="col-md-12">
	 <span class="steps">Step 2</span>
	 
   <label class="control-label">Please let us know if your design has been published beforehand.</label>
		<a href="#" data-toggle="tooltip" data-placement="top" title="Published is to be understood as commercially made available, or presented in events, catalogues, etc. Publication, and the date of publication, will affect the number of countries/regions in which the products can be registered as designs without any obvious risks!"><i class="fa fa-question-circle" aria-hidden="true"></i></a>
   
		<div class="radio">
		  <label>
			<input checked="checked" class="design_published" type="radio" name="design_published" value="0">
			Not published 
		  </label>
		</div>
		<div class="radio">
		  <label>
			<input type="radio" class="design_published" name="design_published" value="1">
			Published for less than 6 months 
		  </label>
		</div>
		<div class="radio">
		  <label>
			<input type="radio" class="design_published" name="design_published" value="6">
			Published for more than 6 months but less than 1 year 
		  </label>
		</div>
		<div class="radio">
		  <label>
			<input type="radio" class="design_published" name="design_published" value="12">
			Published for more than 1 year  
			<a href="#" data-toggle="tooltip" data-placement="top" title="Guardian IP Consulting does not recommend registration of designs that have been published for longer than 1 year, as they can be annulled."><i class="fa fa-question-circle" aria-hidden="true"></i></a>
			
		  </label>
		</div>
	</div>

   </div>
<div class="row">
<div class="col-md-12">
<span class="steps">Step 3</span>

<label class="control-label">Please select the type of company that you have.</label>

		<a href="#" data-toggle="tooltip" data-placement="top" title="The type of company that you have will affect the cost of registration in the US."><i class="fa fa-question-circle" aria-hidden="true"></i></a>
<div class="radio">
		  <label>
			<input checked="checked" type="radio"  name="us_company" class="us_entity" value="11">
			Big entity 
		  </label>
		</div>
		<div class="radio">
		  <label>
			<input type="radio"  name="us_company" class="us_entity" value="13">
			Small entity 
		  </label>
		</div>
		<div class="radio">
		  <label>
			<input type="radio"  name="us_company" class="us_entity" value="12">
			Micro entity
		  </label>
		</div>


</div>
<div class="col-md-12">
<span class="steps">Step 4</span>

<label class="control-label">Please select the level of reporting that you would like.</label>
<div class="radio">
		  <label>
			<input class="reporting_level" type="radio" checked="checked" name="reporting" value="1">
			Simple reporting  
			<a href="#" data-toggle="tooltip" data-placement="top" title="Only the most important events will be reported. ."><i class="fa fa-question-circle" aria-hidden="true"></i></a>
		  </label>
		</div>
		<div class="radio">
		  <label>
			<input type="radio" class="reporting_level" name="reporting" value="2">
			Advanced reporting   
			<a href="#" data-toggle="tooltip" data-placement="top" title="All events that take place during the registration process will be reported."><i class="fa fa-question-circle" aria-hidden="true"></i></a>
	    
		  </label>
		</div>
	


</div>

</div>
<div class="row">
<span class="steps">Step 5</span>

<label class="control-label">Please select the countries/region you are intrested in.</label>
		<a href="#" data-toggle="tooltip" data-placement="top" title="Only the most commonly used countries have been added, but we can offer you the possibility of registering a Design in all countries and existing regions."><i class="fa fa-question-circle" aria-hidden="true"></i></a>
   
	<h3>
<strong>National</strong></h3>
<?php
$all_countries =  \common\models\DesignPrices::find()->all();
foreach($all_countries as $all_country){
	if($all_country->WIPO == '0'){
	?>
<div class="col-md-2 big-checkbox_prices">
<input class="big-checkbox <?= $all_country->Country; ?>" name="E[<?= $all_country->Country; ?>]" value="<?= $all_country->Country; ?>" type="checkbox" id="<?= $all_country->id; ?>">
<label for="<?= $all_country->id; ?>" class="checkbox-1"> 
<?= $all_country->Country; ?>

		</label>
		<span class="half">
		<a href="#" class="<?= $all_country->Country; ?>"  id="<?= $all_country->Country; ?>1" data-toggle="tooltip" data-placement="top" title="Guardian IP Consulting does not recommend registration of designs that have been published in this country, as they can be annulled"><i class="option_one fa fa-exclamation-triangle" aria-hidden="true"></i></a>
<a href="#" class=" <?= $all_country->Country; ?>" id="<?= $all_country->Country; ?>2" data-toggle="tooltip" data-placement="top"  title="Guardian IP Consulting does not recommend registration of designs that have been published for longer than 6 months in this country, as they can be annulled"><i class="option_two fa fa-exclamation-triangle" aria-hidden="true"></i></i></a>
<a href="#" class=" <?= $all_country->Country; ?>" id="<?= $all_country->Country; ?>3" data-toggle="tooltip" data-placement="top" title="Guardian IP Consulting does not recommend registration of designs that have been published for longer than 1 year, as they can be annulled"><i class="option_three fa fa-exclamation-triangle" aria-hidden="true"></i></a>
</span>
</div>
<?php
}
}
?>

</div>
<div class="row">
	<h3>
<strong>WIPO</strong></h3>
<?php
$all_countries =  \common\models\DesignPrices::find()->all();
foreach($all_countries as $all_country){
	if($all_country->WIPO == '1' && $all_country->id != '11' && $all_country->id != '12' && $all_country->id != '13' && $all_country->id != '3'){
	?>
<div class="col-md-2 big-checkbox_prices">
<input class="big-checkbox <?= $all_country->Country; ?>" name="E[<?= $all_country->Country; ?>]" value="<?= $all_country->Country; ?>" type="checkbox" id="<?= $all_country->id; ?>">
<label for="<?= $all_country->id; ?>" class="checkbox-1">
<?= $all_country->Country; ?>

		</label>
		<span class="half">
		<a href="#" class="<?= $all_country->Country; ?>" id="<?= $all_country->Country; ?>1" data-toggle="tooltip" data-placement="top" title="Guardian IP Consulting does not recommend registration of designs that have been published in this country, as they can be annulled"><i class="option_one fa fa-exclamation-triangle" aria-hidden="true"></i></a>
<a href="#" class=" <?= $all_country->Country; ?>" id="<?= $all_country->Country; ?>2" data-toggle="tooltip" data-placement="top" title="Guardian IP Consulting does not recommend registration of designs that have been published for longer than 6 months in this country, as they can be annulled"><i class="option_two fa fa-exclamation-triangle" aria-hidden="true"></i></a>
<a href="#" class=" <?= $all_country->Country; ?>" id="<?= $all_country->Country; ?>3" data-toggle="tooltip" data-placement="top" title="Guardian IP Consulting does not recommend registration of designs that have been published for longer than 1 year, as they can be annulled"><i class="option_three fa fa-exclamation-triangle" aria-hidden="true"></i></a>
</span>
</div>
<?php
}
}
?>
	</div>
<div class="row">
<table width="100%" class="kv-grid-table table table-bordered table-striped kv-table-wrap">
<thead>
<tr>
<th></th>
<th>Countries</th>
<th>Price</th>
<th width="1%" style="visibility:hidden;"></th>
<th width="1%" style="visibility:hidden;"></th>
</tr>
</thead>
<tbody class="national_item">
<tr>
<td class="heading"><strong>National</strong></td>
<td></td>
<td></td>
<td width="1%" style="visibility:hidden;"></td>
<td width="1%" style="visibility:hidden;"></td>

</tr>
</tbody>
<tbody class="wipo_item">
<tr>
<td class="wipo"><strong>WIPO</strong></td>
<td></td>
<td></td>
<td width="1%" style="visibility:hidden;"></td>
<td width="1%" style="visibility:hidden;"></td>
</tr>

</tbody>
<tbody>
<tr>
<td class="wipo"></td>
<td><strong>Total Sum</strong></td>
<td class="all_total"></td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="row">
<div class="col-md-6">
<label>Name</label>
<input type="text"  class="form-control" name="name" >

</div>
<div class="col-md-6">
<label>Company</label>
<input type="text"  class="form-control" name="company" >

</div>
<div class="col-md-6">
<label>Telephone</label>
<input type="text"  class="form-control" name="name" >

</div>
<div class="col-md-6">
<label>E-mail </label>
<input type="email"  class="form-control" name="email" >
</div>
<div class="col-md-12">
<label>Comment</label>
<input type="textarea"  class="form-control" name="name" >
</div>
<div class="col-md-12">
<label>Book a meeting</label>
<input class="big-checkboxes" name="meeting" value="" type="checkbox" id="">
</div>
</div>

<button class="btn btn-primary">Save</button>
<?php ActiveForm::end(); ?>
<script>
$(document).ready(function(){
	var national = [];
     var wipo = [];
     var total_sum = [];
		 national_sum= 0;
		 wipo_sum =0;
		 sum = 0;
    $('[data-toggle="tooltip"]').tooltip(); 
		     /**********customer modal*** */
				 $("body").delegate(".big-checkbox","click",function(){
				var id =    $(this).attr('id');
				if(id == '27'){
			
				id =	$('input[name=us_company]:checked').val();
				}
	
				var multiplyBy=parseFloat($("#product").val());
   if(this.checked){
					
	        $.ajax({
                type: "POST",
                data:  "id="+id,
                url: "<?php echo Yii::$app->getUrlManager()->createUrl('site/ajaxprices'); ?>",
                success: function (test) {
									$no_of_product = $('#product').val();
									$no_of_product = 	parseFloat($no_of_product) - 1;
									var radioValue = $("input[name='reporting']:checked"). val();
									var json = $.parseJSON(test);
									$original_price=0;
									if(radioValue == '1'){
									$original_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeSimple1) + (parseFloat(json.OurFeeSimple2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
									$hidden_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeDetailed1) + (parseFloat(json.OurFeeDetailed2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
									$price = $original_price;
									}else{
									$original_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeDetailed1) + (parseFloat(json.OurFeeDetailed2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
									$hidden_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeSimple1) + (parseFloat(json.OurFeeSimple2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
								$price = $original_price;
									}
								if(json.WIPO == '0'){
									$('.national_item').append('<tr class="national-'+json.Country.replace(/\s+/g, '')+'"><td></td><td>'+json.Country+'</td><td class="national-sum">'+$price+'</td><td class="hidden-price" style="visibility:hidden" width="1%">'+$original_price+'</td><td class="hidden-price_formula" style="visibility:hidden" width="1%">'+$hidden_price+'</td></tr>');
									CalculateSum();
								}else{
		wipo.push(json.id);
		if(wipo.length == '1'){
			var wipo_id = 3;
		Ajax(wipo_id);

		}
									$('.wipo_item').append('<tr class="wipo-'+json.Country.replace(/\s+/g, '')+'"><td></td><td>'+json.Country+'</td><td class="wipo-sum">'+$price+'</td><td class="hidden-price" style="visibility:hidden" width="1%">'+$original_price+'</td><td class="hidden-price_formula" style="visibility:hidden" width="1%">'+$hidden_price+'</td></tr>');
									CalculateSum();
							
								}
				   },
                error: function (exception) {
                    alert(exception);
                }
						});
							 //for secton 2
				 var period = $('input[name=design_published]:checked').val();
				 if(period == '12'){
					
					$(this).siblings().eq(1).children().eq(2).children().addClass('display_flag');
				 }
				 if(period == '6'){
					
					 if($(this).hasClass('Norway') || $(this).hasClass('Japan') || $(this).hasClass('Brazil') || $(this).hasClass('Hong') || $(this).hasClass('India') || $(this).hasClass('Turkey')){
						$(this).siblings().eq(1).children().eq(1).children().addClass('display_flag');

					 }
					 else if($(this).hasClass('Australia') || $(this).hasClass('Zealand') || $(this).hasClass('China'))
					 {
						$(this).siblings().eq(1).children().eq(0).children().addClass('display_flag');

					 }
				 }
				 if(period == '1'){
					
		if($(this).hasClass('Australia') || $(this).hasClass('Zealand') || $(this).hasClass('China')){
						$(this).siblings().eq(1).children().eq(0).children().addClass('display_flag');

					 }
				 }	 
				 
				
         }
         else{
			
				  var period = $('input[name=design_published]:checked').val();
				 if(period == '12'){
					$(this).siblings().eq(1).children().eq(2).children().removeClass('display_flag');
				 }
				 if(period == '6'){
					
					 if($(this).hasClass('Norway') || $(this).hasClass('Japan') || $(this).hasClass('Brazil') || $(this).hasClass('Hong') || $(this).hasClass('India') || $(this).hasClass('Turkey')){
						$(this).siblings().eq(1).children().eq(1).children().removeClass('display_flag');

					 }
					 else if($(this).hasClass('Australia') || $(this).hasClass('Zealand') || $(this).hasClass('China'))
					 {
						$(this).siblings().eq(1).children().eq(0).children().removeClass('display_flag');

					 }
				 }
				 if(period == '1'){
					
		if($(this).hasClass('Australia') || $(this).hasClass('Zealand') || $(this).hasClass('China')){
						$(this).siblings().eq(1).children().eq(0).children().removeClass('display_flag');

					 }
				 }
					wipo = jQuery.grep(wipo, function(value) {
  return value != id;
});

if(wipo.length<2){

	$('.wipo-WIPOBasicFee').remove();
	wipo = [];
}
//remove USA 
if(id == '11' || id == '12' || id == '13'){
	$('.wipo-USAL').remove();
	$('.wipo-USAM').remove();
	$('.wipo-USAS').remove();

}else{

					var item=$(this).siblings()[0];
					var country=$(item).html().replace(/\s+/g, '');
					var isNational=$(this).parent().parent().find("h3").html().indexOf("National")>0;
					if(isNational)
					{
						$('.national-'+country).remove();
					}
					else
					{
						$('.wipo-'+country).remove();
					}
					
				 }
				 CalculateSum();
				 
				 }

			
			
     });
		//  step 1 product change
		 $("#product").change(function() {
			 wipo = [];
			$(".national_item").find("tr:gt(0)").remove();
			$(".wipo_item").find("tr:gt(0)").remove();
				ChangePrices_afte_formula();
		 });
	function ChangePrices_afte_formula(){
			$('.big-checkbox:checkbox:checked').each(function () {
			var id = $(this).attr('id');
			Ajaxonproductchange(id);
			});
		 }
		//  step 4 check level
		 $("body").delegate(".reporting_level","click",function(){
// var rep = 			$('input[name=reporting]:checked').val();
wipo = [];
			$(".national_item").find("tr:gt(0)").remove();
			$(".wipo_item").find("tr:gt(0)").remove();
				ChangePrices_afte_formula();
		 });
		//  step 3 us check
		 $("body").delegate(".us_entity","click",function(){
			var id =	$('input[name=us_company]:checked').val();
			$("[class^=wipo-USA]").remove();

if($(".USA").is(':checked')){

	Ajax(id);
}
		 });
		 //step 2
		 $("body").delegate(".design_published","click",function(){
			var period = $('input[name=design_published]:checked').val();
			 
			$('.big-checkbox:checkbox:checked').each(function () {
				if(period == '12'){
					
					$(this).siblings().eq(1).children().eq(2).children().addClass('display_flag');
				 }else{
					$(this).siblings().eq(1).children().eq(2).children().removeClass('display_flag');
					 
				 }
				 if(period == '6'){
					
					 if($(this).hasClass('Norway') || $(this).hasClass('Japan') || $(this).hasClass('Brazil') || $(this).hasClass('Hong') || $(this).hasClass('India') || $(this).hasClass('Turkey')){
						$(this).siblings().eq(1).children().eq(1).children().addClass('display_flag');

					 }
					 else if($(this).hasClass('Australia') || $(this).hasClass('Zealand') || $(this).hasClass('China'))
					 {
						$(this).siblings().eq(1).children().eq(0).children().addClass('display_flag');

					 }
				 }else{
					if($(this).hasClass('Norway') || $(this).hasClass('Japan') || $(this).hasClass('Brazil') || $(this).hasClass('Hong') || $(this).hasClass('India') || $(this).hasClass('Turkey')){
						$(this).siblings().eq(1).children().eq(1).children().removeClass('display_flag');

					 }
					 else if($(this).hasClass('Australia') || $(this).hasClass('Zealand') || $(this).hasClass('China'))
					 {
						$(this).siblings().eq(1).children().eq(0).children().removeClass('display_flag');

					 } 
				 }
				 if(period == '1'){
					
		if($(this).hasClass('Australia') || $(this).hasClass('Zealand') || $(this).hasClass('China')){
						$(this).siblings().eq(1).children().eq(0).children().addClass('display_flag');

					 }else{
						$(this).siblings().eq(1).children().eq(0).children().removeClass('display_flag');
						 
					 }
				 }	 
				 
});

		 });	 
// initial sum
function CalculateSuminitial(national_sum,wipo_sum,sum)
{
$('.wipo-sum').each(function(){
	wipo_sum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
});
$('.national-sum').each(function(){
	
	national_sum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
});
sum=national_sum + wipo_sum;
$('.all_total').html(sum);
}
		//  calculate sum
		 function CalculateSum()
{
	var national_sum = 0;
	var wipo_sum=0;
	var sum=0;
$('.wipo-sum').each(function(){
	wipo_sum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
});
$('.national-sum').each(function(){
	
	national_sum += parseFloat($(this).text());  // Or this.innerHTML, this.innerText
});
sum=national_sum + wipo_sum;
$('.all_total').html(sum);
}
function Advanceprices()
{
	var multiplyBy=parseFloat($("#product").val());
	$('.hidden-price_formula').each(function(){
		$result=parseFloat($(this).text())*multiplyBy;
    $(this).prev().prev().text($result);  
});

	CalculateSum();
}
function ChangePrices()
{
	var multiplyBy=parseFloat($("#product").val());
	$('.hidden-price').each(function(){
		$result=parseFloat($(this).text())*multiplyBy;
    $(this).prev().text($result);  
});

	CalculateSum();
}

function Ajaxonproductchange(id){
	
	$.ajax({
                type: "POST",
                data:  "id="+id,
                url: "<?php echo Yii::$app->getUrlManager()->createUrl('site/ajaxprices'); ?>",
                success: function (test) {
									$no_of_product = $('#product').val();
									$no_of_product = 	parseFloat($no_of_product) - 1;
									var radioValue = $("input[name='reporting']:checked"). val();
									var json = $.parseJSON(test);
									$original_price=0;
										if(radioValue == '1'){
									$original_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeSimple1) + (parseFloat(json.OurFeeSimple2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
									$hidden_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeDetailed1) + (parseFloat(json.OurFeeDetailed2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
									$price = $original_price;
									}else{
									$original_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeDetailed1) + (parseFloat(json.OurFeeDetailed2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
									$hidden_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeSimple1) + (parseFloat(json.OurFeeSimple2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
								$price = $original_price;
									}
								if(json.WIPO == '0'){
									$('.national_item').append('<tr class="national-'+json.Country.replace(/\s+/g, '')+'"><td></td><td>'+json.Country+'</td><td class="national-sum">'+$price+'</td><td class="hidden-price" style="visibility:hidden" width="1%">'+$original_price+'</td><td class="hidden-price_formula" style="visibility:hidden" width="1%">'+$hidden_price+'</td></tr>');
								//	CalculateSuminitial($price,wipo_sum,sum);
				 CalculateSum();
							
								}else{
		   wipo.push(json.id);
	
		   if(wipo.length == '1'){
			var wipo_id = 3;
			
		Ajax(wipo_id);

		}
	
									$('.wipo_item').append('<tr class="wipo-'+json.Country.replace(/\s+/g, '')+'"><td></td><td>'+json.Country+'</td><td class="wipo-sum">'+$price+'</td><td class="hidden-price" style="visibility:hidden" width="1%">'+$original_price+'</td><td class="hidden-price_formula" style="visibility:hidden" width="1%">'+$hidden_price+'</td></tr>');
				 CalculateSum();
							
								}
				   },
                error: function (exception) {
                    alert(exception);
                }
						});
}
function Ajax(id){
	$.ajax({
                type: "POST",
                data:  "id="+id,
                url: "<?php echo Yii::$app->getUrlManager()->createUrl('site/ajaxprices'); ?>",
                success: function (test) {
									$no_of_product = $('#product').val();
									$no_of_product = 	parseFloat($no_of_product) - 1;
									var radioValue = $("input[name='reporting']:checked"). val();
									var json = $.parseJSON(test);
									$original_price=0;
										if(radioValue == '1'){
									$original_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeSimple1) + (parseFloat(json.OurFeeSimple2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
									$hidden_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeDetailed1) + (parseFloat(json.OurFeeDetailed2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
									$price = $original_price;
									}else{
									$original_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeDetailed1) + (parseFloat(json.OurFeeDetailed2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
									$hidden_price = parseFloat(json.OfficialFee1) + (parseFloat(json.OfficialFee2plus) * $no_of_product) + parseFloat(json.OurFeeSimple1) + (parseFloat(json.OurFeeSimple2plus) * $no_of_product)+ parseFloat(json.AgentFee1) + (parseFloat(json.AgentFee2plus) * $no_of_product);
								$price = $original_price;
									}
								if(json.WIPO == '0'){
									$('.national_item').append('<tr class="national-'+json.Country.replace(/\s+/g, '')+'"><td></td><td>'+json.Country+'</td><td class="national-sum">'+$price+'</td><td class="hidden-price" style="visibility:hidden" width="1%">'+$original_price+'</td><td class="hidden-price_formula" style="visibility:hidden" width="1%">'+$hidden_price+'</td></tr>');
								//	CalculateSuminitial($price,wipo_sum,sum);
				 CalculateSum();
							
								}else{
		   wipo.push(json.id);

									$('.wipo_item > tr:nth-child(2)').before('<tr class="wipo-'+json.Country.replace(/\s+/g, '')+'"><td></td><td>'+json.Country+'</td><td class="wipo-sum">'+$price+'</td><td class="hidden-price" style="visibility:hidden" width="1%">'+$original_price+'</td><td class="hidden-price_formula" style="visibility:hidden" width="1%">'+$hidden_price+'</td></tr>');
				 CalculateSum();
							
								}
				   },
                error: function (exception) {
                    alert(exception);
                }
						});
}
});

</script>