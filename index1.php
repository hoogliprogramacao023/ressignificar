<?php
    include "includes.php";
    include "envia.php";
    include "Class/banners.class.php";
    include "Class/textos.class.php";
    include "Class/procedimentos.class.php";
    
    $puxaServicos = Procedimentos::getInstance(Conexao::getInstance());
    $textos = Textos::getInstance(Conexao::getInstance());
    $banner = Banners::getInstance(Conexao::getInstance());
    $puxaBanners = $banner->rsDados(15);
    $sessao1 = $textos->rsDados(69);
    $contatos = $textos->rsDados(91);
    $servicos = $puxaServicos->rsDados();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "description.php";?>
    <?php include "inc-tagmanager-head.php";?>
</head>

<body class="custom-cursor">

    <div class="page-wrapper">
    <?php include "header.php";?>
    <?php include "inc-tagmanager-body.php";?>
      

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Start-->
        <section class="main-slider-three">
            <div class="swiper-container " > 
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer-three" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $puxaBanners->foto;?>);"></div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <h1 class="main-slider-three__sub-title"><?php echo $puxaBanners->titulo1;?></h1>
                                        <h2 class="main-slider-three__title"><?php echo $puxaBanners->titulo2;?></h2>
                                        <?php if($puxaBanners->tem_botao == "S"){?>
                                            <div class="btn">
                                                <a href="<?php echo $puxaBanners->link_botao;?>" class=" thm-btn2"><?php echo $puxaBanners->nome_botao;?> <i style="font-weight: 800;margin-left: 6px;"class="fab fa-whatsapp"></i></a>
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
        <!--Main Slider End-->

        <!--Feature Three Start-->
        <section class="feature-three">
            <div class="feature-three-bg"
                style="background-image: url(assets/images/backgrounds/feature-three-bg.jpg);"></div>
            <div class="container">
                <div class="feature-three__top">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="feature-three__top-inner">
                                <ul class="list-unstyled feature-three__top-icon-list">
                            
                                    <li>
                                        <div class="feature-three__top-icon-content">
                                            <div class="feature-three__top-icon">
                                                <img src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->paralax_1;?>" alt="<?php echo $sessao1->titulo;?>" />
                                            </div>
                                            <h3 class="feature-three__top-title">
                                                <a href="about.html"><?php echo $sessao1->titulo;?></a>
                                            </h3>
                                        </div>
                                    </li>
                                   
                                    <li>
                                        <div class="feature-three__top-icon-content">
                                            <div class="feature-three__top-icon">
                                                <img src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->titulo18_sessao1;?>" alt="<?php echo $sessao1->descricao;?>" />
                                            </div>
                                            <h3 class="feature-three__top-title">
                                                <a href="about.html"><?php echo $sessao1->descricao;?></a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-three__top-icon-content">
                                            <div class="feature-three__top-icon">
                                                <img src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->foto_7;?>" alt="<?php echo $sessao1->titulo8;?>" />
                                            </div>
                                            <h3 class="feature-three__top-title">
                                                <a href="team.html"><?php echo $sessao1->titulo8;?></a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-three__top-icon-content">
                                            <div class="feature-three__top-icon">
                                                <img src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->paralax_2;?>" alt="<?php echo $sessao1->titulo4_sessao1;?>" />
                                            </div>
                                            <h3 class="feature-three__top-title">
                                                <a href="contact.html"><?php echo $sessao1->titulo4_sessao1;?></a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-three__top-icon-content">
                                            <div class="feature-three__top-icon">
                                                <img src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->foto_6;?>" alt="<?php echo $sessao1->titulo5_sessao1;?>" />
                                            </div>
                                            <h3 class="feature-three__top-title">
                                                <a href="about.html"><?php echo $sessao1->titulo5_sessao1;?></a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feature-three__bottom">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="feature-three__bottom-inner">
                                    <div class="feature-three__bottom-left">
                                        <p class="feature-three__bottom-text"><?php echo $sessao1->texto;?></p>
                                    </div>
                                    <a href="<?php echo $sessao1->link_botao_1;?>" class="feature-three__btn thm-btn"><?php echo $sessao1->nome_botao_1;?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Feature Three End-->

        <!--Why Choose One Start-->
        <section class="why-choose-one">
            <div class="why-choose-one-shape-1"></div>
            <div class="why-choose-one-shape-2 float-bob-x">
                <img src="assets/images/shapes/why-choose-one-shape-2.png" alt="">
            </div>
            <div class="why-choose-one-shape-3"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="why-choose-one__left wow slideInLeft" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="why-choose-one__img">
                                <img src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->paralax_8;?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="why-choose-one__right">
                            <div class="section-title">
                                <h2><span class="section-title__tagline"><?php echo $sessao1->titulo_img;?></span></h2>
                                <h3 class="section-title__title"><?php echo $sessao1->titulo2;?></h3>
                                <div class="section-title__line"></div>
                            </div>
                            <ul class="list-unstyled why-choose-one__points">
                                <li>
                                    <div class="icon">
                                        <span class="icon-checked"></span>
                                    </div>
                                    <div class="text">
                                        <h3><?php echo $sessao1->titulo7_sessao1;?></h3>
                                        <p><?php echo $sessao1->breve_sobre;?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-checked"></span>
                                    </div>
                                    <div class="text">
                                        <h3><?php echo $sessao1->titulo8_sessao1;?></h3>
                                        <p><?php echo $sessao1->breve_sobre2;?></p>
                                    </div>
                                </li>
                            </ul>
                            <a href="<?php echo $sessao1->link_botao_8;?>" class="thm-btn why-choose-one__btn"><?php echo $sessao1->nome_botao_8;?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Why Choose One End-->


        <!--Services One Start-->
        <section class="services-one services-three">
            <div class="services-one-bg-box">
                <div class="services-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $sessao1->foto_8;?>);"></div>
            </div>
            <div class="services-three-bg-box">
                <div class="services-three-bg"
                    style="background-image: url(assets/images/backgrounds/services-three-bg.jpg);"></div>
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo $sessao1->titulo22_sessao1;?></span>
                    <h2 class="section-title__title"><?php echo $sessao1->titulo23_sessao1;?></h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    
                    <?php for($i = 0; $i < 3 ; $i++){?>
                        <div class="col-xl-4 col-lg-4">
                            <!--Services One Single-->
                            <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                                <div class="services-one__img">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $servicos[$i]->foto_projeto;?>" alt="">
                                    <div class="services-one__icon">
                                        <img class="icon-wallpaper-3" src="<?php echo SITE_URL;?>/img/<?php echo $servicos[$i]->icone;?>" alt="">
                                    </div>
                                </div>
                                <div class="services-one__content">
                                    <h3 class="services-one__title"><a href="<?php echo SITE_URL;?>/projeto/<?php echo $servicos[$i]->url_amigavel;?>"><?php echo $servicos[$i]->titulo;?></a></h3>
                                    <p class="services-one__text"><?php echo $servicos[$i]->descricao;?></p>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    
                </div>
            </div>
        </section>
        <!--Services One End-->

        <!--More Services Two Start-->
        <section class="more-services-two">
            <div class="more-services-two-shape float-bob-x">
                <img src="assets/images/shapes/more-services-two-shape.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <!--More Services Two Single-->
                        <div class="more-services-two__single">
                            <div class="more-services-two__img-box">
                                <div class="more-services-two__img">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->paralax_4;?>" alt="">
                                </div>
                                <div class="more-services-two__icon">
                                    <!--<span class="icon-house"></span>-->
                                </div>
                            </div>
                            <div class="more-services-two__content">
                                <p class="more-services-two__sub-title"><?php echo $sessao1->titulo6;?></p>
                                <h3 class="more-services-two__title"><?php echo $sessao1->link_botao_4;?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <!--More Services Two Single-->
                        <div class="more-services-two__single more-services-two__single-two">
                            <div class="more-services-two__img-box">
                                <div class="more-services-two__img">
                                    <img src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->foto_3;?>" alt="">
                                </div>
                                <div class="more-services-two__icon">
                                    <!--<span class="icon-apartment"></span>-->
                                </div>
                            </div>
                            <div class="more-services-two__content">
                                <p class="more-services-two__sub-title"><?php echo $sessao1->titulo3;?></p>
                                <h3 class="more-services-two__title"><?php echo $sessao1->descricao3;?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--More Services Two End-->

     
        <!--Counter One Start-->
        <section class="couonter-one" style="margin-top: 45px;">
            <div class="counter-one-bg" style="background-image: url(assets/images/backgrounds/counter-one-bg.jpg);">
            </div>
            <div class="container">
                <ul class="list-unstyled couonter-one__list clearfix">
                    <li class="couonter-one__single wow " data-wow-delay="100ms">
                        <div class="couonter-one__content-box">
                            <div class="couonter-one__icon-box">
                                <img class="icon-handshake" src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->foto_2;?>" alt="">
                                <!--<span class="icon-handshake"></span>-->
                            </div>
                            <div class="couonter-one__count-box">
                                <div class="couonter-one__count-box-inner">
                                    <p class="odometer" data-count="<?php echo $sessao1->titulo4;?>">00</p>
                                </div>
                                <p class="couonter-one__text"><?php echo $sessao1->titulo10_sessao1;?></p>
                            </div>
                        </div>
                    </li>
                    <li class="couonter-one__single wow " data-wow-delay="200ms">
                        <div class="couonter-one__content-box">
                            <div class="couonter-one__icon-box">
                                <img class="icon-good-review" src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->foto11_sessao1;?>" alt="">
                                <!--<span class="icon-good-review"></span>-->
                            </div>
                            <div class="couonter-one__count-box">
                                <div class="couonter-one__count-box-inner">
                                    <p class="odometer" data-count="<?php echo $sessao1->embed;?>">00</p>
                                </div>
                                <p class="couonter-one__text"><?php echo $sessao1->titulo11_sessao1;?></p>
                            </div>
                        </div>
                    </li>
                    <li class="couonter-one__single wow" data-wow-delay="300ms">
                        <div class="couonter-one__content-box">
                            <div class="couonter-one__icon-box">
                                <img class="icon-award" src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->paralax_5;?>" alt="">
                                <!--<span class="icon-award"></span>-->
                            </div>
                            <div class="couonter-one__count-box">
                                <div class="couonter-one__count-box-inner">
                                    <p class="odometer" data-count="<?php echo $sessao1->descricao4;?>">00</p>
                                </div>
                                <p class="couonter-one__text"><?php echo $sessao1->titulo12_sessao1;?></p>
                            </div>
                        </div>
                    </li>
                    <li class="couonter-one__single wow " data-wow-delay="400ms">
                        <div class="couonter-one__content-box">
                            <div class="couonter-one__icon-box">
                                <img class="icon-paint-palette" src="<?php echo SITE_URL;?>/img/<?php echo $sessao1->paralax_testemunho;?>" alt="">
                                <!--<span class="icon-paint-palette"></span>-->
                            </div>
                            <div class="couonter-one__count-box">
                                <div class="couonter-one__count-box-inner">
                                    <p class="odometer" data-count="<?php echo $sessao1->titulo9_sessao1;?>">00</p>
                                </div>
                                <p class="couonter-one__text"><?php echo $sessao1->texto_3;?></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!--Counter One End-->

        <!--Testimonial Two Start-->
       
        <!--Testimonial Two End-->

        <!--Contact One Start-->
        <section class="contact-one" style="padding-bottom: 160px;">
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline"><?php echo $sessao1->titulo13_sessao1;?></span>
                    <h2 class="section-title__title"><?php echo $sessao1->titulo14_sessao1;?></h2>
                    <div class="section-title__line"></div>
                </div>
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-one__left">
                            <form method="POST" class="contact-one__form">
                                <?php
                                    if (!empty($erros)) {
                                ?>
                                    <div class="alert alert-danger" role="alert">
                                        Seu contato não foi enviado:
                                        <ul class="mb-0">
                                          <?php
                                          foreach ($erros as $erro)
                                            echo '<li>' . htmlspecialchars($erro) . "</li>\n";
                                          ?>
                                        </ul>
                                    </div>
                                <?php }?>
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Nome" name="Nome">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="email" placeholder="Email" name="Email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Telefone" name="Telefone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="contact-one__form-input-box">
                                            <input type="text" placeholder="Assunto" name="Assunto">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-one__form-input-box text-message-box">
                                            <textarea name="Mensagem" placeholder="Mensagem"></textarea>
                                        </div>
                                        <!--<div class="contact-one__btn-box">-->
                                        <!--    <button type="submit" class="thm-btn contact-one__btn">< ?php echo $sessao1->titulo15_sessao1;?></button>-->
                                        <!--</div>-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-box col-md-12 col-lg-2" style="margin-top: 18px;">
                                    <div class="math">
                                        <p id="conta" style="color: #000;"><span id="valor1"></span> + <span id="valor2"></span> =</p>
                                    </div>
                                </div>
                                
                                <div class="form-box col-md-6 col-lg-10 comment-form__input-box" style="">
                                    <div class="math">
                                        <input class="form-control" id="totalvalores" type="text" name="totalvalores" placeholder="Total soma" required>
                                    </div>
                                </div>
                                </div>
                                <div class="form-box col-md-6 col-lg-12">
                                    <p id="aviso"></p>
                                </div>
                               <div class="col-xl-12" style="text-align: center;">
                                  <input type="submit" placeholder="Enviar" class="thm-btn comment-form__btn">
                            </div>
                                    <p class="form-message"></p>
                                    <input type="hidden" name="acaoEnvio1" value="Enviar">
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-one__right">
                            <div class="contact-one__right-shape-1"
                                style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $sessao1->foto_5;?>);">
                            </div>
                            <ul class="list-unstyled contact-one__info">
                                <li>
                                    <div class="contact-one__info-box">
                                        <p>Fale Conosco</p>
                                        <a href="tel:<?php echo $contatos->titulo5_sessao1;?>"><?php echo $contatos->titulo5_sessao1;?></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-one__info-box">
                                        <p>E-mail</p>
                                        <a href="mailto:<?php echo $infoSistema->email1;?>">Contato via E-mail</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-one__info-box">
                                        <p>Visite-nos</p>
                                        <a><?php echo $infoSistema->endereco;?></a> 
                                    </div>
                                </li>
                            </ul>
                            <div class="contact-page__social">
                                <?php if($infoSistema->twitter <> ''){?>
                                    <a href="<?php echo $infoSistema->twitter;?>"><i class="fab fa-twitter"></i></a>
                                <?php }?>
                                <?php if($infoSistema->facebook <> ''){?>
                                    <a href="<?php echo $infoSistema->facebook;?>"><i class="fab fa-facebook"></i></a>
                                <?php }?>
                                <?php if($infoSistema->pinterest <> ''){?>
                                    <a href="<?php echo $infoSistema->pinterest;?>"><i class="fab fa-pinterest-p"></i></a>
                                <?php }?>
                                 <?php if($infoSistema->instagram <> ''){?>
                                    <a href="<?php echo $infoSistema->instagram;?>"><i class="fab fa-instagram"></i></a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact One End-->

        
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
                    <a href="mailto:<?php echo $infoSistema->email1;?>">Contato via E-mail</a>
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

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
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


    <script>
        var valor1 = Math.floor((Math.random() * 10) + 1);
        var valor2 = Math.floor((Math.random() * 10) + 1);
        document.getElementById("valor1").innerHTML = valor1;
        document.getElementById("valor2").innerHTML = valor2;
        document.getElementById("enviar").setAttribute("disabled", "");
        document.getElementById('totalvalores').onchange = function() {
          validar()
        }
        function validar() {
          var totalvalores = document.getElementById("totalvalores").value;
          if (totalvalores == valor1 + valor2) {
            document.getElementById('aviso').innerHTML = "reCAPTCHA válido";
            document.getElementById("enviar").removeAttribute("disabled");
          } else {
            document.getElementById('aviso').innerHTML = "reCAPTCHA inválido";
            document.getElementById("enviar").setAttribute("disabled", "");
          }
        }
    </script>

    <!-- template js -->
    <script src="assets/js/ambed.js"></script>



</body>

</html>