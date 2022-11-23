<?php include "includes.php";
include "Class/procedimentos.class.php";
include "Class/textos.class.php";

$procedimentos = Procedimentos::getInstance(Conexao::getInstance());
$textos = Textos::getInstance(Conexao::getInstance());


$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: /');
    }else{
        $id = $_GET['id'];
    }
}else{
    header('Location: /');
}
$descProcedimentos = $procedimentos->rsDados('', '', '', '', '', $id);
$sessao1 = $textos->rsDados(69);
$puxaProcedimentos = $procedimentos->rsDados();

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
            <div class="page-header-bg" style="background-image: url(<?php echo SITE_URL;?>/img/<?php echo $descProcedimentos->sessao3_paralax;?>)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo SITE_URL;?>">Home</a></li>
                        <li><span>/</span></li>
                        <li>Projetos</li>
                    </ul>
                    <h1><?php echo $descProcedimentos->sessao1_titulo;?></h1>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Project Details Start-->
        <section class="project-details" style="margin-bottom: 200px;">
            <div class="container">
                <div class="project-details__img-box">
                    <div class="project-details__img"> 
                        <iframe src="https://www.google.com/maps/embed?pb=!4v1667861474730!6m8!1m7!1sCAoSLEFGMVFpcFB4VV9WY2xTc3J2QnlZalhESmREemdrVHViekxHTU5uZTJHcmhz!2m2!1d-15.81876621350975!2d-47.87474363255158!3f300!4f0!5f0.7820865974627469" width="900" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="project-details__details-box">
                        <ul class="list-unstyled project-details__details">
                            <li>
                                <div class="project-details__details-content">
                                    <span class="project-details__details-title"><?php echo $descProcedimentos->contato_titulo;?></span>
                                    <p class="project-details__details-name"><?php echo $descProcedimentos->contato_titulo2;?></p>
                                </div>
                            </li>
                            <li>
                                <div class="project-details__details-content">
                                    <span class="project-details__details-title"><?php echo $descProcedimentos->contato_texto;?></span>
                                    <p class="project-details__details-name"><?php echo $descProcedimentos->sessao4_titulo;?></p>
                                </div>
                            </li>
                            <li>
                                <div class="project-details__details-content">
                                    <span class="project-details__details-title"><?php echo $descProcedimentos->sessao4_titulo2;?></span>
                                    <p class="project-details__details-name"><?php echo $descProcedimentos->topico3_titulo;?></p>
                                </div>
                            </li>
                            <li>
                                <div class="project-details__details-content">
                                    <span
                                        class="project-details__details-title project-details__details-share"><?php echo $descProcedimentos->topico3_texto;?></span>
                                    <div class="project-details__social">
                                        <?php if($descProcedimentos->topico2_texto <> ""){?>
                                        <a href="<?php echo $descProcedimentos->topico2_texto;?>"><i class="fab fa-twitter"></i></a>
                                        <?php }?>
                                        <?php if($descProcedimentos->topico2_titulo <> ""){?>
                                        <a href="<?php echo $descProcedimentos->topico2_titulo;?>"><i class="fab fa-facebook"></i></a>
                                        <?php }?>
                                        <?php if($descProcedimentos->topico3_foto <> ""){?>
                                        <a href="<?php echo $descProcedimentos->topico3_foto;?>"><i class="fab fa-pinterest-p"></i></a>
                                        <?php }?>
                                         <?php if($descProcedimentos->topico2_foto <> ""){?>
                                        <a href="<?php echo $descProcedimentos->topico2_foto;?>"><i class="fab fa-instagram"></i></a>
                                        <?php }?>
                                        <?php if($descProcedimentos->topico1_texto <> ""){?>
                                        <p class="project-details__details-name"><?php echo $descProcedimentos->topico1_texto;?></p>
                                        <?php }?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="project-details__room-wallpapers">
                    <h2 class="project-details__room-wallpapers-title"><?php echo $descProcedimentos->sessao1_titulo;?></h2>
                    <p class="project-details__room-wallpapers-text"><?php echo $descProcedimentos->sessao1_texto;?></p>
                </div>

                <div class="project-details__result">
                    <h3 class="project-details__result-title"><?php echo $descProcedimentos->sessao3_titulo;?></h3>
                    <p class="project-details__result-text"><?php echo $descProcedimentos->sessao3_texto;?></p>
                </div>
                
            </div>
        </section>
        <!--Project Details End-->

      

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
    </div>

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
    <script src="<?php echo SITE_URL;?>/assets/js/ambed.js"></script>


</body>

</html>