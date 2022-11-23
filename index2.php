<?php include "includes.php";
include "Class/banners.class.php";
include "Class/textos.class.php";
include "Class/servicos.class.php";
include "Class/procedimentos.class.php";
include "Class/testemunhos.class.php";
include "Class/doutores.class.php";
include "Class/blogs.class.php";
include "Class/parceiros.class.php";

$parceiros = Parceiros::getInstance(Conexao::getInstance());
$blog = Blogs::getInstance(Conexao::getInstance());
$especialistas = Doutores::getInstance(Conexao::getInstance());
$testemunhos = Testemunhos::getInstance(Conexao::getInstance());
$especialidades = Servicos::getInstance(Conexao::getInstance());
$procedimentos = Procedimentos::getInstance(Conexao::getInstance());
$textos = Textos::getInstance(Conexao::getInstance());
$banner = Banners::getInstance(Conexao::getInstance());

$puxaParceiros = $parceiros->rsDados();
$puxaBlogs = $blog->rsDados();
$puxaEspecialista = $especialistas->rsDados();
$puxaProcedimentos = $procedimentos->rsDados();
$puxaTestemunhos = $testemunhos->rsDados();
$puxaEspecialidades = $especialidades->rsDados();
$sessao1 = $textos->rsDados(69);
$puxaBanners = $banner->rsDados(15);


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

        <!--Main Slider Start-->
        <section class="main-slider clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": false,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": false
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide">
                        <div class="image-layer"
                            style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $puxaBanners->foto;?>);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider__content">
                                        <?php if($puxaBanners->icon <> ''){?>
                                        <div class="main-slider__icon">
                                            <img src="img/<?php echo $puxaBanners->icon;?>" alt="">
                                        </div>
                                        <?php }?>
                                        <div class="main-slider__sub-title-box">
                                            <p class="main-slider__sub-title"><?php echo $puxaBanners->titulo1;?></p>
                                            <div class="main-slider__border-left"></div>
                                            <div class="main-slider__border-right"></div>
                                        </div>
                                        <h2 class="main-slider__title"><?php echo $puxaBanners->titulo2;?></h2>
                                        <?php if($puxaBanners->tem_botao == 'S'){?>
                                        <div class="main-slider__btn-box">
                                            <a href="<?php echo $puxaBanners->link_botao;?>" class="thm-btn main-slider__btn"><?php echo $puxaBanners->nome_botao;?></a>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    
                </div>

                <!-- If we need navigation buttons -->
                

            </div>
        </section>
        <!--Main Slider End-->

        <!--About One Start-->
        <section class="about-one">
            <div class="about-one-shape-2 float-bob-x"></div>
            <div class="about-one-wall">
                <img src="img/<?php echo $sessao1->paralax_1;?>" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__left">
                            <div class="section-title">
                                <span class="section-title__tagline"><?php echo $sessao1->titulo;?></span>
                                <h2 class="section-title__title"><?php echo $sessao1->descricao;?></h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="about-one__text-1"><?php echo $sessao1->titulo8;?></p>
                            <ul class="list-unstyled about-one__points">
                                <li>
                                    <div class="about-one__points-content-box">
                                        <div class="about-one__points-icon">
                                            <span class="icon-wallpaper"></span>
                                        </div>
                                        <div class="about-one__points-text-box">
                                            <p class="about-one__points-text"><?php echo $sessao1->titulo4_sessao1;?></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="about-one__points-content-box">
                                        <div class="about-one__points-icon">
                                            <span class="icon-high-quality"></span>
                                        </div>
                                        <div class="about-one__points-text-box">
                                            <p class="about-one__points-text"><?php echo $sessao1->titulo5_sessao1;?></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="about-one__text-2"><?php echo $sessao1->texto;?></p>
                            <div class="about-one__contact-us">
                                <div class="about-one__btn-box">
                                    <a href="<?php echo $sessao1->link_botao_1;?>" class="thm-btn about-one__btn"><?php echo $sessao1->nome_botao_1;?></a>
                                </div>
                                <div class="about-one__call">
                                    <div class="about-one__call-icon">
                                        <span class="icon-phone-call"></span>
                                    </div>
                                    <div class="about-one__call-text">
                                        <p><?php echo $sessao1->titulo6_sessao1;?></p>
                                        <a href="tel:<?php echo $infoSistema->telefone1;?>"><?php echo $infoSistema->telefone1;?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-one__right">
                            <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-one__img">
                                    <img src="img/<?php echo $sessao1->paralax_8;?>" alt="">
                                </div>
                                <div class="about-one__small-img">
                                    <img src="img/<?php echo $sessao1->foto_8;?>" alt="">
                                </div>
                                <div class="about-one__project">
                                    <div class="about-one__project-icon">
                                        <img src="img/<?php echo $sessao1->foto_7;?>" alt="">
                                    </div>
                                    <div class="about-one__project-content">
                                        <h3 class="odometer" data-count="<?php echo $sessao1->titulo7_sessao1;?>"></h3>
                                        <p class="about-one__project-text"><?php echo $sessao1->titulo8_sessao1;?></p>
                                    </div>
                                </div>
                                <div class="about-one__shape-1 float-bob-y"></div>
                                <div class="about-one__dot">
                                    <img src="img/<?php echo $sessao1->foto10_sessao1;?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--About One End-->

        <!--Feature One Start-->
        <section class="feature-one">
            <div class="container">
                <ul class="list-unstyled feature-one__list">
                    <!--Feature One Single-->
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="100ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                                <img src="img/<?php echo $sessao1->paralax_2;?>" alt="">
                            </div>
                            <h3 class="feature-one__title"><a href="<?php echo $sessao1->nome_botao_6;?>"><?php echo $sessao1->titulo_img;?></a></h3>
                            <p class="feature-one__text"><?php echo $sessao1->texto_2;?></p>
                            <div class="feature-one__arrow">
                                <a href="<?php echo $sessao1->nome_botao_6;?>"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <!--Feature One Single-->
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="200ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                                <img src="img/<?php echo $sessao1->foto;?>" alt="">
                            </div>
                            <h3 class="feature-one__title"><a href="<?php echo $sessao1->nome_botao_5;?>"><?php echo $sessao1->titulo2;?></a></h3>
                            <p class="feature-one__text"><?php echo $sessao1->descricao2;?></p>
                            <div class="feature-one__arrow">
                                <a href="<?php echo $sessao1->nome_botao_5;?>"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <!--Feature One Single-->
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="300ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                               <img src="img/<?php echo $sessao1->foto_6;?>" alt="">
                            </div>
                            <h3 class="feature-one__title"><a href="<?php echo $sessao1->link_botao_5;?>"><?php echo $sessao1->titulo7;?></a></h3>
                            <p class="feature-one__text"><?php echo $sessao1->texto_6;?></p>
                            <div class="feature-one__arrow">
                                <a href="<?php echo $sessao1->link_botao_5;?>"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <!--Feature One Single-->
                    <li class="feature-one__single wow fadeInLeft" data-wow-delay="400ms">
                        <div class="feature-one__content">
                            <div class="feature-one__shape-1">
                                <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                            </div>
                            <div class="feature-one__shape-2">
                                <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                            </div>
                            <div class="feature-one__icon">
                               <img src="img/<?php echo $sessao1->paralax_7;?>" alt="">
                            </div>
                            <h3 class="feature-one__title"><a href="<?php echo $sessao1->link_botao_6;?>"><?php echo $sessao1->titulo6;?></a></h3>
                            <p class="feature-one__text"><?php echo $sessao1->texto_5;?></p>
                            <div class="feature-one__arrow">
                                <a href="<?php echo $sessao1->link_botao_6;?>"><i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Feature One End-->

        <!--Services One Start-->
        <section class="services-one">
            <div class="services-one-bg-box">
                <div class="services-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(img/<?php echo $sessao1->paralax_3;?>);"></div>
            </div>
            
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo $sessao1->titulo3;?></span>
                    <h2 class="section-title__title"><?php echo $sessao1->descricao3;?></h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <?php
                        for($i = 0; 
                            $i < 3; 
                            ++$i) {
                    ?>
                   
                    <div class="col-xl-4 col-lg-4">
                        
                              
                        <!--Services One Single-->
                        <?php if($puxaEspecialidades[$i]->sessao1_paralax <> ""){?>
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__img">
                                <img src="img/<?php echo $puxaEspecialidades[$i]->sessao1_paralax;?>" alt="">
                                <div class="services-one__icon">
                                   <spam> <img src="img/<?php echo $puxaEspecialidades[$i]->icone;?>" alt=""></spam>
                                </div>
                            </div>
                            <div class="services-one__content">
                                <h3 class="services-one__title"><a href="<?php echo SITE_URL;?>/servico/<?php echo $puxaEspecialidades[$i]->url_amigavel;?>"><?php echo $puxaEspecialidades[$i]->titulo;?></a></h3>
                                <p class="services-one__text"><?php echo $puxaEspecialidades[$i]->descricao;?></p>
                            </div> 
                        </div>
                        <?php }?>
                       
                        
                    </div>
                    <?php } ?>
                    
                </div>
               
                    
                        <div class="project-one__more-project">
                            <div class="project-one__more-project-content2">
                              <a href="<?php echo SITE_URL;?>/servicos"><p><?php echo $sessao1->nome_botao_4;?></a></p>
                            </div>
                        </div>
                   
                
                 
            </div>
            
            
            
        </section>
       
         
        <!--Services One End-->

        <!--Quality Work Start-->
        <section class="quality-work">
            <div class="quality-work-shape-1 float-bob-x">
                <img src="img/<?php echo $sessao1->paralax_4;?>" alt="">
            </div>
            <div class="quality-work-shape-2 float-bob-y">
                <img src="img/<?php echo $sessao1->foto_3;?>" alt="">
            </div>
            <div class="quality-work-shape-3 float-bob-x">
                <img src="img/<?php echo $sessao1->foto_2;?>" alt="">
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="quality-work__left">
                            <div class="quality-work__img-box">
                                <div class="quality-work__img">
                                    <img src="img/<?php echo $sessao1->foto11_sessao1;?>" alt="">
                                </div>
                                <div class="quality-work__small-img">
                                    <img src="img/<?php echo $sessao1->paralax_5;?>" alt="">
                                </div>
                                <div class="quality-work__video-box">
                                    <div class="quality-work__curved-circle-box">
                                        <div class="curved-circle">
                                            <span class="curved-circle--item"><?php echo $sessao1->titulo4;?>"</span>
                                        </div><!-- /.curved-circle -->
                                        <div class="quality-work__video-link">
                                            <a href="<?php echo $sessao1->embed;?>" class="video-popup">
                                                <div class="quality-work__video-icon">
                                                    <span class="fa fa-play"></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="quality-work__right">
                            <div class="section-title">
                                <span class="section-title__tagline"><?php echo $sessao1->descricao4;?></span>
                                <h2 class="section-title__title"><?php echo $sessao1->titulo9_sessao1;?></h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="quality-work__text-1"><?php echo $sessao1->titulo10_sessao1;?></p>
                            <ul class="list-unstyled quality-work__feature">
                                <li>
                                    <div class="icon">
                                        <img src="img/<?php echo $sessao1->foto_4;?>" alt="">
                                    </div>
                                    <div class="text">
                                        <p><?php echo $sessao1->titulo11_sessao1;?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <img src="img/<?php echo $sessao1->paralax_6;?>" alt="">
                                    </div>
                                    <div class="text">
                                        <p><?php echo $sessao1->titulo12_sessao1;?></p>
                                    </div>
                                </li>
                            </ul>
                            <p class="quality-work__text-2"><?php echo $sessao1->texto_3;?></p>
                            <div class="quality-work__progress">
                                <div class="quality-work__progress-single">
                                    <h4 class="quality-work__progress-title"><?php echo $sessao1->titulo13_sessao1;?></h4>
                                    <div class="bar">
                                        <div class="bar-inner count-bar" data-percent="<?php echo $sessao1->titulo15_sessao1;?>">
                                            <div class="count-text"><?php echo $sessao1->titulo15_sessao1;?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quality-work__progress-single">
                                    <h4 class="quality-work__progress-title"><?php echo $sessao1->titulo14_sessao1;?></h4>
                                    <div class="bar marb-0">
                                        <div class="bar-inner count-bar" data-percent="<?php echo $sessao1->titulo16_sessao1;?>">
                                            <div class="count-text"><?php echo $sessao1->titulo16_sessao1;?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Quality Work End-->

        <!--Project One Start-->
       
      
        <!--Project One End-->

        <!--Team One Start-->
        <section class="team-one">
            <div class="container">
                <div class="team-one__top">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="team-one__top-left">
                                <div class="section-title">
                                    <span class="section-title__tagline"><?php echo $sessao1->titulo18_sessao1;?></span>
                                    <h2 class="section-title__title"><?php echo $sessao1->titulo19_sessao1;?></h2>
                                    <div class="section-title__line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="team-one__top-right">
                                <p class="team-one__top-text"><?php echo $sessao1->texto_4;?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-one__bottom">
                    <div class="row">
                         <?php
                            for($i = 0; 
                                $i < 2; 
                                ++$i) {
                        ?>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <!--Team One single-->
                            <?php if($puxaEspecialista[$i]->nome <> ""){?>
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaEspecialista[$i]->foto;?>" alt="">
                                        <div class="team-one__social">
                                            <a href="<?php echo $puxaEspecialista[$i]->twitter;?>"><i class="fab fa-twitter"></i></a>
                                            <a href="<?php echo $puxaEspecialista[$i]->facebook;?>"><i class="fab fa-facebook"></i></a>
                                            <a href="<?php echo $puxaEspecialista[$i]->instagram;?>"><i class="fab fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <div class="team-one__title-box">
                                        <div class="team-one__title-shape">
                                            <img src="assets/images/shapes/team-one-title-box-shape.png" alt="">
                                            <div class="team-one__title-text">
                                                <p class="team-one__title"><?php echo $puxaEspecialista[$i]->especialidade;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="team-one__name"><a href="<?php echo SITE_URL;?>/especialista/<?php echo $puxaEspecialista[$i]->url_amigavel;?>"><?php echo $puxaEspecialista[$i]->nome;?></a></h3>
                                </div>
                            </div>
                            <?php }?>
                            
                        </div>
                         <?php }?>
                         
                    </div>
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="project-one__more-project">
                            <div class="project-one__more-project-content">
                              <a href="<?php echo SITE_URL;?>/servicos"><p><?php echo $sessao1->nome_botao_3;?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                    
                </div>
            </div>
        </section>
        <!--Team One End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one-bg-box">
                <div class="testimonial-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(img/<?php echo $sessao1->paralax_testemunho;?>);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <div class="testimonial-one__left">
                            <div class="section-title">
                                <span class="section-title__tagline"><?php echo $sessao1->titulo20_sessao1;?></span>
                                <h2 class="section-title__title"<?php echo $sessao1->texto_7;?></h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="testimonial-one__text"><?php echo $sessao1->texto_8;?></p>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="testimonial-one__right">
                           <div class="row">
                               <div class="col-lg-4" style="display: -webkit-inline-box;">
                                <!--Testimonial One Single-->
                                 <?php foreach ($puxaTestemunhos as $testemunhos){?>
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <p class="testimonial-one__text-2"><?php echo $testemunhos->testemunho;?></p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__img">
                                            <img src="img/<?php echo $testemunhos->foto;?>" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h4 class="testimonial-one__client-name"><?php echo $testemunhos->nome;?></h4>
                                           
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                               </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonial One End-->

        <!--Brand One Start-->
       
        <!--Brand One End-->

        <!--Blog One Start-->
        <section class="blog-one">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo $sessao1->titulo22_sessao1;?></span>
                    <h2 class="section-title__title"><?php echo $sessao1->titulo23_sessao1;?></h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <?php
                            for($i = 0; 
                                $i < 3; 
                                ++$i) {
                        ?>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--Blog One Start-->
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                                <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaBlogs[$i]->foto;?>" alt="<?php echo $puxaBlogs[$i]->legenda_imagem;?>">
                                <a href="<?php echo SITE_URL;?>/blog/<?php echo $puxaBlogs[$i]->url_amigavel;?>">
                                    <span class="blog-one__plus"></span>
                                </a>
                            </div>
                            <div class="blog-one__content">
                                <div class="blog-one__date">
                                    <p><?php echo formataDataDia($puxaBlogs[$i]->data_postagem);?> <?php echo formataDataMes($puxaBlogs[$i]->data_postagem);?>, <?php echo formataDataAno($puxaBlogs[$i]->data_postagem);?></p>
                                </div>
                                <ul class="list-unstyled blog-one__meta">
                                    <li><a href="<?php echo SITE_URL;?>blog/<?php echo $puxaBlogs[$i]->url_amigavel;?>"><i class="far fa-user-circle"></i> <?php echo $puxaBlogs[$i]->postado_por;?> </a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="<?php echo SITE_URL;?>blog/<?php echo $puxaBlogs[$i]->url_amigavel;?>"><?php echo $puxaBlogs[$i]->breve;?></a></h3>
                            </div>
                            
                        </div>
                    </div>
                    <?php }?>
                    <div class="row">
                    <div class="col-xl-12">
                        <div class="project-one__more-project" style="padding-bottom: 80px;">
                            <div class="project-one__more-project-content">
                              <a href="<?php echo SITE_URL;?>/blog"><p><?php echo $sessao1->nome_botao_2;?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!--Blog One End-->

        <!--Site Footer Start-->
        <?php include "footer.php";?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
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