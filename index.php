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
                                <div class="col-xl-10">
                                    <div class="main-slider-two__content">
                                        <div class="home-header-inner">
                                            <h2><?php echo $puxaHome->subtitulo; ?></h2>
                                            <h1><?php echo $puxaHome->titulo; ?></h1>
                                            <a href="<?php echo $puxaHome->link_botao; ?>" target="_blank" class="home-btn main-menu__btn"><?php echo $puxaHome->nome_botao; ?></a>
                                        </div>     
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

        <section class="feature-two">
			<div class="feature-two-shape-1 float-bob-x">
				<img src="assets/images/shapes/feature-two-shape-1.png" alt="">
			</div>
			<div class="feature-two-shape-2 wow slideInRight animated" data-wow-delay="100ms" data-wow-duration="2500ms" style="visibility: visible; animation-duration: 2500ms; animation-delay: 100ms; animation-name: slideInRight;">
				<img src="assets/images/shapes/feature-two-shape-2.png" alt="">
			</div>
			<div class="feature-two__inner">
				<div class="feature-two-bg" style="background: #5a5557;"></div>
				<div class="container">
					<ul class="list-unstyled feature-two__list">
						<li>
							<div class="feature-two__content-box">
								<div class="feature-two__icon">
                                    <?php if(isset($puxaHome->icone1) && $puxaHome->icone1 != '') { ?>
                                        <span><img src="./img/<?php echo $puxaHome->icone1 ?>" alt=""></span>
                                    <?php } else {?>
                                        <span class="icon-wallpaper-4"></span>
                                    <?php } ?>
								</div>
								<div class="feature-two__content">
									<div class="feature-two__count"></div>
									<h3 class="feature-two__title"><a href="about.html"><?php echo $puxaHome->topico1; ?></a></h3>
								</div>
							</div>
						</li>
						<li>
							<div class="feature-two__content-box">
								<div class="feature-two__icon">
                                    <?php if(isset($puxaHome->icone1) && $puxaHome->icone1 != '') { ?>
                                        <span><img src="./img/<?php echo $puxaHome->icone1 ?>" alt=""></span>
                                    <?php } else {?>
                                        <span class="icon-like"></span>
                                    <?php } ?>
								</div>
								<div class="feature-two__content">
									<div class="feature-two__count"></div>
									<h3 class="feature-two__title"><a href="about.html"><?php echo $puxaHome->topico2; ?></a></h3>
								</div>
							</div>
						</li>
						<li>
							<div class="feature-two__content-box">
								<div class="feature-two__icon">
                                    <?php if(isset($puxaHome->icone1) && $puxaHome->icone1 != '') { ?>
                                        <span><img src="./img/<?php echo $puxaHome->icone1 ?>" alt=""></span>
                                    <?php } else {?>
                                        <span class="icon-expert"></span>
                                    <?php } ?>
								</div>
								<div class="feature-two__content">
									<div class="feature-two__count"></div>
									<h3 class="feature-two__title"><a href="team.html"><?php echo $puxaHome->topico3; ?></a></h3>
								</div>
							</div>
						</li>
					</ul>
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
                                    <?php if(isset($puxaHome->foto1) && $puxaHome->foto1 != '') { ?>
                                        <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaHome->foto1;?>" alt="">
                                    <?php } else {?>
                                        <img src="https://dummyimage.com/370x435/000/fff" alt="">
                                    <?php } ?>
                                </div>
                                <div class="welcome-one__img-2">
                                    <?php if(isset($puxaHome->foto2) && $puxaHome->foto2 != '') { ?>
                                        <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaHome->foto2;?>" alt="">
                                    <?php } else {?>
                                        <img src="https://dummyimage.com/370x435/000/fff" alt="">
                                    <?php } ?>
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
                            <ul class="list-unstyled welcome-one__points">
                               <li>
									<div class="icon">
										<span></span>
									</div>
									<div class="text">
										<p><?php echo $puxaHome->item1;?></p>
									</div>
								</li>
                                <li>
									<div class="icon">
										<span></span>
									</div>
									<div class="text">
										<p><?php echo $puxaHome->item2;?></p>
									</div>
								</li>
                                <li>
									<div class="icon">
										<span></span>
									</div>
									<div class="text">
										<p><?php echo $puxaHome->item3;?></p>
									</div>
								</li>
                                <li>
									<div class="icon">
										<span></span>
									</div>
									<div class="text">
										<p><?php echo $puxaHome->item4;?></p>
									</div>
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
                                            <?php if(isset($puxaAtendimento->imagem1) && $puxaAtendimento->imagem1 != '') { ?>
                                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaAtendimento->imagem1;?>" alt="">
                                                <?php } else {?>
                                                <span><img src="https://dummyimage.com/235x109/000/fff" alt=""></span> 
                                            <?php } ?>
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
                                                <?php if(isset($puxaAtendimento->imagem2) && $puxaAtendimento->imagem2 != '') { ?>
                                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaAtendimento->imagem2;?>" alt="">
                                                <?php } else {?>
                                                    <span><img src="https://dummyimage.com/235x109/000/fff" alt=""></span>
                                                <?php } ?>
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
                                        <h3><?php echo $puxaAtendimento->pergunta1;?></h3>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?php echo $puxaAtendimento->resposta1;?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                    <div class="accrodion-title">
                                        <h3><?php echo $puxaAtendimento->pergunta2;?></h3>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?php echo $puxaAtendimento->resposta2;?></p>
                                        </div>
                                    </div>
                                </div>     
                                <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                    <div class="accrodion-title">
                                        <h3><?php echo $puxaAtendimento->pergunta3;?></h3>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p><?php echo $puxaAtendimento->resposta3;?></p>
                                        </div>
                                    </div>
                                </div> 
                                <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                    <div class="accrodion-title">
                                        <h3><?php echo $puxaAtendimento->pergunta4;?></h3>
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

        <section class="services-two" id="services">
			<div class="services-two-bg" style="background-image: url(assets/images/backgrounds/services-two-bg.jpg);">
			</div>
			<div class="services-two-shape-1 float-bob-x"></div>
			<div class="services-two-shape-2 float-bob-y"></div>
			<div class="services-two-shape-3 float-bob-y"></div>
			<div class="container">
				<div class="section-title text-center">
					<span class="section-title__tagline"><?php echo $puxaServices->subtitulo;?></span>
					<h2 class="section-title__title"><?php echo $puxaServices->titulo;?></h2>
					<div class="section-title__line"></div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
						<!--Services Two single-->
						<div class="services-two__single">
							<div class="services-two__img">
                                <?php if(isset($puxaServices->imagem1) && $puxaServices->imagem1 != '') { ?>
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaServices->imagem1;?>" alt="">
                                <?php } else {?>
                                    <span><img src="https://dummyimage.com/270x200/000/fff" alt=""></span> 
                                <?php } ?>
							</div>
							<div class="services-two__content">
								<div class="services-two__icon">
                                    <?php if(isset($puxaServices->icone1) && $puxaServices->icone1 != '') { ?>
                                        <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaServices->icone1;?>" alt="">
                                    <?php } else {?>
                                        <span><img src="https://dummyimage.com/48x48/ddd/000" alt=""></span> 
                                    <?php } ?>
								</div>
								<div class="services-two__content-inner">
                                    <h3 id="first-child-services" class="services-two__title"><?php echo $puxaServices->subtitulo1;?></h3>
									<p class="services-two__text"><?php echo $puxaServices->titulo1;?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
						<!--Services Two single-->
						<div class="services-two__single">
                        <div class="services-two__img">
                                <?php if(isset($puxaServices->imagem2) && $puxaServices->imagem2 != '') { ?>
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaServices->imagem2;?>" alt="">
                                <?php } else {?>
                                    <span><img src="https://dummyimage.com/270x200/000/fff" alt=""></span> 
                                <?php } ?>
							</div>
							<div class="services-two__content">
								<div class="services-two__icon">
                                    <?php if(isset($puxaServices->icone2) && $puxaServices->icone2 != '') { ?>
                                        <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaServices->icone2;?>" alt="">
                                    <?php } else {?>
                                        <span><img src="https://dummyimage.com/48x48/ddd/000" alt=""></span> 
                                    <?php } ?>
								</div>
								<div class="services-two__content-inner">
                                    <h3 class="services-two__title"><?php echo $puxaServices->subtitulo2;?></h3>
									<p class="services-two__text"><?php echo $puxaServices->titulo2;?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
						<!--Services Two single-->
						<div class="services-two__single">
                        <div class="services-two__img">
                                <?php if(isset($puxaServices->imagem3) && $puxaServices->imagem3 != '') { ?>
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaServices->imagem3;?>" alt="">
                                <?php } else {?>
                                    <span><img src="https://dummyimage.com/270x200/000/fff" alt=""></span> 
                                <?php } ?>
							</div>
							<div class="services-two__content">
								<div class="services-two__icon">
                                    <?php if(isset($puxaServices->icone3) && $puxaServices->icone3 != '') { ?>
                                        <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaServices->icone3;?>" alt="">
                                    <?php } else {?>
                                        <span><img src="https://dummyimage.com/48x48/ddd/000" alt=""></span> 
                                    <?php } ?>
								</div>
								<div class="services-two__content-inner">
                                    <h3 class="services-two__title"><?php echo $puxaServices->subtitulo3;?></h3>
									<p class="services-two__text"><?php echo $puxaServices->titulo3;?></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
						<!--Services Two single-->
						<div class="services-two__single">
                        <div class="services-two__img">
                                <?php if(isset($puxaServices->imagem4) && $puxaServices->imagem4 != '') { ?>
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaServices->imagem4;?>" alt="">
                                <?php } else {?>
                                    <span><img src="https://dummyimage.com/270x200/000/fff" alt=""></span> 
                                <?php } ?>
							</div>
							<div class="services-two__content">
								<div class="services-two__icon">
                                    <?php if(isset($puxaServices->icone4) && $puxaServices->icone4 != '') { ?>
                                        <img src="<?php echo SITE_URL;?>/img/<?php echo $puxaServices->icone4;?>" alt="">
                                    <?php } else {?>
                                        <span><img src="https://dummyimage.com/48x48/ddd/000" alt=""></span> 
                                    <?php } ?>
								</div>
								<div class="services-two__content-inner">
									<h3 class="services-two__title"><?php echo $puxaServices->subtitulo4;?></h3>
									<p class="services-two__text"><?php echo $puxaServices->titulo4;?></p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

        <section class="more-services">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="more-services__inner wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
							<div class="more-services__left">
								<p class="more-services__text"><?php echo $puxaServices->texto;?></p>
							</div>
                            <a href="<?php echo $puxaServices->link_botao; ?>" class="home-btn main-menu__btn"><?php echo $puxaServices->nome_botao; ?></a>
						</div>
					</div>
				</div>
			</div>
		</section>

        	<!--Working Process Start-->
		<section class="working-process">
			<div class="container">
				<div class="section-title text-center">
					<span class="section-title__tagline"><?php echo $puxaServices->subtitulo;?></span>
					<h2 class="section-title__title"><?php echo $puxaServices->titulo;?></h2>
					<div class="section-title__line"></div>
				</div>
				<div class="working-process__inner">
					<div class="row">
						<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
							<!--Working Process Single-->
							<div class="working-process__single">
								<div class="working-process__count"></div>
								<div class="working-process__icon">
									<span class="icon-list"></span>
								</div>
								<h3 class="working-process__title"><?php echo $puxaServices->item1;?>
								</h3>
								<p class="working-process__text"><?php echo $puxaServices->texto1;?></p>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
							<!--Working Process Single-->
							<div class="working-process__single">
								<div class="working-process__count"></div>
								<div class="working-process__icon">
									<span class="icon-experts"></span>
								</div>
								<h3 class="working-process__title"><?php echo $puxaServices->item2;?>
								</h3>
								<p class="working-process__text"><?php echo $puxaServices->texto2;?></p>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
							<!--Working Process Single-->
							<div class="working-process__single">
								<div class="working-process__count"></div>
								<div class="working-process__icon">
									<span class="icon-wallpaper-6"></span>
								</div>
								<h3 class="working-process__title"><?php echo $puxaServices->item3;?></h3>
								<p class="working-process__text"><?php echo $puxaServices->texto3;?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Working Process End-->
        <section class="more-services">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="more-services__inner wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
							<div class="more-services__left">
								<p class="more-services__text"><?php echo $puxaServices->texto;?></p>
							</div>
                            <a href="<?php echo $puxaServices->link_botao; ?>" class="home-btn main-menu__btn"><?php echo $puxaServices->nome_botao; ?></a>
						</div>
					</div>
				</div>
			</div>
		</section>		

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
							<h2 class="leading__title"><?php echo $puxaPsicologia->titulo ?></h2>
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
										<p><?php echo $puxaPsicologia->item1; ?></p>
									</div>
								</li>
								<li>
									<div class="icon">
										<span class="fa fa-check"></span>
									</div>
									<div class="text">
										<p><?php echo $puxaPsicologia->item2; ?></p>
									</div>
								</li>
								<li>
									<div class="icon">
										<span class="fa fa-check"></span>
									</div>
									<div class="text">
										<p><?php echo $puxaPsicologia->item3; ?></p>
									</div>
								</li>
								<li>
									<div class="icon">
										<span class="fa fa-check"></span>
									</div>
									<div class="text">
										<p><?php echo $puxaPsicologia->item4; ?></p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>

        <section class="blog-two" id="blog">
			<div class="blog-two-bg" style="background-image: url(assets/images/backgrounds/blog-two-bg.jpg);"></div>
			<div class="container">
				<div class="blog-two__top">
					<div class="row">
						<div class="col-xl-6 col-lg-6">
							<div class="blog-two__top-left">
								<div class="section-title text-left">
									<span class="section-title__tagline"><?php echo $puxaPsicologia->subtitulo;?></span>
									<h2 class="section-title__title"><?php echo $puxaPsicologia->titulo;?></h2>
									<div class="section-title__line"></div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6">
							<div class="blog-two__right">
								<p class="blog-two__right-text"><?php echo $puxaPsicologia->texto;?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="blog-two__bottom">
					<div class="row">
						<?php foreach($puxaBlogs as $blog) { ?> 
                        <div class="col-xl-4 col-lg-4 wow fadeInUp animated" data-wow-delay="100ms" style="visibility: visible; animation-delay: 100ms; animation-name: fadeInUp;">
							<!--Blog One Start-->
							<div class="blog-one__single">
								<div class="blog-one__img">
                                    <?php if(isset($blog->foto) && $blog->foto != '') { ?>
                                        <img src="<?php echo SITE_URL;?>/img/<?php echo $blog->foto;?>" alt="">
                                    <?php } else {?>
                                        <span><img src="https://dummyimage.com/48x48/ddd/000" alt=""></span> 
                                    <?php } ?>
									<img src="assets/images/blog/blog-1-1.jpg" alt="">
									<a href="blog-details.html">
										<span class="blog-one__plus"></span>
									</a>
								</div>
								<div class="blog-one__content">
									<div class="blog-one__date">
										<p><?php echo $blog->data_postagem;?></p>
									</div>
									<ul class="list-unstyled blog-one__meta">
										<li><a href="blog-details.html"><i class="far fa-user-circle"></i> <?php echo $blog->postado_por;?> </a>
										</li>
										<li><span>/</span></li>
										<li><a href="blog-details.html"><i class="far fa-comments"></i> 02 Comments</a>
										</li>
									</ul>
									<h3 class="blog-one__title"><a href="blog-details.html"><?php echo $blog->titulo;?></a></h3>
								</div>
							</div>
						</div>
                        <?php } ?>	
					</div>
				</div>
			</div>
		</section>

        <section class="cta-one" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6">
						<div class="cta-one__left">
							<div class="cta-one__img-box">
								<div class="cta-one__img-1">
									<img src="assets/images/resources/cta-one-img-1.jpg" alt="">
								</div>
								<div class="cta-one__img-2">
									<img src="assets/images/resources/cta-one-img-2.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-7 col-lg-6">
						<div class="cta-one__right">
							<h2 class="cta-one__title"><?php echo $puxaPsicologia->titulo3;?></h2>
							<a href="<?php echo $puxaPsicologia->link_botao; ?>" class="thm-btn cta-one__btn"><?php echo $puxaPsicologia->nome_botao; ?></a>
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