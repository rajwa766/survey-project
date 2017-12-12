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

<div class="col-md-2">
<input class="big-checkbox" type="checkbox" id="<?= $data->id; ?>">
		<label for="<?= $data->id; ?>" class="checkbox-1">
		<?= $data->country; ?>
        </label>
        <br>
        <button type="button" class="btn btn-dark" style="margin-top: 15px;margin-bottom: 15px;"><a target="_blank" href="<?= Yii::$app->homeUrl; ?>/design-info/view?id=<?php echo $data->id; ?>">More Info</a></button>
</div>
<?php } ?>
</div>
<br/>
<?php if (!Yii::$app->user->isGuest) {?>
<p class="">
<?= Html::button(Yii::t('app', 'Add Country'), ['value' => Url::to('@web/design-info/create'), 'class' => 'country-btn btn btn-primery click_modal']) ?>
                </p>
<?php }?>
<strong>Choose information</strong>
<div class="row options">
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="hague">
		<label for="hague" class="checkbox-1">
		hague
		</label>

</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="maxterm">
		<label for="maxterm" class="checkbox-1">
		maxterm
		</label>

</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="renewals">
		<label for="renewals" class="checkbox-1">
		renewals
		</label>

</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="hague">
		<label for="hague" class="checkbox-1">
		hague
		</label>

</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="grace">
		<label for="grace" class="checkbox-1">
        grace
		</label>
</div>
</div>
<div class="row options">
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="max_no">
		<label for="max_no" class="checkbox-1">
        max no
		</label>
</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="what">
		<label for="what" class="checkbox-1">
        what
		</label>
</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="subst_exam">
		<label for="subst_exam" class="checkbox-1">
        subst exam
		</label>
</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="fees">
		<label for="fees" class="checkbox-1">
        fees
		</label>
</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="misc">
        <label for="misc" class="checkbox-1">
        misc
        </label>
</div>
</div>
<div class="row options">

<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="description">
		<label for="description" class="checkbox-1">
        description
		</label>
</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="claim">
		<label for="claim" class="checkbox-1">
        claim
		</label>
</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="req_docs">
		<label for="req_docs" class="checkbox-1">
        req docs
		</label>
</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="deferment_period">
		<label for="deferment_period" class="checkbox-1">
        deferment period
		</label>
</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="reprod">
        <label for="reprod" class="checkbox-1">
        reprod
        </label>
</div>
</div>
<div class="row options">

<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="dashed">
		<label for="dashed" class="checkbox-1">
        dashed
		</label>
</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="shading">
		<label for="shading" class="checkbox-1">
        shading
		</label>
</div>
<div class="col-md-2">
<input class="big-checkboxs" type="checkbox" id="sections">
		<label for="sections" class="checkbox-1">
        sections
		</label>
</div>

</div>
<br/>
<strong>Country Info</strong>
<table class="table table-striped table-bordered" style="margin-top:20px">
                                    <thead>
                                        <tr>
                                                <th class="">Country</th>
                                                <th class="display hague">Hague</th>
                                                <th class="display maxterm">maxterm</th>
                                                <th class="display renewals">renewals</th>
                                                <th class="display grace">grace</th>
                                                <th class="display max_no">max_no</th>
                                                <th class="display what">what</th>
                                                <th class="display Subst_exam">Subst_exam</th>
                                                <th class="display fees">fees</th>
                                                <th class="display misc">misc</th>
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
    $(document).ready(function() {


        $("body").delegate(".click_modal","click",function(){
       debugger;
    $('#modal').modal('show').find('#modalContent').load($(this).attr('value'));
    return false;
    
 });
    /**********customer modal*** */
     $("body").delegate(".big-checkbox","click",function(){
		 var id =    $(this).attr('id');
 
	        $.ajax({
                type: "POST",
                data:  "id="+id,
               // data: "id="+id+"status+"+status,
                url: "<?php echo Yii::$app->getUrlManager()->createUrl('site/ajax'); ?>",
                success: function (test) {
                    $('.detail_single_country').append(test);
                  
                  //  document.getElementById('ros').appendChild(tr);
                },
                error: function (exception) {
                    alert(exception);
                }
            });
     });
     $("body").delegate(".big-checkboxs","click",function(){
         var id = $(this).attr('id');
$("."+id).removeClass('display');;
     });     
    
        // $("body").delegate("#hague","click",function(){
        // debugger;
        // $(".country").css("display : block;");
        //             });

});
    </script>