<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demoatheer.xyz/design/3own/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Apr 2018 10:01:08 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">


    <meta name="description" content="الجمعية الخيرية لرعاية الأيتام ببريدة - أبناء">
    <meta name="author" content="الجمعية الخيرية لرعاية الأيتام ببريدة - أبناء">

    <title><?php if ((isset($this->main_data)) && (!empty($this->main_data))) {
            echo $this->main_data->name;
        } else {
            echo '';
        } ?> </title>

    <link rel="icon" type="image/png" sizes="32x32"
          href="<?= base_url() . 'asisst/web_asset/' ?>img/favicon/favicon-32x32.png">


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


<style>
.live-now a:hover {
    color: #e60e0e !important;
}

.live-now a {
    margin-right: 10px;
    background-color: #ea2626;
    border-radius: 10px;
    padding: 5px 25px !important;
    color: #fff !important;
    box-shadow: 2px 2px 8px;
    font-weight: normal;
}
</style>
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
<div id="body_overlay" class="body-overlay "></div>
<!-- start bottom button -->
<div class="bottom-button">
    <a id="to-top" class="btn btn-lg btn-inverse page-scroll" href="#page-top"> <span class="sr-only">Toggle to Top Navigation</span>
        <i class="fa fa-chevron-up"></i> </a>
</div>


<header>
    <div class="top_nav">
        <div class="th-topinfo">
            <div class="col-md-4 no-padding">
                  <div class="logo-big wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="0.6s">
                     <a  href="<?= base_url() . 'Web' ?>">
                                        <?php if ((isset($this->main_data)) && (!empty($this->main_data))) {
                                            $h_logo=base_url().'uploads/images/'.$this->main_data->logo;
                                        }else{
                                            $h_logo= base_url().'uploads/images/'.$this->main_data->d_img ;
                    //                        $h_logo= base_url() . 'asisst/web_asset/img/sympol2.png' ;
                                        }?>
                    
                              <img src="<?php echo base_url() . 'asisst/web_asset/img/abnaa-vision.png' ?>"  class="logo-abnna"></a>
                        
                     </div>
            </div>
            

            <div class="col-md-7" >
             <div id="smallheaderDropDown">
                  <div id="smallheaderDashboard">
                    <ul class="list-unstyled left-nav-menu">
                        <li ><a href="#"><img src="<?php echo base_url() . 'asisst/web_asset/img/heade-icons/care-about-environment.png'  ?>" /> من نحن</a></li>
                        <li ><a href="<?= base_url() ?>Login"><img src="<?php echo base_url() . 'asisst/web_asset/img/heade-icons/technical-support.png'  ?>" />  الخدمات الالكترونية </a></li>
                        <li ><a href="<?= base_url() ?>Web/projects"><img src="<?php echo base_url() . 'asisst/web_asset/img/heade-icons/project-management.png'  ?>" />  مشروعاتنا </a></li>
                        <li ><a href="<?= base_url() ?>Web/contact"><img src="<?php echo base_url() . 'asisst/web_asset/img/heade-icons/contact.png'  ?>" />  إتصل بنا </a></li>
                        <li ><a href="<?= base_url() ?>Web/live_videos"><img src="<?php echo base_url() . 'asisst/web_asset/img/heade-icons/live.png'  ?>" />   البث المباشر </a></li>
                        <li ><a href="#"><img src="<?php echo base_url() . 'asisst/web_asset/img/heade-icons/loupe.png'  ?>" /> </a></li>
                    </ul>
                  </div>
                  <!-- /smallheaderDashboard -->
                  <p id="smallheaderOpen"><i class="fa fa-chevron-down"></i></p>

             </div>
                
                 
  
            </div>
            
            <!--<div class="col-md-1 text-center no-padding">
               <div class="saudi-vision">
                 <img src="<?php echo base_url() . 'asisst/web_asset/img/vision.png'  ?>" />
               </div>
            </div>-->
            <div class="col-md-1 text-center no-padding">
               <div onclick="ClickEffects()" class="Control" id="Control" >
                    <span class="top1" id="top"></span>
                    <span class="center2" id="center"></span>
                    <span class="bottom3" id="bottom"></span>
                  </div>
            </div>
            

        </div>

    </div>


    <div class="main_nav" id="Slide_nav">
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
                            <li><a href="<?= base_url() . 'Web/managment_members' ?>">أعضاء مجلس الإدارة</a></li>
                            <li><a href="<?= base_url() . 'Web/omamia_members' ?>">أعضاء الجمعية العمومية</a></li>
                            <li><a href="<?= base_url() . 'Web/managment_general' ?>">الإدارة التنفيذية</a></li>
                            <li><a href="<?= base_url() . 'Web/structure' ?>">الهيكل التنظيمي </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">الخدمات الإلكترونية <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-hover">
                        <!--
                            <li class="dropdown-submenu">
                                <a tabindex="-1" href="#">خدمات الكفلاء <span class="fa fa-chevron-left"
                                                                            style="float: left;"></span></a>
                                <ul class="dropdown-menu dropdown-submenu-hover">
                                    <li><a tabindex="-1" href="<?= base_url() . 'Web/kafala_login' ?>">دخول الكفلاء</a></li>
                                    <li><a tabindex="-1" href="<?= base_url() . 'Web/add_kafel' ?>">تسجيل كافل</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#">خدمات المتبرعين</a></li>
                            <li><a href="<?php echo base_url(); ?>gam3ia_omomia/Gam3ia_omomia/login">خدمات الأعضاء ( العمومية )</a></li>
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


                            <li><a href="#">خدمات المتطوعين</a></li>
                            <li><a href="#">خدمات التوظيف</a></li>
                            -->
                            <li><a href="<?php echo base_url(); ?>Login">دخول الموظفين</a></li>
                        </ul>
                    </li>

                    <li class=""><a href="<?= base_url() . 'Web/projects' ?>">مشروعاتنا </a></li>
             <li class=""><a target="_blank" href="https://abnaastore.com">المتجر </a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">العضوية <span class="caret"></span></a>
                        <ul class="dropdown-menu  dropdown-hover">
                            <li class=""><a href="<?= base_url() . 'Web/membering' ?>">العضوية</a></li>
                            <li><a href="#">طلب عضوية</a></li>


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
                            <li><a href="<?= base_url() . 'Web/live_videos' ?>">فيديوهات البث المباشر</a></li>
                            <li><a href="<?= base_url() . 'Web/newspapers_news' ?>">الجمعية فى الصحافة</a></li>
                            <li><a href="<?= base_url() . 'Web/reports' ?>">التقارير</a></li>
                            <li><a href="<?= base_url() . 'Web/system' ?>">الأنظمة و اللوائح</a></li>
                            <li><a href="<?= base_url() . 'Web/plans' ?>">الخطة التشغيلية</a></li>
                            <li><a href="<?= base_url() .'Web/meeting_gamia_omomia'?>">إجتماعات الجمعية العمومية</a></li>
                        </ul>


                    </li>
                    <li class=""><a href="<?= base_url() . 'Web/contact' ?>">اتصل بنا </a></li>
                    <!--<li class="donate-now">
                      <a href="#">تبرع الأن</a> 
                     </li>-->
                     
                     <li class="live-now">
                     <a target="_blank" href="<?php echo base_url() . 'Web/live_videos'?>">
                     <i class="fa fa-video-camera" aria-hidden="true"></i>
                     البث المباشر </a>
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
            <a href="<?php echo base_url(); ?>gam3ia_omomia/Gam3ia_omomia/login">
                <i class="fa fa-home"></i>
                <span>دخول الأعضاء</span>
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
