<?php
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\helpers\Html;
/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
$this->title = 'Country Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">


<strong>Country Choice</strong>
    
<div class="row options">
<?php
        Modal::begin([

            'id' => 'modal',
            'size' => 'modal-lg',
        ]);

        echo '<div id="modalContent"></div>';

        Modal::end();
        ?>
<?php foreach($data as $data){ ?>

<div class="col-md-4">
<input class="big-checkbox " type="checkbox" id="<?= $data->id; ?>">
		<label for="<?= $data->id; ?>" class="checkbox-1">
		<?= $data->country; ?>
        </label>
        <br>
        <button type="button" class="btn btn-dark" style="margin-top: 15px;margin-bottom: 15px;"><a target="_blank" href="<?= Yii::$app->homeUrl; ?>/design-info/view?id=<?php echo $data->id; ?>">More Info</a></button>
</div>
<?php } ?>
</div>
<br/>
<?php
$user_id = Yii::$app->user->getId();
    $Role =   Yii::$app->authManager->getRolesByUser($user_id);
    if(isset($Role['super_admin'])){
?>
<p class="">
<?= Html::button(Yii::t('app', 'Add Country'), ['value' => Url::to('@web/design-info/create'), 'class' => 'country-btn btn btn-primery click_modal']) ?>
                </p>
<?php }?>
<strong>Choose information</strong>
<div class="row options">
    <div class="col-md-12 heading_text">
<input class="big-checkboxs general" type="checkbox" id="general">
    <label for="general" class="checkbox-1">
		General Information
</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs general" type="checkbox" id="hague">
<label for="hague" class="checkbox-1">
Hague member 
		
	
</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs general" type="checkbox" id="maxterm">
		<label for="maxterm" class="checkbox-1">
		Max term 
		</label>

</div>

<div class="col-md-4">
<input class="big-checkboxs general" type="checkbox" id="grace">
		<label for="grace" class="checkbox-1">
        Grace period
		</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs general" type="checkbox" id="what">
		<label for="what" class="checkbox-1">
        What can be registered 
		</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs general" type="checkbox" id="fees">
		<label for="fees" class="checkbox-1">
        Fees
		</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs general" type="checkbox" id="renewals">
		<label for="renewals" class="checkbox-1">
        Renewals 
		</label>

</div>
<div class="col-md-12 heading_text">
<input class="big-checkboxs" type="checkbox" id="application">
    <label for="application" class="checkbox-1">
  Application requirements
</label>
</div>


<div class="col-md-4">
<input class="big-checkboxs application" type="checkbox" id="max_no">
		<label for="max_no" class="checkbox-1">
        Max. no. of designs 
		</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs application" type="checkbox" id="description">
		<label for="description" class="checkbox-1">
        Description 
		</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs application" type="checkbox" id="claim">
		<label for="claim" class="checkbox-1">
        Claim 
		</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs application" type="checkbox" id="subst_exam">
		<label for="subst_exam" class="checkbox-1">
        Substantial exam
		</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs application" type="checkbox" id="req_docs">
		<label for="req_docs" class="checkbox-1">
        Req. docs 
		</label>
</div>

<div class="col-md-4">
<input class="big-checkboxs application" type="checkbox" id="deferment_period">
		<label for="deferment_period" class="checkbox-1">
        Deferment period 
		</label>
</div>

<div class="col-md-12 heading_text">
<input class="big-checkboxs" type="checkbox" id="reproduction">
    <label for="reproduction" class="checkbox-1">
    Reproduction requirements: 
</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs reproduction" type="checkbox" id="dashed">
		<label for="dashed" class="checkbox-1">
        Dashed lines 
		</label>
</div>
<div class="col-md-4">
<input class="big-checkboxs reproduction" type="checkbox" id="shading">
		<label for="shading" class="checkbox-1">
        Shading 
		</label>
</div>

<div class="col-md-4">
<input class="big-checkboxs reproduction" type="checkbox" id="sections">
		<label for="sections" class="checkbox-1">
        Sections allowed 
		</label>
</div>

<div class="col-md-4">
<input class="big-checkboxs reproduction" type="checkbox" id="reprod">
        <label for="reprod" class="checkbox-1">
        Figure notes 
        </label>
</div>
<br/>
<strong>Country Info</strong>
<table class="table table-striped table-bordered" style="margin-top:20px">
                                    <thead>
                                        <tr>
                                                <th class="display country">Country</th>
                                                <th class="display hague">Hague</th>
                                                <th class="display maxterm">maxterm</th>
                                                <th class="display renewals">renewals</th>
                                                <th class="display grace">grace</th>
                                                <th class="display max_no">max_no</th>
                                                <th class="display what">what</th>
                                                <th class="display subst_exam">
                                                </th>
                                                <th class="display fees">fees</th>
                                               
                                                <th class="display description">description</th>
                                                <th class="display claim">claim</th>
                                                <th class="display req_docs">req_docs</th>
                                                <th class="display deferment_period">deferment_period</th>
                                                <th class="display reprod">reprod</th>
                                                <th class="display dashed">dashed</th>
                                                <th class="display shading">shading</th>
                                                <th class="display sections">sections</th>
                                                
                                                
                                                
                                        </tr>
                                    </thead>
                                    <tbody class="detail_single_country" id="ros">
                                        <tr>
                                     
                                       </tr>
                                     
                                    </tbody>
                                </table>
</div>

</div>
<script>
     var group = [];
     var country = [];
     var country_title = [];
    $(document).ready(function() {


        $("body").delegate(".click_modal","click",function(){
     
    $('#modal').modal('show').find('#modalContent').load($(this).attr('value'));
    return false;
    
 });
    /**********customer modal*** */
     $("body").delegate(".big-checkbox","click",function(){
        var id =    $(this).attr('id');
        var countryClass="country_"+id;
        
         if(this.checked){
            country_title.push(id);
            if($("tr").hasClass(countryClass))
            {
                $("."+countryClass).show();
                $(".country").removeClass('display');
                
                return;
            }
         country.push(id);
	        $.ajax({
                type: "POST",
                data:  "id="+id,
               // data: "id="+id+"status+"+status,
                url: "<?php echo Yii::$app->getUrlManager()->createUrl('site/ajax'); ?>",
                success: function (test) {
                    $('.detail_single_country').append(test);
                    $(".country").removeClass('display');
                    if(group){
                         
                    jQuery.each( group, function( i, val ) {
  $("."+val).removeClass('display');
  // Will stop running after "three"
//   alert(val);
   return (val != 'fifty');
});
                    }
                  //  document.getElementById('ros').appendChild(tr);
                },
                error: function (exception) {
                    alert(exception);
                }
            });
         }
         else{
            $(".country_"+id).hide();
            country = jQuery.grep(country, function(value) {
  return value != id;
});
country_title = jQuery.grep(country_title, function(value) {
  return value != id;
});
if(country_title == ""){
    $(".country").addClass('display');
    
}
         }
     });
/**********for general */
     $("body").delegate("#general","click",function(){
        if(this.checked){
        var ids = $(".general").map(function () {
            $("."+this.id).removeClass('display');
            $("#"+this.id).attr('checked', true);
            group.push(this.id);
          
        return this.id;
    }).get();  
        }else{
            var ids = $(".general").map(function () {
                $("."+this.id).addClass('display');
            $("#"+this.id).attr('checked', false);;
            group.splice( $.inArray(this.id,group) ,1 );
      
        return this.id;
    }).get();
        }
     });  
     /*******for aplication */
     $("body").delegate("#application","click",function(){
        if(this.checked){
        var ids = $(".application").map(function () {
            $("."+this.id).removeClass('display');
            $("#"+this.id).attr('checked', true);
            group.push(this.id);
          
        return this.id;
    }).get();  
        }else{
            var ids = $(".application").map(function () {
                $("."+this.id).addClass('display');
            $("#"+this.id).attr('checked', false);;
            group.splice( $.inArray(this.id,group) ,1 );
        return this.id;
    }).get();
        }
     });  
     /***************for reproduction */
     $("body").delegate("#reproduction","click",function(){
        if(this.checked){
        var ids = $(".reproduction").map(function () {
            $("."+this.id).removeClass('display');
            $("#"+this.id).attr('checked', true);
            group.push(this.id);
          
        return this.id;
    }).get();  
        }else{
            var ids = $(".reproduction").map(function () {
                $("."+this.id).addClass('display');
            $("#"+this.id).attr('checked', false);;
            group.splice( $.inArray(this.id,group) ,1 );
        return this.id;
    }).get();
        }
     });  
     /*********for single check box */
     $("body").delegate(".big-checkboxs","click",function(){
        var id = $(this).attr('id');
        if(this.checked){
        group.push(id);
$("."+id).removeClass('display');
        
        }else{
$("."+id).addClass('display');
            
            group = jQuery.grep(group, function(value) {
  return value != id;
});
        }
        //  alert(group);


     });     
    
        // $("body").delegate("#hague","click",function(){
        // debugger;
        // $(".country").css("display : block;");
        //             });

});
    </script>