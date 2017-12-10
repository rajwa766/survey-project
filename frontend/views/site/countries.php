<?php

/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
?>
<div class="site-index">
<div class="container-fluid">
<h2 style="text-align:center;margin-bottom: 20px;margin-top: 70px;">Country Choice</h2>
    
<div class="row">
<?php foreach($data as $data){ ?>

<div class="col-md-3">
<input class="big-checkbox" type="checkbox" id="<?= $data->id; ?>">
		<label for="<?= $data->id; ?>" class="checkbox-1">
		<?= $data->country; ?>
		</label>

</div>
<?php } ?>
</div>
<h2 style="text-align:center;margin-bottom: 20px;">Choose information</h2>
<div class="row">
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="hague">
		<label for="hague" class="checkbox-1">
		hague
		</label>

</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="maxterm">
		<label for="maxterm" class="checkbox-1">
		maxterm
		</label>

</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="renewals">
		<label for="renewals" class="checkbox-1">
		renewals
		</label>

</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="hague">
		<label for="hague" class="checkbox-1">
		hague
		</label>

</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="grace">
		<label for="grace" class="checkbox-1">
        grace
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="max_no">
		<label for="max_no" class="checkbox-1">
        max no
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="what">
		<label for="what" class="checkbox-1">
        what
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="subst_exam">
		<label for="subst_exam" class="checkbox-1">
        subst exam
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="fees">
		<label for="fees" class="checkbox-1">
        fees
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="misc">
		<label for="misc" class="checkbox-1">
        misc
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="description">
		<label for="description" class="checkbox-1">
        description
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="claim">
		<label for="claim" class="checkbox-1">
        claim
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="req_docs">
		<label for="req_docs" class="checkbox-1">
        req docs
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="deferment_period">
		<label for="deferment_period" class="checkbox-1">
        deferment period
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="reprod">
		<label for="reprod" class="checkbox-1">
        reprod
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="dashed">
		<label for="dashed" class="checkbox-1">
        dashed
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="shading">
		<label for="shading" class="checkbox-1">
        shading
		</label>
</div>
<div class="col-md-3">
<input class="big-checkboxs" type="checkbox" id="sections">
		<label for="sections" class="checkbox-1">
        sections
		</label>
</div>
</div>
<table class="table table-striped table-bordered" style="margin-top:20px">
                                    <thead>
                                        <tr>
                                                <th>Country</th>
                                                <th>Hague</th>
                                                <th>maxterm</th>
                                                <th>renewals</th>
                                                <th>grace</th>
                                                <th>max_no</th>
                                                <th>what</th>
                                                <th>Subst_exam</th>
                                                <th>fees</th>
                                                <th>misc</th>
                                                <th>description</th>
                                                <th>claim</th>
                                                <th>req_docs</th>
                                                <th>deferment_period</th>
                                                <th>reprod</th>
                                                <th>dashed</th>
                                                <th>shading</th>
                                                <th>sections</th>
                                                
                                                
                                                
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

        // $("body").delegate("#hague","click",function(){
        // debugger;
        // $(".country").css("display : block;");
        //             });

});
    </script>