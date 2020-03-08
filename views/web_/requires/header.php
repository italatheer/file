<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demoatheer.xyz/design/3own/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Apr 2018 10:01:08 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">


    <meta name="description" content="جمعية الملك عبد العزيز الأهلية النسائية ببريدة">
    <meta name="author" content="جمعية الملك عبد العزيز الأهلية النسائية ببريدة">

    <title><?php if ((isset($this->main_data)) && (!empty($this->main_data))) {
            echo $this->main_data->name;
        } else {
            echo '';
        } ?> </title>

    <link rel="icon" type="image/png" sizes="32x32"
          href="<?= base_url()  ?>asisst/fav/favicon-16x16.png">


    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/bootstrap-arabic-theme.min.css"/>
    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/bootstrap-arabic.min.css"/>
    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/jquery.datetimepicker.css">
    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/jquery.lightbox-0.5.css">


    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>plugin/modals/component.css">


    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/animate.css">
    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" href="<?= base_url() . 'asisst/web_asset/' ?>css/responsive.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">


    <!-- Revolution Slider 5.x CSS settings -->
    <link href="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/css/settings.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/css/layers.css" rel="stylesheet"
          type="text/css"/>
    <link href="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/css/navigation.css" rel="stylesheet"
          type="text/css"/>


</head>
<?php $display=array('hidden','visible'); ?>
<?php if((isset($this->web_display))&&(!empty($this->web_display))){
    $h_logo_d=$display[$this->web_display->h_logo];
    $h_mob=$display[$this->web_display->h_mob];
    $h_date=$display[$this->web_display->h_date];
    $h_email=$display[$this->web_display->h_email];
    $h_soeial=$display[$this->web_display->h_soeial];
}else{
    $h_logo_d=$h_date=$h_email=$h_mob=$h_soeial='visible';
}  ?>
<body id="page-top" data-spy="scroll">
<!-- start bottom button -->
<div class="bottom-button">
    <a id="to-top" class="btn btn-lg btn-inverse page-scroll" href="#page-top"> <span class="sr-only">Toggle to Top Navigation</span>
        <i class="fa fa-chevron-up"></i> </a>
</div>


<header>
    <div class="top_nav">
        <div class="th-topinfo">
            <div class="col-md-5 no-padding">
                <ul class="th-emails">

                    <li style="visibility: <?=$h_email?>" ><a href="#" class="email"><i
                                    class="fa fa-envelope-o"></i> <?php if ((isset($this->main_data->emails)) && (!empty($this->main_data->emails))){
                                        echo $this->main_data->emails[0]->email;
                            } ?>
                        </a></li>
                    <li style="visibility: <?=$h_mob?>"><a href="#"><i class="fa fa-phone-square"></i> الهاتف : <span style="    font-family: arial;"><?php if ((isset($this->main_data->telphon)) && (!empty($this->main_data->telphon))){
                                    echo $this->main_data->telphon[0]->tele;
                                } ?></span>
                        </a></li>

                </ul>
            </div>
            <div class="col-md-3 no-padding" style="visibility: <?=$h_soeial?>">
                <ul class="th-socialicons list-unstyled">
                    <?php if ((isset($this->soeials)) && (!empty($this->soeials))) {
                        foreach ($this->soeials as $soeial) {
                            ?>

                            <li><a href="<?= $soeial->social_link ?>" class="<?= $soeial->soeial_class ?>"><i
                                            class="fa <?= $soeial->social_icon ?>"></i></a></li>
                            
                        <?php }
                    } ?>
                </ul>
            </div>

            <div class="col-md-4" style="visibility: <?=$h_date?>">
                <a href="#" class="text-white">
                    <div style="font-size: 16px; text-align: center; font-family: 'GEDinarTwoMedium';" id="clock"></div>
                    <script type="text/javascript"> function refrClock() {
                            var d = new Date();
                            var s = d.getSeconds();
                            var m = d.getMinutes();
                            var h = d.getHours();
                            var day = d.getDay();
                            var date = d.getDate();
                            var month = d.getMonth();
                            var year = d.getFullYear();
                            var days = new Array("الاحد", "الاثنين", "الثلاثاء", "الاربعاء", "الخميس", "الجمعة", "السبت");
                            var months = new Array("يناير", "فبراير", "مارس", "ابريل", "ماي", "يونيو", "يوليو", "اغسطس", "سبتمبر", "اكتوبر", "نوفمبر", "ديسمبر");
                            var am_pm;
                            if (s < 10) {
                                s = "0" + s
                            }
                            if (m < 10) {
                                m = "0" + m
                            }
                            if (h > 12) {
                                h -= 12;
                                am_pm = "مساءً."
                            } else {
                                am_pm = "صباحاً."
                            }
                            if (h < 10) {
                                h = "0" + h
                            }
                            document.getElementById("clock").innerHTML = days[day] + " " + date + " من " + months[month] + " " + year + " , الساعة الان    " + h + ":" + m + ":" + s + " " + am_pm;
                            setTimeout("refrClock()", 1000);
                        }

                        refrClock(); </script>


                </a>
            </div>

        </div>

    </div>


    <div class="main_nav">
        <nav class="navbar navbar-default" data-spy="affix" data-offset-top="50">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" style="visibility: <?=$h_logo_d?>">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url() . 'Web' ?>">
                    <?php if ((isset($this->main_data)) && (!empty($this->main_data))) {
                        $h_logo=base_url().'uploads/images/'.$this->main_data->logo;
                    }else{
                        $h_logo= base_url().'uploads/images/'.$this->main_data->d_img ;
//                        $h_logo= base_url() . 'asisst/web_asset/img/sympol2.png' ;
                    }?>

                    <img
                            src="<?=$h_logo?>"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav menu">
                    <li class="active"><a href="<?php echo base_url(); ?>web">الرئيسية <span
                                    class="sr-only">(current)</span></a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">من نحن <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-hover">
                            <?php if ((isset($this->pages_data)) && (!empty($this->pages_data))) {
                                foreach ($this->pages_data as $page) {
                                    ?>
                                    <li class=""><a
                                                href="<?= base_url() . 'Web/about_us/' . base64_encode($page->id) ?>"><?= $page->page_title ?> </a>
                                    </li>

                                    <?php
                                }
                            } ?>
                         <!--   <li><a href="<?= base_url() . 'Web/managment_members' ?>">أعضاء مجلس الإدارة</a></li> -->
                            <li><a href="<?= base_url() . 'Web/managment_general' ?>">الإدارة التنفيذية</a></li>
                            <li><a href="<?= base_url() . 'Web/structure' ?>">الهيكل التنظيمي </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">الخدمات الإلكترونية <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-hover">
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">خدمات الكفلاء <span class="fa fa-chevron-left"
                                                                            style="float: left;"></span></a>
                                <ul class="dropdown-menu dropdown-submenu-hover">
                                    <li><a tabindex="-1" href="<?= base_url() . 'Web/kafala_login' ?>">دخول الكفلاء</a></li>
                                    <li><a tabindex="-1" href="<?= base_url() . 'Web/add_kafel' ?>">تسجيل كافل</a>
                                    </li>
                                </ul>
                            </li>
                        <!--    <li><a href="#">خدمات المتبرعين</a></li>
                            <li><a href="#">خدمات الأعضاء ( العمومية )</a></li>-->
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">خدمات الأسر <span class="fa fa-chevron-left"
                                                                            style="float: left;"></span></a>
                                <ul class="dropdown-menu dropdown-submenu-hover">
                                    <li><a tabindex="-1" href="<?= base_url() . 'Web/family_login' ?>">دخول
                                            المستفيدين</a></li>
                                    <li><a tabindex="-1" href="<?= base_url() . 'Web/family_register' ?>">تسجيل أسرة</a>
                                    </li>
                                </ul>
                            </li>


                        <!--   <li><a href="#">خدمات المتطوعين</a></li>
                            <li><a href="#">خدمات التوظيف</a></li> -->
                            <li><a href="<?php echo base_url(); ?>Login">دخول الموظفين</a></li>
                        </ul>
                    </li>

                    <li class=""><a href="<?= base_url() . 'Web/projects' ?>">مشروعاتنا </a></li>
                    <li class=""><a href="<?php echo base_url(); ?>web/market">المتجر </a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">العضوية <span class="caret"></span></a>
                        <ul class="dropdown-menu  dropdown-hover">
                            <li class=""><a href="<?= base_url() . 'Web/membering' ?>">العضوية</a></li>
                            <li><a href="#">الإشتراك بالجمعية</a></li>


                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">المركز الإعلامى <span class="caret"></span></a>


                        <ul class="dropdown-menu dropdown-hover">
                            <li class=""><a href="<?= base_url() . 'Web/news' ?>">أخبار الجمعية </a></li>
                            <li class=""><a href="<?= base_url() . 'Web/mobdra' ?>">مبادرات الجمعية </a></li>
                            <li><a href="<?= base_url() . 'Web/gallery' ?>">مكتبة الصور</a></li>
                            <li><a href="<?= base_url() . 'Web/videos' ?>">مكتبة الفيديوهات</a></li>
                            <li><a href="<?= base_url() . 'Web/newspapers_news' ?>">الجمعية فى الصحافة</a></li>
                            <li><a href="<?= base_url() . 'Web/reports' ?>">التقارير</a></li>
                            <li><a href="<?= base_url() . 'Web/system' ?>">الأنظمة و اللوائح</a></li>
                            <li><a href="<?= base_url() . 'Web/plans' ?>">الخطة التشغيلية</a></li>
                        </ul>


                    </li>
                     <li class=""><a href="<?= base_url() . 'Web/dedication' ?>">إهداءات </a></li>
                    <li class=""><a href="<?= base_url() . 'Web/contact' ?>">اتصل بنا </a></li>
                </ul>
                
                 <ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i> السلة <span class="orders-num" style="font-size: 16px"></span>   <span class="caret"></span></a>
							<ul class="dropdown-menu dropdown-hover">
								<div class="fixed-sec your-cart  ">
									<h5><span><i class="fa fa-shopping-cart"></i></span>سلة المشتريات</h5>
									<div class="cart-details ">
										<div id="shopping-cart-results">
											<div>
												<table class="table table-bordered table-hover table-striped"  >
													<thead>
														<tr>
															<th>المنتج</th>
															<th>عدد الأسهم</th>		
															<th>السعر</th>
															<th>نوع السهم</th>
															<th>الإجراء</th>
														</tr>	
													</thead>
													<tbody class="show-cart">
														<tr>
															<td>مشروع</td>
															<td>3</td>
															<td>200</td>
															<td>تبرع</td>
															<td><a href="#" class="red_trash"><i class="fa fa-trash"></i></a></td>
														</tr>
													</tbody>
												</table>
											</div>     
											<div class="clear"></div>   
											<div class="full-fee div-padding">
												<p>لديك <span  id="count-cart"> 1 </span> منتج فى السلة</p>
												<p>إجمالى السعر <span  id="total-cart"> 200 </span> ريال سعودى</p>
												<a href="<?php echo base_url(); ?>Web/shopping_cart/1"><button class="btn transition-5"> إتمام الدفع </button>
												</a>
												<a><button id="clear-cart" class=" btn transition-5">تفريغ السلة</button></a>
											</div>

										</div>
										<div class="clear"></div>  
									</div>
								</div>
							</ul>
						</li>
					</ul>


            </div>
        </nav>
    </div>


</header>

<div class="sidebar-quick-links-fixed hidden-xs">
    <a href="javascript:void(0);" class="side-btn">تسجيل الدخول</a>
    <ul>
        <li>
            <a href="<?php echo base_url(); ?>Login">
                <i class="fa fa-home"></i>
                <span>دخول الموظفين</span>
            </a>
        </li>
        <li>
            <a href="<?php echo base_url(); ?>web/family_login">
                <i class="fa fa-users"></i>
                <span>دخول المستفيدين</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-leaf"></i>
                <span>دخول الكفلاء</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-leaf"></i>
                <span>دخول متطوعين</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-home"></i>
                <span>دخول الأعضاء</span>
            </a>
        </li>

    </ul>
</div>
<!-- Sidebar Quick Links -->


<div class="social-sidebar hidden-xs" dir="ltr">
    <ul>
        <?php
        $array_text = array('', 'تابعنا على تويتر', 'تابعنا على فيسبوك', 'تابعنا على تويتش', 'تابعنا على سناب شات ', 'تابعنا على انستجرام', 'تابعنا على يوتيوب','تابعنا على لينك ان' );
        if ((isset($this->soeials)) && (!empty($this->soeials))) {
            foreach ($this->soeials as $soeial) {
                ?>
                <li class="<?= $soeial->soeial_class ?>">
                    <a href="<?= $soeial->social_link ?>" target="_blank">
                        <i class="fa <?= $soeial->social_icon ?>"></i>
                        <span><?= $array_text[$soeial->social_num_fk] ?></span>
                    </a>
                </li>
            <?php }
        } ?>

    </ul>
</div>
