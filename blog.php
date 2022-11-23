<?php include "includes.php";
include "Class/banners.class.php";
include "Class/textos.class.php";
include "Class/blogs.class.php";

$blog = Blogs::getInstance(Conexao::getInstance());
$textos = Textos::getInstance(Conexao::getInstance());
$banner = Banners::getInstance(Conexao::getInstance());

$puxaBlogs = $blog->rsDados();
$puxaBanners = $banner->rsDados(20);
$sessao1 = $textos->rsDados(69);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
   <?php include "description.php";?>
   <?php include "inc-tagmanager-head.php";?>


</head>

<body>

    <!-- /.preloader -->
    <div class="page-wrapper">
       <?php include "header.php";?>
       <?php include "inc-tagmanager-body.php";?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(img/<?php echo $puxaBanners->foto;?>)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo SITE_URL;?>">Home</a></li>
                        <li><span>/</span></li>
                        <li><?php echo $puxaBanners->titulo1;?></li>
                    </ul>
                    <h1 class="h1-style"><?php echo $puxaBanners->titulo2;?></h1>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Page Start-->
        <section class="blog-one">
            <div class="container">
                <div class="row">
                    <?php foreach ($puxaBlogs as $blog){?>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="https://via.placeholder.com/150" alt="<?php echo $blog->legenda_imagem;?>" >
                                <a href="<?php echo SITE_URL;?>/blog/<?php echo $blog->url_amigavel;?>">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__date">
                                    <p><?php echo formataDataDia($blog->data_postagem);?> <?php echo formataDataMes($blog->data_postagem);?>, <?php echo formataDataAno($blog->data_postagem);?></p>
                                </div>
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="<?php echo SITE_URL;?>/blog/<?php echo $blog->url_amigavel;?>"><i class="far fa-user-circle"></i> <?php echo $blog->postado_por;?> </a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="<?php echo SITE_URL;?>/blog/<?php echo $blog->url_amigavel;?>"><?php echo $blog->breve;?></a></h3>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
        </section>
        <!--Blog Page End-->

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
                <a href="<?php echo SITE_URL;?>" aria-label="logo image"><img src="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_rodape;?>"
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
                    <?php if($infoSistema->twitter <> ""){?>
                    <a href="<?php echo $infoSistema->twitter;?>"><i class="fab fa-twitter"></i></a>
                    <?php }?>
                     <?php if($infoSistema->facebook <> ""){?>
                    <a href="<?php echo $infoSistema->facebook;?>"><i class="fab fa-facebook"></i></a>
                    <?php }?>
                    <?php if($infoSistema->pinterest <> ""){?>
                    <a href="<?php echo $infoSistema->pinterest;?>"><i class="fab fa-pinterest-p"></i></a>
                     <?php }?>
                     <?php if($infoSistema->instagram <> ""){?>
                    <a href="<?php echo $infoSistema->instagram;?>"><i class="fab fa-instagram"></i></a>
                    <?php }?>
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