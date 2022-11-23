<?php
    include "includes.php";
    include "Class/textos.class.php";
    include "Class/testemunhos.class.php";
    include "Class/sobre.class.php";
    include "Class/banners.class.php";
    include "Class/blogs.class.php";
    $blogs = Blogs::getInstance(Conexao::getInstance());
    $puxaBlogs = $blogs->rsDados();
    
    $textos = Textos::getInstance(Conexao::getInstance());
    $banner = Banners::getInstance(Conexao::getInstance());
    $sobre = Sobre::getInstance(Conexao::getInstance());
    $testemunhos = Testemunhos::getInstance(Conexao::getInstance());
    $about = About::getInstance(Conexao::getInstance());

    $puxaBanners = $banner->rsDados(17);
    $puxaTestemunhos = $testemunhos->rsDados();
    $puxaAbout = $about->rsDados(1);
    $textoSobre = $sobre->rsDados(94);
    $home = $textos->rsDados(69);

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
                        <li><a href="index.html">Home</a></li>
                    </ul>
                    <h1><?php echo $puxaBanners->titulo1;?></h1>
                </div>
            </div>
        </section>
        
        <section class="about-two wow fadeInUp" data-wow-delay="100ms">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-two__left">
                            <div class="section-title">
                                <span class="section-title__tagline"><?php echo $puxaAbout->subtitulo;?></span>
                                <h2 class="section-title__title"><?php echo $puxaAbout->titulo;?></h2>
                                <div class="section-title__line"></div>
                            </div>
                            <h2 class="about-two__text-1"><?php echo $puxaAbout->subtitulo2;?></h2>
                            <p class="about-two__text-2"><?php echo $puxaAbout->texto;?></p>
                            <div class="about-two__points-box row">
                                <div class="col-md-6 col-sm-12 about-two__points-left">
                                    <ul class="list-unstyled about-two__points">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="text">
                                                <h3  style="font-size: 17px;"><?php echo $puxaAbout->titulo1;?></h3>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="about-two__points-text"><?php echo $puxaAbout->texto1;?></p>
                                </div>
                                <div class="col-md-6 col-sm-12 about-two__points-right">
                                    <ul class="list-unstyled about-two__points">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="text">
                                                <h3 style="font-size: 17px;"><?php echo $puxaAbout->titulo2;?></h3>
                                            </div>
                                        </li>
                                    </ul>
                                    <p class="about-two__points-text"><?php echo $puxaAbout->texto2;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="about-two__right">
                            <div class="about-two__img-box wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                                <div class="about-two__img-1">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $textoSobre->paralax_1;?>" alt="">
                                </div>
                                <div class="about-two__img-2">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $textoSobre->paralax_1;?>" alt="">
                                </div>
                                <div class="welcome-one__dot">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $textosHome->paralax_8;?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial-two mobile-carousel">
            <div class="testimonial-two-bg"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo $puxaAbout->titulo5;?></span>
                    <h3 class="section-title__title"><?php echo $puxaAbout->texto4;?></h3>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-two__inner">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": false,
                                "margin": 30,
                                "nav": false,
                                "dots": true,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 2
                                    },
                                    "1200": {
                                        "items": 3
                                    }
                                }
                            }'>

                        <?php foreach ($puxaTestemunhos as $testemunhos){?>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="working-process__single">
                                <div class="working-process__count"></div>
                                <p class="working-process__text"><?php echo $testemunhos->testemunho;?></p>
                                <div class="working-process__icon">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $testemunhos->foto;?>" alt="">
                                </div>
                                <h3 class="working-process__title"><?php echo $testemunhos->nome;?>
                                </h3>
                            </div>
                        </div>
                        <?php }?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
         <section class="working-process web-carousel wow fadeInUp" data-wow-delay="100ms">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo $puxaAbout->titulo5;?></span>
                    <h2 class="section-title__title"><?php echo $puxaAbout->texto4;?></h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="working-process__inner">
                    <div class="row" style="justify-content: center;">
                        <?php foreach ($puxaTestemunhos as $testemunhos){?>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="working-process__single">
                                <div class="working-process__count"></div>

                                <p class="working-process__text"><?php echo $testemunhos->testemunho;?></p>

                                <div class="working-process__icon">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $testemunhos->foto;?>" alt="">
                                </div>
                                
                                <h3 class="working-process__title"><?php echo $testemunhos->nome;?></h3>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
        <style>
            @media (max-width:500px){
              .mobile-carousel{
                  display:block !important;
              }  
              
            .web-carousel{
                display:none !important;
            }
            }
            .mobile-carousel{
                  display:none;
              }  
              
            .web-carousel{
                display:block;
            }
        </style>

<section class="leading wow fadeInUp" data-wow-delay="100ms">
            <div class="leading-bg-box">
                <div class="leading-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $home->paralax_7;?>);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <?php if ($home->embed <> ""){?>
                        <div class="leading__left">
                            <div class="leading__video-link">
                                <a href="<?php echo $home->embed;?>" class="video-popup">
                                    <div class="leading__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                            <h3 class="leading__title"><?php echo $puxaAbout->titulo3;?></h3>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="leading__right">
                            <ul class="list-unstyled leading__points">
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $puxaAbout->item1;?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $puxaAbout->item2;?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $puxaAbout->item3;?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $puxaAbout->item4;?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="espec">
            <div class="container especialistas-card wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms">
                <div class="row">
                    <div class=" col-md-6 col-sm-12 section-title text-center">
                        <span class="section-title__tagline"><?php echo $puxaAbout->subtitulo3;?></span>
                        <h3 class="section-title__title"><?php echo $puxaAbout->titulo4;?></h3>
                        <div class="section-title__line"></div>
                    </div>
    
                    <div class="col-md-6 col-sm-12 text-especialistas">
                        <p><?php echo $puxaAbout->texto3;?></p>
                    </div>
                </div>

                <div class="especialista-row">        
                    <div class="especialista col-md-4 col-sm-12">
                        <h3><?php echo $puxaAbout->nome1;?></h3>
                        <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaAbout->foto1;?>" alt="">
                        <p><?php echo $puxaAbout->profissao1;?></p>
                    </div> 

                    <div class="especialista col-md-4 col-sm-12">
                        <h3><?php echo $puxaAbout->nome2;?></h3>
                        <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaAbout->foto2;?>" alt="">
                        <p><?php echo $puxaAbout->profissao2;?></p>
                    </div> 

                    <div class="especialista col-md-4 col-sm-12">
                        <h3><?php echo $puxaAbout->nome3;?></h3>
                        <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaAbout->foto3;?>" alt="">
                        <p><?php echo $puxaAbout->profissao3;?></p>
                    </div> 
                </div>
            </div>
        </section>

        <?php include "footer.php";?>
    </div>

    <?php include "menu-mobile.php";?>

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

    <script src="assets/js/ambed.js"></script>

</body>

</html>