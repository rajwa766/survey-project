
/**********customer modal*** */
   $("body").delegate(".click_modal","click",function(){
       debugger;
    $('#modal').modal('show').find('#modalContent').load($(this).attr('value'));
    return false;
    
 });
// $("#modal").modal({
// show: false,
// backdrop: 'static',
// tabindex: false,
// });

