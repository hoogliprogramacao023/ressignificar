<?php 
    include "includes.php";
    include "Class/textos.class.php";
    include "Class/faqs.class.php";
    include "Class/testemunhos.class.php";
    include "Class/blogs.class.php";
    include "Class/parceiros.class.php";
    include "Class/banners.class.php";
    
    $banner = Banners::getInstance(Conexao::getInstance());
    $parceiros = Parceiros::getInstance(Conexao::getInstance());
    $blog = Blogs::getInstance(Conexao::getInstance());
    $testemunhos = Testemunhos::getInstance(Conexao::getInstance());
    $faqs = Faqs::getInstance(Conexao::getInstance());
    $textos = Textos::getInstance(Conexao::getInstance());
    $home = Home::getInstance(Conexao::getInstance());
    $atendimento = Atendimento::getInstance(Conexao::getInstance());
    $services = Services::getInstance(Conexao::getInstance());
    $psicologia = Psicologia::getInstance(Conexao::getInstance());
    $blogs = Blogs::getInstance(Conexao::getInstance());
    $infoSistema = ConfigSistema::getInstance(Conexao::getInstance());
    
    $puxaParceiros = $parceiros->rsDados();
    $puxaBlogs = $blog->rsDados('','',3);
    $puxaTestemunhos = $testemunhos->rsDados();
    $puxaFaqs = $faqs->rsDados('','','', '69'); 
    $textosHome = $textos->rsDados(69);
    $puxaBanners = $banner->rsDados(15);
    $puxaHome = $home->rsDados(10);
    $puxaAtendimento = $atendimento->rsDados(11);
    $puxaServices = $services->rsDados(1);
    $puxaPsicologia = $psicologia->rsDados(1);
    $puxaBlogs = $blogs->rsDados();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <?php include "description.php";?>
    <?php include "inc-tagmanager-head.php";?>

</head>

<body class="custom-cursor">

    <div class="page-wrapper">
        
       <?php include "header.php";?>

        <section class="main-slider-two">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": false,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper" style="transition-duration: 100ms;">

                    <div class="swiper-slide">
                        <div class="image-layer-two"
                            style="background-image: url('https://dummyimage.com/1920x785/d4cdd4/b2b3bd');"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="main-slider-two__content">
                                        <div class="home-header-inner">
                                            <h2><?php echo $puxaHome->titulo; ?></h2>
                                            <h1><?php echo $puxaHome->subtitulo; ?></h1>
                                            <a href="<?php echo $puxaHome->link_botao; ?>" target="_blank" class="home-btn main-menu__btn"><?php echo $puxaHome->nome_botao; ?></a>
                                        </div>
                                        <p class="main-slider-two__sub-title"><?php echo $puxaBanners->titulo1;?></p>
                                        <h2 class="main-slider-two__title"><?php echo $puxaBanners->titulo2;?></h2>
                                        <?php if ($puxaBanners->nome_botao <> ""){?>
                                        <div class="main-slider-two__btn-box">
                                            <a href="<?php echo $puxaBanners->link_botao;?>" class="main-slider-two__btn thm-btn"><?php echo $puxaBanners->nome_botao;?></a>
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
        
		<!-- <section class="home-header">
			<div class="home-header-bg" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $puxaBanners->foto;?>)">
				<div class="container text-header">
					<div class="home-header-inner">
						<h2><?php echo $puxaHome->titulo; ?></h2>
						<h1><?php echo $puxaHome->subtitulo; ?></h1>
                        <a href="<?php echo $puxaHome->link_botao; ?>" target="_blank" class="home-btn main-menu__btn"><?php echo $puxaHome->nome_botao; ?></a>
					</div>
				</div>
			</div>
		</section> -->

		<section class="mt-5">
			<div class="container">
				<div class="row card-row">
					<div class="card col-lg-4 col-md-12 col-sm-12">
						<span class="index-card">01</span>
						<h2><?php echo $puxaHome->topico1; ?></h2>
					</div>

					<div class="card col-lg-4 col-md-12 col-sm-12">
						<span class="index-card">02</span>
						<h2><?php echo $puxaHome->topico2; ?></h2>
					</div>

					<div class="card col-lg-4 col-md-12 col-sm-12">
						<span class="index-card">03</span>
						<h2><?php echo $puxaHome->topico3; ?></h2>
					</div>
				</div>
			</div>
		</section>

        <section class="welcome-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="welcome-one__left">
                            <div class="welcome-one__img-box wow slideInLeft" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="welcome-one__img-1">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $textosHome->foto_6;?>" alt="">
                                </div>
                                <div class="welcome-one__img-2">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $textosHome->foto_6;?>" alt="">
                                </div>
                                <div class="welcome-one__experience">
                                    <div class="welcome-one__experience-year">
                                        <h3><?php echo $puxaHome->qtd_anos;?></h3>
                                    </div>
                                    <p class="welcome-one__experience-text"><?php echo $puxaHome->cat_anos;?></p>
                                </div>
                                <div class="welcome-one__dot">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $textosHome->paralax_8;?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="welcome-one__right bullets">
                            <div class="section-title">
                                <span class="section-title__tagline"><?php echo $puxaHome->subtitulo1;?></span>
                                <h2 class="section-title__title"><?php echo $puxaHome->titulo1;?></h2>
                                <div class="section-title__line"></div>
                            </div>
                            <p class="welcome-one__text"><?php echo $puxaHome->texto1;?></p>
                            <ul>
                                <li>
                                <?php echo $puxaHome->item1;?>
                                </li>
                                <li>
                                <?php echo $puxaHome->item2;?>
                                </li>
                                <li>
                                <?php echo $puxaHome->item3;?>
                                </li>
                                <li>
                                <?php echo $puxaHome->item4;?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="benefits-one wow fadeInUp" data-wow-delay="100ms">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="benefits-one__left">
                            <div class="section-title">
                                <span class="section-title__tagline"><?php echo $puxaAtendimento->subtitulo;?></span>
                                <h2 class="section-title__title"><?php echo $puxaAtendimento->titulo;?></h2>
                                <div class="section-title__line"></div>
                            </div>
                            <div class="p-text">
                            <?php echo $puxaAtendimento->texto;?>
                            </div>
                        
                            <div class="benefits-one__points">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="benefits-one__points-single">
                                            <div class="benefits-one__points-img">
                                                <img src="<?php echo SITE_URL;?>/img/<?php echo $textosHome->paralax_6;?>" alt="">
                                            </div>
                                            <ul class="list-unstyled benefits-one__points-list">
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p><?php echo $puxaAtendimento->item1;?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="benefits-one__points-single">
                                            <div class="benefits-one__points-img">
                                                <img src="<?php echo SITE_URL;?>/img/<?php echo $textosHome->paralax_3;?>" alt="">
                                            </div>
                                            <ul class="list-unstyled benefits-one__points-list">
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p><?php echo $puxaAtendimento->item2;?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="benefits-one__right">
                            <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                    <div class="accrodion-title">
                                        <h4><?php echo $puxaAtendimento->pergunta1;?></h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?php echo $puxaAtendimento->resposta1;?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                    <div class="accrodion-title">
                                        <h4><?php echo $puxaAtendimento->pergunta2;?></h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?php echo $puxaAtendimento->resposta2;?></p>
                                        </div>
                                    </div>
                                </div>     
                                <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                    <div class="accrodion-title">
                                        <h4><?php echo $puxaAtendimento->pergunta3;?></h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?php echo $puxaAtendimento->resposta3;?></p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                    <div class="accrodion-title">
                                        <h4><?php echo $puxaAtendimento->pergunta4;?></h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?php echo $puxaAtendimento->resposta4;?></p>
                                        </div>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<section class="promovendo-saude wow fadeInUp" data-wow-delay="100ms">
			<div class="container">
				<div class="row mb-5 mobile-center">
					<div class="col-12 mb-4">
                        <div class="section-title text-center">
                            <span class="section-title__tagline"><?php echo $puxaServices->subtitulo;?></span>
                            <h2 class="section-title__title"><?php echo $puxaServices->titulo;?></h2>
                            <div class="section-title__line"></div>
                        </div>
					</div>
                        <div class="col-lg-3 col-md-6 col-sm-12 ">
                            <div class="service-details__points-two-single">
                                <div class="service-details__points-two-content">
                                    <h4><?php echo $puxaServices->subtitulo1;?></h4>
                                    <hr>
                                    <p><?php echo $puxaServices->titulo1;?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="service-details__points-two-single">
                                <div class="service-details__points-two-content">
                                    <h4><?php echo $puxaServices->subtitulo2;?></h4>
                                    <hr>
                                    <p><?php echo $puxaServices->titulo2;?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="service-details__points-two-single">
                                <div class="service-details__points-two-content">
                                    <h4><?php echo $puxaServices->subtitulo3;?></h4>
                                    <hr>
                                    <p><?php echo $puxaServices->titulo3;?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="service-details__points-two-single">
                                <div class="service-details__points-two-content">
                                    <h4><?php echo $puxaServices->subtitulo4;?></h4>
                                    <hr>
                                    <p><?php echo $puxaServices->titulo4;?></p>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-5 mobile-center">
                            <div class="col-md-8 col-sm-8 text-services">
                                <p><?php echo $puxaServices->texto;?></p>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a href="<?php echo $puxaServices->link_botao; ?>" class="home-btn main-menu__btn"><?php echo $puxaServices->nome_botao; ?></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mb-4">
                        <div class="section-title text-center">
                            <span class="section-title__tagline"><?php echo $puxaServices->subtitulo5;?></span>
                            <h2 class="section-title__title"><?php echo $puxaServices->titulo5;?></h2>
                            <div class="section-title__line"></div>
                        </div>


					</div>
				</div>

				<div class="row card-row">
					<div class="card col-lg-4 col-md-6 col-sm-12">
                        <span class="index-card">01</span>
						<h2><?php echo $puxaServices->item1;?></h2>
						<p><?php echo $puxaServices->texto1;?></p>
					</div>

					<div class="card col-lg-4 col-md-6 col-sm-12">
                    <span class="index-card">02</span>
						<h2><?php echo $puxaServices->item2;?></h2>
						<p><?php echo $puxaServices->texto2;?></p>
					</div>

					<div class="card col-lg-4 col-md-6 col-sm-12">
                    <span class="index-card">03</span>
						<h2><?php echo $puxaServices->item3;?></h2>
						<p><?php echo $puxaServices->texto3;?></p>
					</div>
			    </div>
			</div>
		</section>

		<section class="leading wow fadeInUp" data-wow-delay="100ms">
            <div class="leading-bg-box">
                <div class="leading-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $textosHome->paralax_7;?>);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="leading__left">
                            <div class="leading__video-link">
                                <a href="<?php echo $textosHome->embed;?>" class="video-popup">
                                    <div class="leading__video-icon">
                                        <span class="fa fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <h3 class="leading__title"><?php echo $puxaPsicologia->titulo ?></h3>
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
                                        <p><?php echo $puxaPsicologia->item1 ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $puxaPsicologia->item2 ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $puxaPsicologia->item3 ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fa fa-check"></span>
                                    </div>
                                    <div class="text">
                                        <p><?php echo $puxaPsicologia->item4?></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

		<br>


        <!-- <section class="project-two">
            <div class="porject-two-border"></div>
            <div class="porject-two-border-2"></div>
            <div class="porject-two-border-3"></div>
            <div class="project-two-bg-1 active"
                style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $textosHome->foto_8;?>);">
            </div>
            <div class="project-two-bg-2"
                style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $textosHome->foto10_sessao1;?>);">
            </div>
            <div class="project-two-bg-3"
                style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $textosHome->foto;?>);">
            </div>
            <div class="project-two-bg-4"
                style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $textosHome->foto_4;?>);">
            </div>
            <div class="project-two__wrap">
                <div class="prject-two__title-box">
                    <div class="project-two-title-shape"
                        style="background-image: url(assets/images/shapes/prject-two-title-shape.png);"></div>
                    <h4 class="project-two__title-1"><?php echo $textosHome->titulo2;?></h4>
                </div>
                <div class="project-two__content-box">
                    <div class="project-two__single">
                        <div class="project-two__content"> 
                            <p class="project-two__sub-title"><?php echo $textosHome->titulo22_sessao1;?></p>
                            <h3 class="project-two__title"><?php echo $textosHome->titulo23_sessao1;?></h3>
                        </div>
                        <div class="project-two__hover">
                            <p class="project-two__hover-sub-title"><?php echo $textosHome->titulo22_sessao1;?></p>
                            <h3 class="project-two__hover-title"><a href="<?php echo $textosHome->link_botao_8;?>"><?php echo $textosHome->titulo23_sessao1;?></a></h3>
                            <p style="margin-top:30px;"><?php echo $textosHome->breve_sobre2;?></p>
                            <a  style="margin-top:35px;"href="<?php echo $textosHome->link_botao_8;?>" class="thm-btn project-two__btn"><?php echo $textosHome->nome_botao_8;?></a>
                        </div>
                    </div>
                    <div class="project-two__single">
                        <div class="project-two__content">
                            <p class="project-two__sub-title"><?php echo $textosHome->titulo25_sessao1;?></p>
                            <h3 class="project-two__title"><?php echo $textosHome->nome_botao_6;?></h3>
                        </div>
                        <div class="project-two__hover">
                            <p class="project-two__hover-sub-title"><?php echo $textosHome->titulo25_sessao1;?></p>
                            <h3 class="project-two__hover-title"><a href="<?php echo $textosHome->nome_botao_5;?>"><?php echo $textosHome->nome_botao_6;?></a>
                            </h3>
                            <p style="margin-top:30px;"><?php echo $textosHome->texto_2;?></p>
                            <a style="margin-top:35px;"href="<?php echo $textosHome->nome_botao_5;?>" class="thm-btn project-two__btn"><?php echo $textosHome->nome_botao_1;?></a>
                        </div>
                    </div>
                    <div class="project-two__single">
                        <div class="project-two__content">
                            <p class="project-two__sub-title"><?php echo $textosHome->titulo24_sessao1;?></p>
                            <h3 class="project-two__title"><?php echo $textosHome->titulo7;?></h3>
                        </div>
                        <div class="project-two__hover">
                            <p class="project-two__hover-sub-title"><?php echo $textosHome->titulo24_sessao1;?></p>
                            <h3 class="project-two__hover-title"><a href="<?php echo $textosHome->link_botao_5;?>"><?php echo $textosHome->titulo7;?></a></h3>
                            <p style="margin-top:30px;"><?php echo $textosHome->descricao2;?></p>
                            <a style="margin-top:35px;" href="<?php echo $textosHome->link_botao_5;?>" class="thm-btn project-two__btn"><?php echo $textosHome->nome_botao_4;?></a>
                        </div>
                    </div>
                    <div class="project-two__single">
                        <div class="project-two__content">
                            <p class="project-two__sub-title"><?php echo $textosHome->titulo6;?></p>
                            <h3 class="project-two__title"><?php echo $textosHome->link_botao_4;?></h3>
                        </div>
                        <div class="project-two__hover">
                            <p class="project-two__hover-sub-title"><?php echo $textosHome->titulo6;?></p>
                            <h3 class="project-two__hover-title"><a href="<?php echo $textosHome->link_botao_6;?>"><?php echo $textosHome->link_botao_4;?></a></h3>
                            <p style="margin-top:30px;"><?php echo $textosHome->texto_6;?></p>
                            <a style="margin-top:35px;" href="<?php echo $textosHome->link_botao_6;?>" class="thm-btn project-two__btn"><?php echo $textosHome->titulo15_sessao1;?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

    
        <section class="services-two wow fadeInUp" data-wow-delay="100ms">
            <div class="container">
                <div class="services-two-bg" style="background-color:#f8f9fa;">
                </div>
                <div class="services-two-shape-1 float-bob-x"></div>
                <div class="services-two-shape-2 float-bob-y"></div>
                <div class="services-two-shape-3 float-bob-y"></div>
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo $puxaPsicologia->subtitulo;?></span>
                    <h2 class="section-title__title"><?php echo $puxaPsicologia->titulo2;?></h2>
                    <div class="section-title__line"></div>
                    <p class="section-title__text"><?php echo $puxaPsicologia->texto?></p>
                </div>
                <div class="row services-five">       
                    <?php foreach ($puxaBlogs as $blog){?>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-two__single">
                            <div class="services-two__img">
                                <img src="https://via.placeholder.com/150" alt="">
                            </div>
                            <div class="services-two__content">
                                <div class="services-two__content-inner">
                                    <h3 class="services-two__title"><a href="<?php echo SITE_URL;?>/blog/<?php echo $blog->id;?>"><?php echo $blog->titulo ;?></a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="row ">
                    <div class="col-sm-12 col-md-4 services-announce">
                        <img src="https://via.placeholder.com/300" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-12 col-md-8 services-announce announce-text">
                        <h2><?php echo $puxaPsicologia->titulo3;?></h2>
                        <div>
                            <a href="<?php echo $puxaPsicologia->link_botao; ?>" class="home-btn main-menu__btn"><?php echo $puxaPsicologia->nome_botao; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- <section class="working-process">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo $textosHome->titulo13_sessao1;?></span>
                    <h2 class="section-title__title"><?php echo $textosHome->titulo14_sessao1;?></h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="working-process__inner">
                    <div class="row" style="justify-content: center;">
                        <?php foreach ($puxaTestemunhos as $pilares){?>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                            <div class="working-process__single">
                                <div class="working-process__count"></div>
                                <div class="working-process__icon">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $pilares->foto;?>" alt="">
                                </div>
                                <h3 class="working-process__title"><?php echo $pilares->nome;?></h3>
                                <p class="working-process__text"><?php echo $pilares->testemunho;?></p>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section> -->
       
       
        
       <?php include "footer.php";?>
    </div>

    <?php include "menu-mobile.php"; ?>
    
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
    <script src="assets/vendors/toolbar/js/js.cookie.min.js"></script>
    <script src="assets/vendors/toolbar/js/jQuery.style.switcher.min.js"></script>
    <script src="assets/vendors/toolbar/js/toolbar.js"></script>

</body>

</html>