<?php

/* @var $this yii\web\View */

//$this->title = 'My Yii Application';
?>
<div class="site-index">
<div class="container-fluid">
<h2 style="text-align:center;margin-bottom: 20px;">Country Choice</h2>
    
<div class="row">
<?php foreach($data as $data){ ?>

<div class="col-md-3">
<label class="big-checkbox">
            <input class="country-checkbox" type="checkbox" name="optradio" id="<?= $data->id; ?>">
  <?= $data->country; ?>
</label>
</div>
<?php } ?>
</div>
<table class="table table-striped table-bordered">
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
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            
                                       </tr>
                                     
                                    </tbody>
                                </table>
</div>

</div>
<script>
    $(document).ready(function() {


 
    /**********customer modal*** */
     $("body").delegate(".country-checkbox","click",function(){
		 var id =    $(this).attr('id');
      debugger;
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


});
    </script>