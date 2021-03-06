<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url()?>asisst/admin_asset/css/bootstrap-arabic-theme.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>asisst/admin_asset/css/bootstrap-arabic.min.css" />
    <link rel="stylesheet" href="<?php echo base_url()?>asisst/admin_asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>asisst/admin_asset/css/style.css">



	<style type="text/css">
		.bond-header{
		  visibility: hidden;
			height: 80;
			/*margin-bottom: 30px;*/
		}
		.bond-header .right-img img,
		.bond-header .left-img img{
			width: 85%;
			height: 80px;
		}
		.border-box {
			padding: 5px 20px;
			border: 4px double #999;
			border-radius: 29px;
		}
		.border-box-h{
			padding: 10px 20px;
			border: 2px solid #222;
			border-radius: 29px;
		}
		.main-bond-title{
			display: table;
			height: 100px;
			text-align: center;
			width: 100%;
		}
		.main-bond-title h3{
			display: table-cell;
			vertical-align: middle;
		}
		.bond-body {
			padding: 25px;
		/*	border: 2px solid #222;*/
			display: inline-block;
			width: 100%;
			border-radius: 30px;
			background: url(img/back2.jpg);
			background-position: center;
			background-size: 50% 100%;
			background-repeat: no-repeat;
		}

        @media all {
            .page-break	{ display: none; }
        }

        @media print {
            .page-break	{ display: block; page-break-before: always; }
        }
		.bond-body h5 {
    font-size: 18px;
    margin: 5px 0;
}

	</style>



</head>
<body>



<div id="printdiv"  >


<!-- div1 -->


	<div class="bond-header">
		<div class="col-xs-4 pad-2">
			<div class="right-img">
			<img src="<?php echo base_url() ?>asisst/admin_asset/img/pills/sympol1.png"
            onerror="this.src='<?php echo base_url() ?>asisst/admin_asset/img/logo.png'">
			</div>
		</div>
		<div class="col-xs-4 pad-2">
			<div class="main-bond-title">
				<h3 class="text-center"><span class="border-box">إيصال إستلام</span></h3>
			</div>
		</div>
		<div class="col-xs-4 pad-2">
			<div class="left-img">
			<img src="<?php echo base_url() ?>asisst/admin_asset/img/pills/sympol2.png"
            onerror="this.src='<?php echo base_url() ?>asisst/admin_asset/img/logo.png'">
			</div>
		</div>
	</div>


	<div class="bond-body">

		<!-- ahmed -->

		            <div class="col-xs-12 no-padding">
                        <div class="col-xs-1">
                        </div>
                        <div class="col-xs-6">
                            <h6> نوع الإيصال : <span id="tawred_type_span">
                                    <?php if(!empty($result->pill_type_title)){ echo$result->pill_type_title; } ?>
                                </span></h6>
                        </div>

                        <div class="col-xs-5  no-padding">
                            <h6> طريقة التوريد : <span id="pay_method_span">
											<?php
								$pay_method_arr =array('إختر',1=>'نقدي',2=>'شيك',3=>'شبكة',4=>'إيداع نقدي',5=>'إيداع شيك',6=>'تحويل',7=>'أمر مستديم');

											if(!empty($result->pay_method)){ echo$pay_method_arr[$result->pay_method]; } ?>
                                </span></h6>
                        </div>
                    </div>

		<div class="col-xs-12 no-padding">
			<div class="col-xs-4">
				<h5>المبلغ :<span><?php if(!empty($result->value)){
                                        echo$result->value; }else{ echo 0;}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>الرقم :<span><?=$result->pill_num?></span></h5>
			</div>
			<div class="col-xs-5">
				<h5 style="float:right;">التاريخ :<span style="float:left"><?=$result->pill_date?></span></h5>
			</div>
		</div>





<!--
	<div class="col-xs-12 no-padding">
			<div class="col-xs-4">
				<h5>نوع التبرع:<span><?php  if(!empty($result->erad_title)){
                                        echo$result->erad_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>الفئة :<span><?php  if(!empty($result->fe2a_type_title)){
                                        echo$result->fe2a_type_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-5">
				<h5>البند :<span ><?php  if(!empty($result->band_title)){
                                        echo$result->band_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>
-->
		<div class="col-xs-12">
			<h5>استلمنا من :<span>
            <?php  if(!empty($titles[$result->laqab])){
                                        echo$titles[$result->laqab]->title_setting;  echo'/';} ?>
                                        <?php  if(!empty($result->person_name)){
                                        echo$result->person_name; }else{ echo'غير محدد';}?>
                                        <?php  if(!empty($greetings[$result->tahia])){
                                        echo$greetings[$result->tahia]->title_setting; } ?>
            </span></h5>
		</div>


		<div class="col-xs-12">
			<h5>مبلغاَ وقدره :<span>     <?php if(!empty($ArabicNum)){
                            echo$ArabicNum; } ?></span></h5>
		</div>

<?php if( $result->pay_method ==2){ ?>
	<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>رقم الشيك : <span><?php  if(!empty($result->cheq_num)){
					   echo$result->cheq_num; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5>على بنــــك : <span><?php  if(!empty($result->bank_title)){
					   echo$result->bank_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>بتـــاريخ : <span><?php  if(!empty($result->date)){
					   echo$result->date; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>
			  <?php }elseif( $result->pay_method ==3){ ?>
	<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>رقم الجهاز: <span><?php  if(!empty($result->device_num)){
					   echo$result->device_num; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5>رقم (التفويض) : <span><?php  if(!empty($result->tafwed_num)){
					   echo$result->tafwed_num; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5 style="float:right;">تاريخ العملية : <span><?php  if(!empty($result->process_date)){
					   echo$result->process_date; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>

	<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>إسم البنك : <span><?php  if(!empty($result->bank_title)){
					   echo$result->bank_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5>الحساب البنكي : <span><?php  if(!empty($result->bank_account_title)){
					   echo$result->bank_account_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>رقم الحساب البنكي : <span><?php  if(!empty($result->bank_account_num_title)){
					   echo$result->bank_account_num_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>


				<?php }elseif( $result->pay_method ==4 || $result->pay_method ==5 || $result->pay_method ==6){ ?>


		<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>رقم المرجع : <span><?php  if(!empty($result->marg3_num)){
					   echo$result->marg3_num; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5 style="float:right;">تاريخ العملية : <span><?php  if(!empty($result->marg3_date)){
					   echo$result->marg3_date; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>إسم البنك : <span><?php  if(!empty($result->bank_title)){
					   echo$result->bank_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>
		<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>الحساب البنكي : <span><?php  if(!empty($result->bank_account_title)){
					   echo$result->bank_account_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5>رقم الحساب البنكي : <span><?php  if(!empty($result->bank_account_num_title)){
					   echo$result->bank_account_num_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>كود الحساب : <span> </span></h5>
			</div>
		</div>



				<?php }elseif( $result->pay_method ==7){ ?>
				<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>إسم البنك : <span><?php  if(!empty($result->bank_title)){
					   echo$result->bank_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5>الحساب البنكي : <span><?php  if(!empty($result->bank_account_title)){
					   echo$result->bank_account_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>رقم الحساب البنكي : <span><?php  if(!empty($result->bank_account_num_title)){
					   echo$result->bank_account_num_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>


				<?php  } ?>
				<div class="col-xs-12 no-padding">
                        <h6 style="float:right;width:65px"> عبارة عن :</h6>
                        <table class="table table-bordered table_style" style="float:right;width: 85%;table-layout:fixed">
                            <thead>
                            <tr>
                                <th  style="width:50%;" id="erad_tbro3_td"><?php if(!empty($result->erad_title)){ echo$result->erad_title; } ?></th>
                                <th  style="width:50%;" class="arabic_number2"><?php if(!empty($result->value)){ echo$result->value; } ?></th>
                                <th style="width:50%;"  id="about_td"><?php if(!empty($result->about)){ echo$result->about; } ?></th>
                            </tr>
                            </thead>
                        </table>


                    </div>

		<div class="col-xs-12 no-padding">
			<div class="col-xs-1">
			</div>
			<div class="col-xs-4">
				<h5  style="margin-top:0">المستلم<span> <?=$username?></span></h5>
			</div>
			<div class="col-xs-5">

			</div>
			<div class="col-xs-2">

			</div>

		</div>
		<div class="clearfix"></div>


	</div>
<!--
	<div class="bond-footer">
		<h5 class="border-box-h text-center">المملكة العربية السعودية - القصيم - بريدة - ص.ب821 - بريدة 51421 - هاتف : 0163851919 - جوال : 0553851919 - فاكس : 0163837737</h5>
	</div>
-->

   <!-- div 2 -->

 <!-- <div class="page-break"></div> -->

	<div class="bond-header">
		<div class="col-xs-4 pad-2">
			<div class="right-img">
			<img src="<?php echo base_url() ?>asisst/admin_asset/img/pills/sympol1.png"
            onerror="this.src='<?php echo base_url() ?>asisst/admin_asset/img/logo.png'">
			</div>
		</div>
		<div class="col-xs-4 pad-2">
			<div class="main-bond-title">
				<h3 class="text-center"><span class="border-box">إيصال إستلام</span></h3>
			</div>
		</div>
		<div class="col-xs-4 pad-2">
			<div class="left-img">
			<img src="<?php echo base_url() ?>asisst/admin_asset/img/pills/sympol2.png"
            onerror="this.src='<?php echo base_url() ?>asisst/admin_asset/img/logo.png'">
			</div>
		</div>
	</div>


	<div class="bond-body">



		            <div class="col-xs-12 no-padding">
                        <div class="col-xs-1">
                        </div>
                        <div class="col-xs-6">
                            <h6> نوع الإيصال : <span id="tawred_type_span">
                                    <?php if(!empty($result->pill_type_title)){ echo$result->pill_type_title; } ?>
                                </span></h6>
                        </div>

                        <div class="col-xs-5  no-padding">
                            <h6> طريقة التوريد : <span id="pay_method_span">
											<?php
								$pay_method_arr =array('إختر',1=>'نقدي',2=>'شيك',3=>'شبكة',4=>'إيداع نقدي',5=>'إيداع شيك',6=>'تحويل',7=>'أمر مستديم');

											if(!empty($result->pay_method)){ echo$pay_method_arr[$result->pay_method]; } ?>
                                </span></h6>
                        </div>
                    </div>


		<div class="col-xs-12 no-padding">
			<div class="col-xs-4">
				<h5>المبلغ :<span><?php if(!empty($result->value)){
                                        echo$result->value; }else{ echo 0;}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>الرقم :<span><?=$result->pill_num?></span></h5>
			</div>
			<div class="col-xs-5">
				<h5 style="float:right;">التاريخ :<span style="float:left"><?=$result->pill_date?></span></h5>
			</div>
		</div>
		<!-- ahmed -->





<!--
	<div class="col-xs-12 no-padding">
			<div class="col-xs-4">
				<h5>نوع التبرع:<span><?php  if(!empty($result->erad_title)){
                                        echo$result->erad_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>الفئة :<span><?php  if(!empty($result->fe2a_type_title)){
                                        echo$result->fe2a_type_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-5">
				<h5>البند :<span ><?php  if(!empty($result->band_title)){
                                        echo$result->band_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>

-->
		<!-- ahmed -->


		<div class="col-xs-12">
			<h5>استلمنا من :<span>
            <?php  if(!empty($titles[$result->laqab])){
                                        echo$titles[$result->laqab]->title_setting;  echo'/';} ?>
                                        <?php  if(!empty($result->person_name)){
                                        echo$result->person_name; }else{ echo'غير محدد';}?>
                                        <?php  if(!empty($greetings[$result->tahia])){
                                        echo$greetings[$result->tahia]->title_setting; } ?>
            </span></h5>
		</div>


		<div class="col-xs-12">
			<h5>مبلغاَ وقدره :<span>     <?php if(!empty($ArabicNum)){
                            echo$ArabicNum; } ?></span></h5>
		</div>
<?php if( $result->pay_method ==2){ ?>
	<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>رقم الشيك : <span><?php  if(!empty($result->cheq_num)){
					   echo$result->cheq_num; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5>على بنــــك : <span><?php  if(!empty($result->bank_title)){
					   echo$result->bank_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5 style="float:right;">بتـــاريخ : <span><?php  if(!empty($result->date)){
					   echo$result->date; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>



			  <?php }elseif( $result->pay_method ==3){ ?>



	<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>رقم الجهاز: <span><?php  if(!empty($result->device_num)){
					   echo$result->device_num; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5>رقم (التفويض) : <span><?php  if(!empty($result->tafwed_num)){
					   echo$result->tafwed_num; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5 style="float:right;">تاريخ العملية : <span><?php  if(!empty($result->process_date)){
					   echo$result->process_date; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>

	<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>إسم البنك : <span><?php  if(!empty($result->bank_title)){
					   echo$result->bank_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5>الحساب البنكي : <span><?php  if(!empty($result->bank_account_title)){
					   echo$result->bank_account_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>رقم الحساب البنكي : <span><?php  if(!empty($result->bank_account_num_title)){
					   echo$result->bank_account_num_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>


				<?php }elseif( $result->pay_method ==4 || $result->pay_method ==5 || $result->pay_method ==6){ ?>


		<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>رقم المرجع : <span><?php  if(!empty($result->marg3_num)){
					   echo$result->marg3_num; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5 style="float:right;">تاريخ العملية : <span><?php  if(!empty($result->marg3_date)){
					   echo$result->marg3_date; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>إسم البنك : <span><?php  if(!empty($result->bank_title)){
					   echo$result->bank_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>
		<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>الحساب البنكي : <span><?php  if(!empty($result->bank_account_title)){
					   echo$result->bank_account_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5>رقم الحساب البنكي : <span><?php  if(!empty($result->bank_account_num_title)){
					   echo$result->bank_account_num_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>كود الحساب : <span> </span></h5>
			</div>
		</div>



				<?php }elseif( $result->pay_method ==7){ ?>
				<div class="col-xs-12 no-padding">
			<div class="col-xs-5">
				<h5>إسم البنك : <span><?php  if(!empty($result->bank_title)){
					   echo$result->bank_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-4">
				<h5>الحساب البنكي : <span><?php  if(!empty($result->bank_account_title)){
					   echo$result->bank_account_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
			<div class="col-xs-3">
				<h5>رقم الحساب البنكي : <span><?php  if(!empty($result->bank_account_num_title)){
					   echo$result->bank_account_num_title; }else{ echo'غير محدد';}?></span></h5>
			</div>
		</div>


				<?php  } ?>
				<div class="col-xs-12 no-padding">
                        <h6 style="float:right;width:65px"> عبارة عن :</h6>
                        <table class="table table-bordered table_style" style="float:right;width: 85%;table-layout:fixed">
                            <thead>
                            <tr>
                                <th  style="width:50%;" id="erad_tbro3_td"><?php if(!empty($result->erad_title)){ echo$result->erad_title; } ?></th>
                                <th  style="width:50%;" class="arabic_number2"><?php if(!empty($result->value)){ echo$result->value; } ?></th>
                                <th style="width:50%;"  id="about_td"><?php if(!empty($result->about)){ echo$result->about; } ?></th>
                            </tr>
                            </thead>
                        </table>


                    </div>

		<div class="col-xs-12 no-padding">
			<div class="col-xs-1">
			</div>
			<div class="col-xs-4">
				<h5 style="margin-top:0">المستلم<span> <?=$username?></span></h5>
			</div>
			<div class="col-xs-5">

			</div>
			<div class="col-xs-2">

			</div>

		</div>


	</div>
	<div class="clearfix"></div>
	






</div>
<!--
<div class="bond-footer">
		<h5 class="border-box-h text-center">المملكة العربية السعودية - القصيم - بريدة - ص.ب821 - بريدة 51421 - هاتف : 0163851919 - جوال : 0553851919 - فاكس : 0163837737</h5>
	</div>
    -->
   <!--
    <script>
       var divElements = document . getElementById("printdiv") . innerHTML;
        var oldPage = document . body . innerHTML;
        document . body . innerHTML =
            "<html><head><title></title></head><body><div id='printdiv'>" +
            divElements + "</div></body>";
        window .print();
       setTimeout(function () {
        window.location.href ="<?php echo base_url('all_Finance_resource/all_pills/AllPills/addPills') ?>";
         }, 500);

    </script>

-->