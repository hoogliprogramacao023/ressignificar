<?php include "includes.php";
include "Class/doutores.class.php";
include "Class/textos.class.php";
include "Class/banners.class.php";

$banner = Banners::getInstance(Conexao::getInstance());
$textos = Textos::getInstance(Conexao::getInstance());
$especialistas = Doutores::getInstance(Conexao::getInstance());

$sessao1 = $textos->rsDados(69);
$puxaEspecialista = $especialistas->rsDados();
$puxaBanners = $banner->rsDados(21);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
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
            <div class="page-header-bg" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $puxaBanners->foto;?>">
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

        <!--Team Page Start-->
        <section class="team-page">
            <div class="container">
                <div class="row">
                    <?php foreach ($puxaEspecialista as $especialistas){?>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Team One single-->
                        <div class="team-one__single">
                            <div class="team-one__img-box">
                                <div class="team-one__img">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $especialistas->foto;?>" alt="">
                                    <div class="team-one__social">
                                        <a href="<?php echo $especialistas->twitter;?>" class="fab fa-twitter"></a>
                                        <a href="<?php echo $especialistas->facebook;?>" class="fab fa-facebook-square"></a>
                                        <a href="<?php echo $especialistas->instagram;?>" class="fab fa-instagram"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-one__content">
                                <div class="team-one__title-box">
                                    <div class="team-one__title-shape">
                                        <img src="assets/images/shapes/team-one-title-box-shape.png" alt="">
                                        <div class="team-one__title-text">
                                            <p class="team-one__title"><?php echo $especialistas->especialidade;?></p>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="team-one__name"><a href="<?php echo SITE_URL;?>/especialista/<?php echo $especialistas->url_amigavel;?>"><?php echo $especialistas->nome;?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
        </section>
        <!--Team Page End-->


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


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>




    <!-- template js -->
    <script src="assets/js/ambed.js"></script>



</body>

</html>