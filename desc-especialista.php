<?php include "includes.php";
include "Class/textos.class.php";
include "Class/doutores.class.php";
include "Class/banners.class.php";

$banner = Banners::getInstance(Conexao::getInstance());
$textos = Textos::getInstance(Conexao::getInstance());
$sessao1 = $textos->rsDados(69);

$especialista = Doutores::getInstance(Conexao::getInstance());
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

$puxaEspecialista = $especialista->rsDados('', '', '', '', '',$id);
$puxaBanners = $banner->rsDados(22);

?>
<!DOCTYPE html>
<html lang="pt">

<head>
     <title><?php echo  $puxaEspecialista->meta_title;?></title>
        <meta name="description" content="<?php echo $puxaEspecialista->meta_description;?>"/>
    	<meta name="keywords" content="<?php echo $puxaEspecialista->meta_keywords;?>">
   <?php include "description.php";?>
    <?php include "inc-tagmanager-head.php";?>
</head>

<body >

 
    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php include "header.php";?>
             <?php include "inc-tagmanager-head.php";?>
             
        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $puxaBanners->foto;?>)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span>/</span></li>
                        <li><?php echo $puxaBanners->titulo1;?></li>
                    </ul>
                    <h2><?php echo $puxaBanners->titulo2;?></h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Team Details Start-->
        <section class="team-details">
            <div class="team-details-shape-1 float-bob-x">
                <img src="assets/images/shapes/team-details-shape-1.png" alt=""> 
            </div>
            <div class="container">
                <div class="team-details__top">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__top-left">
                                <div class="team-details__top-img"> 
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaEspecialista->foto_1;?>" alt="">
                                    <div class="team-details__big-text"><?php echo $puxaEspecialista->nome;?></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__top-right">
                                <div class="team-details__top-content">
                                    <h3 class="team-details__top-name"><?php echo $puxaEspecialista->nome;?></h3>
                                    <p class="team-details__top-title"><?php echo $puxaEspecialista->especialidade;?></p>
                                    <div class="team-details__social">
                                        <a href="<?php echo $puxaEspecialista->twitter;?>" class="fab fa-twitter"></a>
                                        <a href="<?php echo $puxaEspecialista->facebook;?>" class="fab fa-facebook-square"></a>
                                        <a href="<?php echo $puxaEspecialista->instagram;?>" class="fab fa-instagram"></a>
                                    </div>
                                    <p class="team-details__top-text-1"><?php echo $puxaEspecialista->breve;?></p>
                                    <p class="team-details__top-text-2"><?php echo $puxaEspecialista->curriculo;?></p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-details__bottom">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__bottom-left">
                                <h4 class="team-details__bottom-left-title"><?php echo $puxaEspecialista->titulo2;?></h4>
                                <p class="team-details__bottom-left-text"><?php echo $puxaEspecialista->breve2;?></p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__bottom-right">
                                <div class="team-details__progress">
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title"><?php echo $puxaEspecialista->titulo3;?></h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="<?php echo $puxaEspecialista->titulo4;?>">
                                                <div class="count-text"><?php echo $puxaEspecialista->titulo4;?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title"><?php echo $puxaEspecialista->titulo5;?></h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="<?php echo $puxaEspecialista->titulo6;?>">
                                                <div class="count-text"><?php echo $puxaEspecialista->titulo6;?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title"><?php echo $puxaEspecialista->titulo7;?></h4>
                                        <div class="bar marb-0">
                                            <div class="bar-inner count-bar" data-percent="<?php echo $puxaEspecialista->titulo8;?>">
                                                <div class="count-text"><?php echo $puxaEspecialista->titulo8;?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team Details End-->

        <!--Message One Start-->
      
        <!--Message One End-->
        <!--Site Footer Start-->
      <?php include "footer.php";?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


   <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="." aria-label="logo image"><img src="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_rodape;?>"
                        width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?php echo $infoSistema->email1;?>">Contato via e-mail</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:<?php echo $infoSistema->telefone1;?>"><?php echo $infoSistema->telefone1;?></a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                   <a href="<?php echo $infoSistema->twitter;?>" class="fab fa-twitter"></a>
                    <a href="<?php echo $infoSistema->facebook;?>" class="fab fa-facebook-square"></a>
                    <a href="<?php echo $infoSistema->pinterest;?>" class="fab fa-pinterest-p"></a>
                    <a href="<?php echo $infoSistema->instagram;?>" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <!-- /.search-popup -->

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




    <!-- template js -->
    <script src="<?php echo SITE_URL;?>/assets/js/ambed.js"></script>



</body>

</html>