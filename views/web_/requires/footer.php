<?php $display=array('hidden','visible'); ?>
<?php if((isset($this->web_display))&&(!empty($this->web_display))){
    $f_logo=$display[$this->web_display->f_logo];
    $f_mob=$display[$this->web_display->f_mob];
    $f_map=$display[$this->web_display->f_map];
    $f_email=$display[$this->web_display->f_email];
    $f_address=$display[$this->web_display->f_address];
}else{
    $f_logo=$f_address=$f_email=$f_map=$f_mob='visible';
}  ?>
<!-- start section logos-->
<section class="logos text-center ptop-30 pbottom-20">
    <div class="container-fluid">
        <h4 class="">شركاء النجاح</h4>
        <h5>شركاء تشرفنا بالتعامل معهم </h5>
        <div id="owl-demo2" class="owl-carousel owl-theme logos-carousel">
            <?php if ((isset($this->web_shoraka)) && (!empty($this->web_shoraka))) {
                foreach ($this->web_shoraka as $sharek) {
                    ?>
                    <div class="item">
                             <?php if((isset($sharek->logo))&&(!empty($sharek->logo))){
                                 $img=  base_url() . 'uploads/images/' . $sharek->logo;
                             }else{
                                 $img=  base_url().'uploads/images/'.$this->main_data->d_img;

                             } ?>

                        <a href="<?= $sharek->link ?>"><img src="<?= $img ?>"
                                                            class="img-responsive " title="<?= $sharek->name ?>"/></a>
                    </div>
                    <?php
                }
            } ?>

        </div>
    </div>
</section>

<footer class="main-footer">

    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="container-fluid">
            <!--Footer Column-->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div id="block-footer1">
                    <div class="footer-widget about-column">
                        <figure class="footer-logo text-center" style="visibility: <?=$f_logo?>">
                            <a href="index.html">
                                <?php if ((isset($this->main_data)) && (!empty($this->main_data))) {
                                    $f_logo=base_url().'uploads/images/'.$this->main_data->f_logo;
                                }else{
                                    $f_logo= base_url().'uploads/images/'.$this->main_data->d_img ;
//                                    $f_logo= base_url() . 'asisst/web_asset/img/logo_footer.png' ;
                                }?>

                                <img src="<?= $f_logo?>" alt="">
                            </a>
                        </figure>
                        <ul class="contact-info list-unstyled">

                            <li style="visibility: <?=$f_address?>" ><i class="fa fa-globe"></i> بريدة, المملكة العربية السعودية</li>
                            <!--                            <li><i class="fa fa-phone"></i> الهاتف : <span> 966163851919+</span></li>-->
                            <li style="visibility: <?=$f_mob?>" ><i class="fa fa-mobile"></i> الجــوال :
                                <?php if ((isset($this->main_data->telphon)) && (!empty($this->main_data->telphon))) {

                                    foreach ($this->main_data->telphon as $key => $tel) {
                                        if (($key < count($this->main_data->telphon)) && $key > 0) {
                                            echo '<span> - </span>';
                                        }
                                        ?>
                                        <span> <?= $tel->tele ?> </span>
                                        <?php
                                    }
                                } ?>


                            </li>

                            <li style="visibility: <?=$f_email?>" ><i class="fa fa-envelope-o"></i> البريد الالكتروني :

                                <?php if ((isset($this->main_data->emails)) && (!empty($this->main_data->emails))) {

                                    foreach ($this->main_data->emails as $key => $email) {
                                        if (($key < count($this->main_data->emails)) && $key > 0) {
                                            echo '<span> - </span>';
                                        }
                                        ?>
                                        <span> <?= $email->email ?> </span>
                                        <?php
                                    }
                                } ?>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <!--Footer Column-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div id="block-footer2">
                    <div class="footer-widget link-column">
                        <div class="section-title">
                            <h4>روابط هامة</h4>
                        </div>
                        <div class="widget-content">
                            <ul class="list list-unstyled">
                                <li><a href="#">عن الجمعية</a></li>
                                <li><a href="#">الرؤية والأهداف</a></li>
                                <li><a href="#">أعضاء مجلس الإدارة</a></li>
                                <li><a href="#">الوظائف</a></li>
                                <li><a href="#">برامج الجمعية</a></li>
                                <li><a href="#">مكتبة الصور</a></li>
                                <li><a href="#">أخبار الجمعية</a></li>
                                <li><a href="#">اتصل بنا</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!--Footer Column-->
            <div class="col-md-5 col-sm-6 col-xs-12">
                <div id="block-footer4">
                        
                        <?php if ((isset($this->main_data->lang_map)) && (!empty($this->main_data->lang_map))) { ?>

    <div class="footer-widget contact-column" style="visibility: <?= $f_map ?>">
        <div class="section-title">
            <h4>موقعنا على الخريطة</h4>
        </div>
        <iframe src="https://maps.google.com/maps?q=<?= $this->main_data->lat_map ?>,<?= $this->main_data->lang_map ?>&hl=es;z=14&amp;output=embed"
                width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

    </div>

<?php } ?>
                    <!--div class="footer-widget contact-column" style="visibility: <?=$f_map?>" >
                        <div class="section-title">
                            <h4>موقعنا على الخريطة</h4>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4250.26205247819!2d43.958243388492235!3d26.350845477606896!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9167c434b0db3aa7!2z2KfZhNis2YXYudmK2Kkg2KfZhNiu2YrYsdmK2Kkg2YTYsdi52KfZitipINin2YTYo9mK2KrYp9mF!5e1!3m2!1sar!2seg!4v1548256649356"
                                width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div-->

                </div>
            </div>

        </div>
    </div>


</footer>

<div class="copyright">
    <div class="container">
        <p class="">
            <a href="wwww.alatheertech.html">تصميم وتطوير شركة الأثير تك لتكنولوجيا المعلومات</a>.© جميع الحقوق محفوظة
            <span style="font-family: arial">2019</span>.
        </p>
    </div>
</div>
<!-- End Copyright Bar -->


<script type="text/javascript" src="<?= base_url() . 'asisst/web_asset/' ?>js/jquery-1.10.1.min.js"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>js/bootstrap-arabic.min.js"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>js/bootstrap-select.min.js"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>js/jquery.datetimepicker.full.js"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>js/jquery.easing.min.js"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>js/jquery.lightbox-0.5.min.js"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>js/custom.js"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>js/wow.min.js"></script>

<script src="<?= base_url() . 'asisst/web_asset/' ?>plugin/modals/classie.js" type="text/javascript"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>plugin/modals/modalEffects.js" type="text/javascript"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
      The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript"
        src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
        src="<?= base_url() . 'asisst/web_asset/' ?>plugin/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

<!-- charts -->
<script src="<?= base_url() . 'asisst/web_asset/' ?>plugin/morris/raphael.min.js" type="text/javascript"></script>
<script src="<?= base_url() . 'asisst/web_asset/' ?>plugin/morris/morris.min.js" type="text/javascript"></script>

<!-- vticker  -->
<script src="<?= base_url() . 'asisst/web_asset/' ?>js/jquery.bootstrap.newsbox.js"></script>


<!---------------------------   required validation  -------------------------------->
<script src="<?php echo base_url()?>asisst/web_asset/js/jquery.form-validator.js"></script>
<script>
    $(function() {
        // setup validate
        $.validate({
            validateHiddenInputs: true // for live search required
        });

    });
</script>



<script type="text/javascript">

    var mq = window.matchMedia("(min-width: 767px)");

    if (mq.matches) {
        // the width of browser is more then 767px
        $(function () {
            $(".demo1").bootstrapNews({
                newsPerPage: 4,
                autoplay: true,
                pauseOnHover: true,
                direction: 'up',
                newsTickerInterval: 4000,
                onToDo: function () {

                }
            });


        });
    } else {
        // the width of browser is less then 767px

        $(function () {
            $(".demo1").bootstrapNews({
                newsPerPage: 1,
                autoplay: true,
                pauseOnHover: true,
                direction: 'up',
                newsTickerInterval: 4000,
                onToDo: function () {

                }
            });


        });
    }


</script>


<script>
    new WOW().init();
    $('.datepicker').datetimepicker({
        format: 'Y-m-d',
        time: false
    });
    $('.datetimepicker').datetimepicker();
</script>


<script>
    $(document).ready(function () {
        $('#myList li').append('<div class="clearfix"></div>');
        size_li = $("#myList li").size();
        x = 4;
        $('#myList li:lt(' + x + ')').show();
        $('#loadMore').click(function () {
            x = (x + 4 <= size_li) ? x + 4 : size_li;
            $('#myList li:lt(' + x + ')').show();

        });
        
          $('#myListnews li').append('<div class="clearfix"></div>');
        size_li = $("#myListnews li").size();
        x = 6;
        $('#myListnews li:lt(' + x + ')').show();
        $('#loadMorenews').click(function () {
            x = (x + 6<= size_li) ? x + 6 : size_li;
            $('#myListnews li:lt(' + x + ')').show();

        });
        
        /*
         $('#showLess').click(function () {
         x=(x-4<0) ? 3 : x-4;
         $('#myList li').not(':lt('+x+')').hide();
         });
         */
    });
    
    function imgError(image) {
        image.onerror = "";
        image.src = "<?= base_url()."asisst/web_asset/img/no_image.jpg"?>";
        return true;
    }


</script>

<script type="text/javascript">
    $(function () {
        $('#thumbnails a').lightBox();
    });
</script>

<!-- end .rev_slider_wrapper -->
<script>
    $(document).ready(function (e) {
        $(".rev_slider").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    style: "zeus",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "metis",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
            },
            responsiveLevels: [1240, 1024, 778],
            visibilityLevels: [1240, 1024, 778],
            gridwidth: [1170, 1024, 778, 480],
            gridheight: [450, 450, 960, 720],
            lazyType: "none",
            parallax: {
                origo: "slidercenter",
                speed: 1000,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll"
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "0",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    });
</script>
<!-- Slider Revolution Ends -->


<script src="<?= base_url() . 'asisst/web_asset/' ?>js/shoppingCart.js"></script>
<script>

	$(".add-to-cart").click(function(event){

	  
		event.preventDefault();
		var name = $(this).attr("data-name");
	//	var num_sham = Number($(this).attr("data_num_sahm"));
		var num_sham = Number($('#num_sahm').val());
        var price = Number($("#cost-sahm").val());
        var pro_ID = $(this).attr("data-ID");


		shoppingCart.addItemToCart(name, price,num_sham,pro_ID);
		displayCart();
     //   $('.add-to-cart').attr('data_num_sahm','');
	});

	$("#clear-cart").click(function(event){
		shoppingCart.clearCart();
		displayCart();

	});

	function displayCart() {
		var cartArray = shoppingCart.listCart();
		console.log(cartArray);
		var output = "";

		for (var i in cartArray) {

			output += "<tr>"
			+"<td>"+i+"</td>"
			+"<td>"+cartArray[i].name+"</td>"
			+"<td>"+" <input class='item-count' style='width:60px' type='number' data-name='"+"</td>"
			+cartArray[i].name
			+"' value='"+cartArray[i].count+"' >"
			+" x "+cartArray[i].price
			+" <button class='plus-item plus-color' data-name='"
			+cartArray[i].name+"'>+</button>"
			+" <button class='subtract-item minus-color' data-name='"
			+cartArray[i].name+"'>-</button>"+"</td>"
			+"<td>"+cartArray[i].total+"</td>"
			+"<td>"+" <button class='delete-item delete-color red_trash' data-name='"
			+cartArray[i].name+"'>X</button>"+"</td>"
			+"</tr>";
		}

		$(".show-cart").html(output);
		$(".count-cart").html( shoppingCart.countCart() );
		$('.orders-num').html( shoppingCart.countCart() );
		$("#total-cart").html( shoppingCart.totalCart() );
		$(".total-cart").html( shoppingCart.totalCart() );

$(".item_price_send").val(parseInt(shoppingCart.totalCart()) );
/*$("#count_cart_send").val( shoppingCart.countCart() );	*/	
	}

	$(".show-cart").on("click", ".delete-item", function(event){
		var name = $(this).attr("data-name");
		shoppingCart.removeItemFromCartAll(name);
		displayCart();
	});

	$(".show-cart").on("click", ".subtract-item", function(event){
		var name = $(this).attr("data-name");
		shoppingCart.removeItemFromCart(name);
		displayCart();
	});

	$(".show-cart").on("click", ".plus-item", function(event){
		var name = $(this).attr("data-name");
        var pro_ID = $(this).attr("data-ID");
        var price = $(this).attr("cost-sahm");
		shoppingCart.addItemToCart(name, 0, 1);
		displayCart();
	});

	$(".show-cart").on("change", ".item-count", function(event){
		var name = $(this).attr("data-name");
		var count = Number($(this).val());
		shoppingCart.setCountForItem(name, count);
		displayCart();
	});


	displayCart();

</script>
<script>
    $(function () {
        // Start of use strict
        "use strict";
        // Donut Chart
        Morris.Donut({
            element: 'morris-donut-chart',
            data: [{
                label: "رعاية الأسر",
                value: 12
            }, {
                label: "رعاية الأيتام والمساكين",
                value: 30
            }, {
                label: "الفقراء",
                value: 20
            }, {
                label: "موسمى",
                value: 10
            }],
            colors: [
                '#3F51B5',
                '#37a000',
                '#FFB61E',
                '#ff2e3d'
            ],
            resize: true
        });
        $("#morris-donut-chart-colors").append("<ul class='list-unstyled colors_square'>\
            \ <li class='' style='margin-right:20px;'><i class='fa fa-square fa-1x' style='color:#3F51B5;'></i> رعاية الأسر  </li> \
            \ <li class='' style='margin-right:20px;'><i class='fa fa-square fa-1x' style='color:#37a000;'></i> رعاية الأيتام </li> \
            \ <li class='' style='margin-right:20px;'><i class='fa fa-square fa-1x' style='color:#FFB61E;'></i> الفقراء </li> \
            \ <li class='' style='margin-right:20px;'><i class='fa fa-square fa-1x' style='color:#ff2e3d;'></i> موسمي </li> \
        </ul>");
    });
</script>




</body>
</html>