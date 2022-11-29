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
                    <span><h1><?php echo $puxaBanners->titulo1;?></h1></span>
                </div>
            </div>
        </section>
        
        <section class="about-two wow fadeInUp" data-wow-delay="100ms">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                            <span class="section-title__tagline"><?php echo $puxaAbout->subtitulo;?></span>
                                <h1 class="section-title__title"><?php echo $puxaAbout->titulo;?></h1>
                                <div class="section-title__line"></div>
                            </div>  
                            <h2 class="about-two__text-1"><?php echo $puxaAbout->subtitulo2;?></h2>
                            <p class="about-two__text-2"><?php echo $puxaAbout->texto;?></p>
                            <div class="about-two__points-box">
                                <div class="col-md-6 col-sm-12 about-two__points-left">
                                    <ul class="list-unstyled about-two__points">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-confirmation"></span>
                                            </div>
                                            <div class="text">
                                                <h3 style="font-size: 17px;"><?php echo $puxaAbout->titulo1;?></h3>
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
                                    <img src="assets/images/resources/about-two-img-1.jpg" alt="">
                                </div>
                                <div class="about-two__img-2">
                                    <img src="assets/images/resources/about-two-img-2.jpg" alt="">
                                </div>
                                <div class="about-two__dot">
                                    <img src="assets/images/shapes/about-two-dots.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial-two">
            <div class="testimonial-two-bg"
                style="background-image: url(assets/images/backgrounds/testimonial-two-bg.jpg);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo $puxaAbout->titulo5;?></span>
                    <h3 class="section-title__title"><?php echo $puxaAbout->texto4;?></h3>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-two__inner">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                                data-owl-options='{
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
                                <!--Testimonial One Single-->
                                <?php foreach ($puxaTestemunhos as $testemunhos){?>
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2"><?php echo $testemunhos->testemunho;?></p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            
                                        <?php if(isset($puxaServices->icone4) && $puxaServices->icone4 != '') { ?>
                                            <img src="<?php echo SITE_URL;?>/img/<?php echo $testemunhos->foto;?>" alt="">
                                        <?php } else {?>
                                            <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                        <?php } ?>
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name"><?php echo $testemunhos->nome;?></h4>
                                            <p class="testimonial-one__client-title">Nosso Cliente</p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
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

  <section class="leading">
			<div class="leading-bg-box">
            <div class="leading-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url('https://dummyimage.com/1970x515/000/fff');"></div>
            </div>
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-6">
						<div class="leading__left">
							<div class="leading__video-link">
								<a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
									<div class="leading__video-icon">
										<span class="fa fa-play"></span>
										<i class="ripple"></i>
									</div>
								</a>
							</div>
							<h2 class="leading__title"><?php echo $puxaAbout->titulo3;?></h2>
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
										<p><?php echo $puxaAbout->item4; ?></p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

        <section class="team-one team-two">
            <div class="container">
                <div class="team-one__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="team-one__top-left">
                                <div class="section-title text-left">
                                    <span class="section-title__tagline"><?php echo $puxaAbout->subtitulo3;?></span>
                                    <h2 class="section-title__title"><?php echo $puxaAbout->titulo4;?></h2>
                                    <div class="section-title__line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="team-one__top-right">
                                <p class="team-one__top-text"><?php echo $puxaAbout->texto3;?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-one__bottom">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <!--Team One single-->
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <?php if(isset($puxaAbout->foto1) && $puxaAbout->foto1 != '') { ?>
                                            <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaAbout->foto1;?>" alt="">
                                        <?php } else {?>
                                            <img src="assets/images/team/team-1-1.jpg" alt="">
                                        <?php } ?>
                                        
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__title-box">
                                        <div class="team-one__title-shape">
                                                <img src="assets/images/shapes/team-one-title-box-shape.png" alt="">
                                            <div class="team-one__title-text">
                                                <p class="team-one__title"><?php echo $puxaAbout->profissao1;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="team-one__name"><?php echo $puxaAbout->nome1;?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <!--Team One single-->
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-2.jpg" alt="">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__title-box">
                                        <div class="team-one__title-shape">
                                            <img src="assets/images/shapes/team-one-title-box-shape.png" alt="">
                                            <div class="team-one__title-text">
                                                <p class="team-one__title">Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="team-one__name"><a href="team-details.html">Monica Manly</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                            <!--Team One single-->
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-3.jpg" alt="">
                                        <div class="team-one__social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            <a href="#"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__title-box">
                                        <div class="team-one__title-shape">
                                            <img src="assets/images/shapes/team-one-title-box-shape.png" alt="">
                                            <div class="team-one__title-text">
                                                <p class="team-one__title">Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="team-one__name"><a href="team-details.html">Kevin Martin</a></h3>
                                </div>
                            </div>
                        </div>
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