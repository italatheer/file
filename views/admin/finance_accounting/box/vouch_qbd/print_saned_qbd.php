<link rel="stylesheet" href="<?=base_url()?>asisst/admin_asset/css/bootstrap-arabic-theme.min.css" />
<link rel="stylesheet" href="<?=base_url()?>asisst/admin_asset/css/bootstrap-arabic.min.css" />
<link rel="stylesheet" href="<?=base_url()?>asisst/admin_asset/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url()?>asisst/admin_asset/css/style.css">





<style type="text/css">
    body{
       
    }
    @media print{
       .bond-qabd{
       height: 295mm ; 
        }
       .table-bordered th,.table-bordered td{
        border:1px solid #000!important;
        background-color: #dadada; 
       font-size: 15px; 
        font-weight: bold;
        
        
    }
    }
   
    .bond-qabd{
        background: url(<?php echo base_url() ?>asisst/admin_asset/img/pills/back_esal.png);
        background-position: 100%;
        background-size: 100% 100%;
        background-repeat: no-repeat;
        -webkit-print-color-adjust: exact !important;
        height: 295mm;
       
    }

    .bond-header{
        height: 55px;
        margin-bottom: 15px;
    }
    .bond-header .right-img img,
    .bond-header .left-img img{
        width: 100%;
        height: 55px;
    }
    .border-box {
        border: 1px solid #5c9842;
        background-color: #fff;
        border-radius: 5px;
        font-size: 18px;
        padding: 2px 6px;
        display: inline-block;
        min-width: 70px;
        height: 29px;
        line-height: 23px;
        text-align: center;
    }
    .border-box-h{
        padding: 3px 20px;
        border: 2px solid #222;
        border-radius: 29px;
    }
    .main-bond-title{
        display: table;
        height: 55px;
        text-align: center;
        width: 100%;
    }
    .main-bond-title h3{
        display: table-cell;
        vertical-align: middle;
        font-size: 12px;
    }
    .bond-body {
        position: relative;
        padding: 10px;
        border: 2px solid #5c9842;
        display: inline-block;
        width: 100%;
        margin-top: 15%;

    }
    .bond-body h6 {
        font-size: 11px;
    }
    .pad-2{
        padding-left: 2px;
        padding-right: 2px;
    }
    .bond-footer{
        margin-top: 15px;
    }
    .bond-footer h6{
        font-size: 11px;
    }
    .title-fe {
        position: absolute;
        top: -17px;
        right: 40%;
        border: 2px solid #5c9842;
        background-color: #fff;
        border-radius: 5px;
        font-size: 18px;
        padding: 2px 8px;
    }
    .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>th, .table>caption+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>td, .table>thead:first-child>tr:first-child>td {
        border-top: 1px solid #000;
          background-color: #dadada; 
       font-size: 15px; 
        font-weight: bold;
    }
    .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td
    {
      
        border: 1px solid #000;
        text-align: center;
        vertical-align: middle;
        font-size: 12px;
        padding: 4px 2px;
    }


.table-bordered > tbody > tr > th, .table-bordered > tbody > tr > td{
    background-color: white !important;
}


    @page {
        size:  210mm 297mm  ;
        margin: 0;
    }

.span_font{
    font-weight: bold;
    font-size: 18px;
}

    .table-bordered>thead>tr>th, .table-bordered>tbody>tr>th, 
    .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, 
    .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td
    {
        color: #000 !important;
        
        }
</style>





<?php


if(isset($result) && !empty($result)) {

    $rqm_sanad  = $result->rqm_sanad;
    $date_sanad = $result->date_sanad_ar;
    $pay_method = $result->pay_method;
    $recived_from = $result->recived_from;
    $about = $result->about;
    $sheek_num = $result->sheek_num;
    $sheek_date = $result->sheek_date;
    $bank_id_fk = $result->bank_id_fk;
    $bank_name = $result->bank_name;
    $total_value = $result->total_value;
    $details = $result->delails;
    
    $qued_rkm_id_fk = $result->qued_rkm_id_fk;


} else {
    $rqm_sanad  = 1;
    $date_sanad = date('Y-m-d');
    $pay_method = '';
    $recived_from = '';
    $about = '';
    $sheek_num = '';
    $sheek_date = '';
    $bank_id_fk = '';
    $bank_name = '';
    $details = '';
    $total_value = '';
    $qued_rkm_id_fk= '';
}
$sanadType = array(
    1=>'نقدي',
    2=>'شيك'
);


?>


<div id="printdiv" data-spy="scroll" >



   

    <div class="bond-qabd">
        <div class="container-fluid">

            <div class="bond-body">
                <span class="title-fe span_font">سند قبض / <?=$sanadType[$pay_method]?></span>
               
                <div class="col-xs-12 no-padding">

                    <div class="col-xs-4 no-padding">
                        <h5 class="span_font" style="margin-right: 20px; padding: 2px 0;">التاريخ :&nbsp&nbsp <?=$date_sanad?> م</h5>
                    </div>
                    <div class="col-xs-4 text-center">
                        <h5 class="span_font">رقم السند : &nbsp&nbsp<span class="border-box span_font"><?=$rqm_sanad?></span></h5>
                    </div>
                    
                      <div class="col-xs-4 text-center">
                        <h5 class="span_font">رقم القيد : &nbsp&nbsp<span class="border-box span_font"><?=$qued_rkm_id_fk?></span></h5>
                    </div>
                    
                    


                </div>
                

                <div class="col-xs-12 no-padding">
                    <div class="col-xs-6 no-padding">
                        <?php
                     //   print_r($details);
                        $val_data = explode(".", $total_value);
                        ?>
                        <div class="col-xs-3">
                            <h5  style="margin-right: 42px;    margin-top: 0; ">هــ  </h5>
                            <span class="border-box span_font" style="margin-right: 42px;  width: 48px; min-width: 48px;"><?php if(isset($val_data[1]) && !empty($val_data[1]))
                                  { echo $val_data[1];
                                  }else{
                                    echo'';
                                    }?> </span>
                        </div>
                        <div class="col-xs-3">
                            <h5 style="    margin-top: 0;">ريــــــــــــــــــــــــال </h5>

                            <span class="border-box span_font" style="width: 100px; min-width: 100px;" >
                            <?php if(isset($val_data[0]) && !empty($val_data[0])){
                                echo $val_data[0];}else{echo'';
                                }?> 
                            </span>
                        </div>
                    </div>
                  

                </div>




    <div class="col-xs-12 no-padding">
        <h5  style="margin: 15px 20px 15px;"><span style="border-bottom: 1px solid #000; font-weight: 600;">استـلمنــا من : </span> &nbsp; &nbsp;  <?=$recived_from?>  </h5>
    </div>


                <div class="col-xs-12 no-padding">
                    <h5  style="margin: 0 20px 15px;"><span style="border-bottom: 1px solid #000; font-weight: 600">مبلغاّ وقدره :</span>&nbsp; &nbsp; 
                        <?php if(isset($val_data[0]) && !empty($val_data[0])){
                            echo convertNumber($val_data[0]).' ريال  ';
                            }?><?php if(isset($val_data[1]) && !empty($val_data[1])){
                                echo convertNumber($val_data[1]).' هلله لاغير .';
                                }?> فقط لا غير
                    </h5>
                </div>
                <div class="col-xs-12 no-padding">
                    <h5  style="margin: 0 20px 15px;"><span style="border-bottom: 1px solid #000; font-weight: 600">عبــــــــارة عـن :</span> &nbsp; &nbsp; <?=$about?> </h5>
                </div>


                <div class="col-xs-12 no-padding">
                   
                   
            <?php 
            
      
         
             if(($result->print_type) != ''){
    if($result->print_type ==1){ ?>
    <table class="table table-bordered" style=" margin-bottom: 0px; table-layout: fixed;">
        <thead>
        <tr>
            <th style="width: 26px;">م </th>
          <!--  <th>رقم الحساب</th> -->
            <th style="width:181px;">إسم الحساب</th>
            <th style="width: 35px;">المبلغ</th>
            <th style="width:200px;">البيان</th>
            
        </tr>
        </thead>
        <tbody>
        <?php $counter =1; if(!empty($details)){
            foreach ($details as $row_detail){
                ?>
                <tr>
                    <td><?=$counter?></td>
                     <!--  <td><?=$row_detail->rqm_hesab?></td>-->
                 <td><?=$row_detail->name_hesab?></td> 
                    <td><?=$row_detail->value?></td>
                  <td><?=$row_detail->byan?></td>
                </tr>
                <?php $counter++;  } } ?>
        </tbody>
    </table>

<?php  }elseif($result->print_type == 0){ ?>

    <table class="table table-bordered" style=" margin-bottom: 0px; table-layout: fixed; width: 100%;
     
        border: 1px solid #000 !important;        background-color: #dadada; 
       font-size: 15px; 
        font-weight: bold;
    ">
        <thead>
        <tr>
            <th style="width: 40px;">م </th>
            <th style="width: 100px;">رقم الإيصال</th>
            <th style="width: 180px;">إسم المتبرع</th>
            <th style="width: 180px;">البند</th>
            <th style="width: 80px;">المبلغ</th>
        </tr>
        </thead>
        <tbody>
        <?php $counter =1; 
             if(!empty($result->pill_details)){
            foreach ($result->pill_details as $row_detail){
                ?>
                <tr>
                    <td><?=$counter?></td>
                    <td><?=$row_detail->pill_num?></td>
                    <td><?=$row_detail->person_name?></td>
                    <!--<td><?php echo$row_detail->bnd_type1_name; echo'<br>'; echo$row_detail->bnd_type2_name;?> </td>-->
                    <td><?php   if(!empty($row_detail->bnd_type1_name)){ echo$row_detail->bnd_type1_name; }
if($row_detail->bnd_type2_name){     echo'<br>';  echo$row_detail->bnd_type2_name; } ?> </td>
                    
                    
                    <td><?=$row_detail->value?></td>
                </tr>
                <?php $counter++;  } } ?>
        </tbody>
    </table>




<?php  }  
} 
?>
                    
                    
                    
                    
                </div>





                <div class="clearfix"></div>
                <br>


            </div>

            <div class="bond-footer ">
                <div class="col-xs-12 no-padding text-center">

                    <div class="col-md-4 col-xs-4 pad-2 text-center">
                        <h5 style="margin-bottom: 35px;">أمين الصندوق</h5>
                        <h5>سامى نايف الحربى</h5>
                    </div>
                    <div class="col-md-4 col-xs-4 pad-2 text-center">
                        <h5  style="margin-bottom: 35px;">المحاسب</h5>
                        <h5>        
                       
                            <?php 
                  
                  
                    if(isset($mohaseb) and $mohaseb !=null){
                        echo $mohaseb;
                    }else{
                        
                    }
                    ?></h5>
                    </div>
                    <div class="col-md-4 col-xs-4 pad-2 text-center">
                        <h5  style="margin-bottom: 35px;">مدير الشئون المالية والإدارية </h5>
                        <h5>    <?php 
                    
                    if(isset($modeer_mali) and $modeer_mali !=null){
                        echo $modeer_mali;
                    }else{
                        
                    }
                    ?></h5>
                    </div>

                </div>
            </div>
        </div>
    </div>








</div>














<script type="text/javascript" src="<?=base_url()?>asisst/admin_asset/js/jquery-1.10.1.min.js"></script>
<script src="<?=base_url()?>asisst/admin_asset/js/bootstrap-arabic.min.js"></script>
<script src="<?=base_url()?>asisst/admin_asset/js/bootstrap-select.min.js"></script>
<script src="<?=base_url()?>asisst/admin_asset/js/jquery.datetimepicker.full.js"></script>


<script src="<?=base_url()?>asisst/admin_asset/js/jquery.easing.min.js"></script>
<script src="<?=base_url()?>asisst/admin_asset/js/owl.carousel.min.js"></script>
<script src="<?=base_url()?>asisst/admin_asset/js/custom.js"></script>
<script src="<?=base_url()?>asisst/admin_asset/js/wow.min.js"></script>
<script>
    new WOW().init();
    $('.some_class').datetimepicker();
</script>




<script>

$( document ).ready(function() {
    var divElements = document . getElementById("printdiv") . innerHTML;
  
    document . body . innerHTML =
        "<html><head><title></title></head><body><div id='printdiv'>" +
        divElements + "</div></body>";
        
        setTimeout(function () {
         window .print();
    }, 2000);
    
   
    setTimeout(function () {
        window.location.href ="<?php echo base_url();?>finance_accounting/box/vouch_qbd/Vouch_qbd";
    }, 2000);
    
    });
 
    
    


</script>

