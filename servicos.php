<?php include "includes.php";
include "Class/procedimentos.class.php";
include "Class/textos.class.php";
include "Class/banners.class.php";

$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: /');
    }else{
        $id = $_GET['id'];
    }
}else{
    header('Location: /');
}

$banner = Banners::getInstance(Conexao::getInstance());
$procedimentos = Procedimentos::getInstance(Conexao::getInstance());
$textos = Textos::getInstance(Conexao::getInstance());

$puxaProcedimentos = $procedimentos->rsDados('','','',$id);
$puxaBanners = $banner->rsDados(24);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
   <?php include "description.php";?>
    <?php include "inc-tagmanager-head.php";?>
</head>

<body>

    <div class="page-wrapper">
          <?php include "header.php";?>
       <?php include "inc-tagmanager-body.php";?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div>
        </div>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $puxaBanners->foto;?>)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo SITE_URL;?>">Home</a></li>
                    </ul>
                    <h1><?php echo $puxaBanners->titulo1;?></h1> 
                </div>
            </div>
        </section>
        <section class="services-two">
            <div class="services-two-bg" style="background-color:#f8f9fa;"></div>
            <div class="services-two-shape-1 float-bob-x"></div>
            <div class="services-two-shape-2 float-bob-y"></div>
            <div class="services-two-shape-3 float-bob-y"></div>
            <div class="container">
                <div class="row ">
                    <?php foreach ($puxaProcedimentos as $procedimentos){?>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-two__single">
                            <div class="services-two__img">
                                <img src="<?php echo SITE_URL;?>/img/<?php echo $procedimentos->topico1_foto;?>" alt="">
                            </div>
                            <div class="services-two__content">
                                <div class="services-two__icon">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $procedimentos->icone;?>" alt="">
                                </div>
                                <div class="services-two__content-inner">
                                    <h3 class="services-two__title"><a href="<?php echo SITE_URL;?>/site/loja/<?php echo $procedimentos->url_amigavel;?>"><?php echo $procedimentos->titulo;?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>

      <?php include "footer.php";?>

    </div>

   <?php include "menu-mobile.php";?>


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="<?php echo SITE_URL;?>/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/odometer/odometer.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/swiper/swiper.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/wow/wow.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/isotope/isotope.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/countdown/countdown.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/vegas/vegas.min.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/timepicker/timePicker.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="<?php echo SITE_URL;?>/assets/vendors/circleType/jquery.lettering.min.js"></script>

    <script src="<?php echo SITE_URL;?>/assets/js/ambed.js"></script>

</body>

</html>