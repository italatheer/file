<style>
 label.label {
    margin-bottom: 0px !important;
    color: #002542 !important;
    display: block !important;
    text-align: right !important;
    font-size: 16px !important;
    padding: 0 !important;
    height: auto;
}
</style>
<div class="col-xs-12 fadeInUp wow">
    <div class="panel panel-bd lobidisable lobipanel lobipanel-sortable ">
        <div class="panel-heading">
            <h3 class="panel-title">تقرير الكفلاء</h3>
        </div>

        <div class="panel-body">
          <?php    ?>
            <div class="col-sm-12">
                <div class="form-group col-sm-2">
                    <label class="label">الفئه</label>
                    <select class="form-control fe2a" data-validation="required" aria-required="true" tabindex="-1" aria-hidden="true" id="fe2a">
                        <option value="0" selected="">الكل</option>
                        <option value="1">الايتام</option>
                        <option value="2">الارامل</option>

                    </select>

                </div>

                <div class="form-group col-sm-2">
                <label class="label">حالة الكفالة</label>
                    <select class="form-control" id="searchOf" onchange="searchOf(this);">
                    <option value="0" selected="selected">الكل</option>
                       <option value="1">غير مكفول</option>
                       <option value="2">مكفول</option>
                       
                    </select>
                    
                <!--    <input type="radio" value="2" name="check">مكفول
                    <input type="radio" value="1" name="check">غير مكفول
                    <input type="radio"  value="0" name="check" checked>الكل
                    
                    -->


                </div>
                <div class="form-group col-sm-4">
                
                    <button type="button" class="btn btn-labeled btn-success search" id=""   onclick="get_result();" style="margin-top: 15px;">
                            <span class="btn-label"><i class="fa fa-search-plus"></i></span>بحث
                        </button>
                </div>

            </div>

            <div id="res">
            
            </div>



            </div>
        </div>
    </div>
<script>
/*function searchOf(item)
{
    // alert(item.value);
     if(item.value==0){
        $('#k_num').prop("disabled", true); // Element(s) are now enabled.
        $('#k_num').val('');
    }
    else if(item.value==1){
       $('#k_num').prop("disabled", false); // Element(s) are now enabled. 
    }
    else if(item.value==2){
       $('#k_num').prop("disabled", false); // Element(s) are now enabled. 
    }
   
}*/

    function get_result()
    {
        var type_member=$("#searchOf").val();
       // alert(type_member);
        var fe2a=$('.fe2a').val();
        


        $.ajax({
            type: 'post',
            url: "<?php echo base_url();?>all_Finance_resource/reports/Reports/get_report_member",
            data: {type_member:type_member,fe2a:fe2a},
            beforeSend: function() {
                $('#res').html('<div class=\'loader-img\'><div class=\'bar1\'></div><div class=\'bar2\'></div><div class=\'bar3\'></div><div class=\'bar4\'></div><div class=\'bar5\'></div><div class=\'bar6\'></div></div>');
            },
            success: function (d) {
               //alert(d);
                $('#res').html(d);

            }

        });
    }

</script>