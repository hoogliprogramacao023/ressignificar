<?php include "includes.php";
include "Class/banners.class.php";
include "Class/textos.class.php";
include "envia.php";
include "Class/blogs.class.php";
$blogs = Blogs::getInstance(Conexao::getInstance());
$puxaBlogs = $blogs->rsDados();

$textos = Textos::getInstance(Conexao::getInstance());
$banner = Banners::getInstance(Conexao::getInstance());

$sessao1 = $textos->rsDados(69);
$puxaBanners = $banner->rsDados(18);
$texto = $textos->rsDados(91);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php include "description.php";?>
    <?php include "inc-tagmanager-head.php";?>
</head>

<body >

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
                    <h1><?php echo $puxaBanners->titulo1;?></h1>
                </div>
            </div>
        </section>

        <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__left">
                            <div class="section-title">
                                <h2><span class="section-title__tagline"><?php echo $texto->titulo7_sessao1;?></span></h2>
                                <h3 class="section-title__title"><?php echo $texto->titulo8_sessao1;?></h3>
                                <div class="section-title__line"></div>
                            </div>
                            <div class="contact-page__form">
                                <form method="POST" class="comment-one__form " >
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
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Nome" name="Nome">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email" name="Email">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Telefone" name="Telefone">
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Assunto" name="Assunto">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="Mensagem" placeholder="Mensagem"></textarea>
                                            </div>
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
                                  <input id="enviar" type="submit" placeholder="Enviar" class="thm-btn comment-form__btn">
                                </div>
                                    <p class="form-message"></p>
                                    <input type="hidden" name="acaoEnvio1" value="Enviar">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__right">
                            <div class="contact-page__details">
                                <ul class="list-unstyled contact-page__details-list">
                                    <li>
                                        <span>Fale Conosco</span>
                                        <p><a href="tel:<?php echo $infoSistema->telefone1;?>"><?php echo $infoSistema->telefone1;?></a></p>
                                    </li>
                                    <li>
                                        <span>E-mail</span>
                                        <p><a href="mailto:<?php echo $infoSistema->email1;?>">Contato via e-mail</a></p>
                                    </li>
                                    <li>
                                        <span>Visite-nos</span>
                                        <p><?php echo $infoSistema->endereco;?></p>
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
            </div>
        </section>

        <section class="google-map-two">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14635.728773007064!2d-46.8536578!3d-23.4989517!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x370b6e5fbda2db99!2sShopping%20Flamingo!5e0!3m2!1spt-BR!2sbr!4v1667847787927!5m2!1spt-BR!2sbr" class="google-map__two-box" allowfullscreen></iframe>
        </section>

        <?php include "footer.php";?>

    </div>

    <?php include 'menu-mobile.php';?>


    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

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