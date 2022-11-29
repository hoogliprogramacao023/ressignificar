<?php
    include "includes.php";
    include "Class/textos.class.php";
    include "Class/banners.class.php";
    include "Class/faqs.class.php";
    include "Class/blogs.class.php";
    $blogs = Blogs::getInstance(Conexao::getInstance());
    $puxaBlogs = $blogs->rsDados();
    
    $banner = Banners::getInstance(Conexao::getInstance());
    $textos = Textos::getInstance(Conexao::getInstance());
    $especialidades = Especialidades::getInstance(Conexao::getInstance());
    $servico = Servico::getInstance(Conexao::getInstance());
    $infoSistema = ConfigSistema::getInstance(Conexao::getInstance());
    $faqs = Faqs::getInstance(Conexao::getInstance());


    $descEspecialidade = $especialidades->rsDados();
    $puxaBanners = $banner->rsDados(26);
    $descServico = $servico->rsDados(1);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <title><?php if(isset($descServico->meta_title) && !empty($descServico->meta_title)){echo $descServico->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($descServico->meta_description) && !empty($descServico->meta_description)){echo $descServico->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($descServico->meta_keywords) && !empty($descServico->meta_keywords)){echo $descServico->meta_keywords;}?>">
	<meta name="twitter:card" content="<?php if(isset($descServico->meta_title) && !empty($descServico->meta_title)){echo $descServico->meta_title;}?>" />

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
                    <span><h2 style="color:#484848;"><?php echo $descServico->titulo;?></h2></span>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <section class="service-details wow slideInLeft animated" data-wow-delay="100ms" data-wow-duration="2500ms">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5">
                        <div class="service-details__left">
                            <div class="service-details__category">
                                <ul class="service-details__category-list list-unstyled nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link " data-toggle="tab" href="/servicos/<?php echo $descServico->servico1_link;?>" role="tab" aria-controls="<?php echo $descservico->id;?>" aria-selected="true">
                                        <?php echo $descServico->servico1;?><span class="fa fa-angle-right"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link ?>" data-toggle="tab" href="<?php echo $descServico->servico2_link;?>" role="tab" aria-controls="<?php echo $descservico->id;?>" aria-selected="true">
                                        <?php echo $descServico->servico2;?><span class="fa fa-angle-right"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($i == 0){?>active<?php } ?>" data-toggle="tab" href="<?php echo $descServico->servico3_link;?>" role="tab" aria-controls="<?php echo $descservico->id;?>" aria-selected="true">
                                        <?php echo $descServico->servico3;?><span class="fa fa-angle-right"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($i == 0){?>active<?php } ?>" data-toggle="tab" href="<?php echo $descServico->servico4_link;?>" role="tab" aria-controls="<?php echo $descservico->id;?>" aria-selected="true">
                                        <?php echo $descServico->servico4;?><span class="fa fa-angle-right"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php if($i == 0){?>active<?php } ?>" data-toggle="tab" href="<?php echo $descServico->servico5_link;?>" role="tab" aria-controls="<?php echo $descservico->id;?>" aria-selected="true">
                                        <?php echo $descServico->servico5;?><span class="fa fa-angle-right"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="service-details__need-help">
                            <div class="service-details__need-help-bg"
                                style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
                            </div>
                            <div class="service-details__need-help-icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <span><h2 class="service-details__need-help-title"><?php echo $descServico->cta_pergunta ?></h2></span>
                            <div class="service-details__need-help-contact">
                                <p><?php echo $descServico->cta_botao; ?></p>
                                <a href="tel:<?php echo $infoSistema->telefone1; ?>"> <?php echo $infoSistema->telefone1; ?></a>
                            </div>
                          
                        </div>
                     
                        <a href="<?php echo $descServico->link_botao; ?>" class="thm-btn service-details__download-btn"><?php echo $descServico->nome_botao; ?></a>
                 
                    </div>

                    <div class="col-xl-8 col-lg-7 tab-content" id="myTabContent">
                        <div class="service-details__right tab-pane fade <?php if($i == 0){?>show active<?php } ?>" id="<?php echo $especialidade->id;?>" role="tabpanel" aria-labelledby="<?php echo $especialidade->id;?>-tab">
                            <div class="service-details__content">
                                <div class="texto_secao1">
                                        <?php if(isset($descServico->foto) && $descServico->foto != '') { ?>
                                            <img src="<?php echo SITE_URL;?>/img/<?php echo $descServico->foto;?>" alt="">
                                        <?php } else {?>
                                            <img src="https://via.placeholder.com/770x445" class="img-fluid" alt="">
                                        <?php } ?>
                                    <h1><?php echo $descServico->titulo2;?></h1>
                                    <br>
                                    <?php echo $descServico->texto;?>
                                </div>
                                <div class="service-details__content">
                            
                            <ul class="servicos-list">
                                <li><?php echo $descServico->item1;?></li>
                                <li><?php echo $descServico->item2;?></li>
                                <li><?php echo $descServico->item3;?></li>
                                <li><?php echo $descServico->item4;?></li>
                                <li><?php echo $descServico->item5;?></li>
                                <li><?php echo $descServico->item6;?></li>
                                <li><?php echo $descServico->item7;?></li>
                                <li><a href="servicos/terapia-de-casal">teste</a></li>
                            </ul>
                                <div class="texto_secao1">
                                    <p><?php echo $descServico->texto2;?></p>
                                </div>
                           
                        </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </section>

        <section class="table_section wow fadeInUp" data-wow-delay="100ms">
            <div class="container">
                <div class="row table-row">
                    <div class="col-xl-4 col-lg-5 col-sm-12 cta-btn table-row">
                   
                    </div>


                    <div class="col-xl-8 col-lg-7 col-sm-12">
                            <div class="row">
                                <div class="service-details__points-two">
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-12">
                                            <div class="service-details__points-two-single">
                                                <div class="service-details__points-two-content">
                                                    <div class="service-details__points-two-icon">
                                                        <span class="icon-long-paper-roll"></span>
                                                    </div>
                                                    <h2><?php echo $descServico->titulo3; ?></h2>
                                                    <p><?php echo $descServico->texto4; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-12">
                                            <div class="service-details__points-two-single">
                                                <div class="service-details__points-two-content">
                                                    <div class="service-details__points-two-icon">
                                                        <span class="icon-wallpaper-8"></span>
                                                    </div>
                                                    <h2><?php echo $descServico->titulo4; ?></h2>
                                                    <p><?php echo $descServico->texto5; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-sm-12 cta-btn table-row"></div>

                    <div class="col-xl-8 col-lg-7 col-sm-12">
                        <div class="container">


                        <div class="service-details__benefits">
                                <div class="row">
                                    <div class="col-xl-6 col-sm-12">
                                        <div class="service-details__benefits-img">
                                            <img src="https://via.placeholder.com/150" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-sm-12">
                                        <div class="service-details__benefits-right">
                                            <h2 class="service-details__benefits-title"><?php echo $descServico->titulo5 ?></h2>
                                            <p class="service-betails__benefits-text-1"><?php echo $descServico->texto6 ?></p>
                                            <ul class="list-unstyled service-details__benefits-points">
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p><?php echo $descServico->item8 ?></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p><?php echo $descServico->item9 ?></p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="text">
                                                        <p><?php echo $descServico->item10 ?></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-5 texto-secao1"><p><?php echo $descServico->texto3;?></p></div>
                        </div>
                </div>
            </div>
        </section>

        <section class="wow fadeInUp" data-wow-delay="100ms">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-sm-12 cta-btn table-row"></div>

                    <div class="col-xl-8 col-lg-7 col-sm-12">
                        <div class="container">
                            <div class="row">
                                <div class="benefits-one__right">
                                <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                                    <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                        <div class="accrodion-title">
                                            <h3><?php echo $descServico->pergunta1;?></h3>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p><?php echo $descServico->resposta1;?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                        <div class="accrodion-title">
                                            <h3><?php echo $descServico->pergunta2;?></h3>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p><?php echo $descServico->resposta2;?></p>
                                            </div>
                                        </div>
                                    </div>     
                                    <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                        <div class="accrodion-title">
                                            <h3><?php echo $descServico->pergunta3;?></h3>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p><?php echo $descServico->resposta3;?></p>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="accrodion <?php if ($faqs == 0) { echo "active"; } ?>">
                                        <div class="accrodion-title">
                                            <h3><?php echo $descServico->pergunta4;?></h3>
                                        </div>
                                        <div class="accrodion-content">
                                            <div class="inner">
                                                <p><?php echo $descServico->resposta4;?></p>
                                            </div>
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

    <script src="<?php echo SITE_URL;?>/assets/js/ambed.js"></script>
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