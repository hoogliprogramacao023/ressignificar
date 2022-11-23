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

$puxaProdutos = $produtos->rsDados('','','','','','S', $id);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
   <?php include "description.php";?>
    <?php include "inc-tagmanager-head.php";?>
    <style>
        .services-one__single:hover .services-one__img:before, .services-one__single:hover .services-one__img:after {
            height: 0 !important;
        }
        .services-one__single:hover .services-one__content{
            box-shadow: none !important;
        }
        .services-one__single .services-one__content{
            height: 13em !important;
        }
        .services-one__img img{
            height: 100%;
        }
        .services-one__img{
            height: 250px; 
        }
        @media(min-width: 576px) and (max-width: 991px){
            .services-one__single .services-one__content{
                height: 15em !important;
            }
        }
    </style>
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
                        <li>Catálago</li>
                    </ul>
                    <h1><?php echo $descProcedimentos->sessao1_titulo;?></h1>
                </div>
            </div>
        </section>
        <!--Page Header End-->
<style>
.display_none {
  display: none
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

        <!--Project Details Start-->
        <section class="services-page">
            <div class="container">
                <div class="row">
                    <?php 
                   
                    
                    foreach($puxaProdutos as $prod){
                    
 
                    ?>

                    <div class="col-xl-4 col-lg-4 col-md-6" data-city="buda">
                        <!--Services One Single-->
                        <div class="services-one__single wow fadeInUp" data-wow-delay="100ms">
                            <div class="services-one__img">
                                <img src="<?php echo SITE_URL;?>/img/<?php echo $prod->imagem;?>" alt="">
                            </div>
                            <div class="services-one__content" <?php if($prod->id_categoria == 'corporativos'){?>style="height: 6em !important;"<?php }else{ ?> style="height: auto !important;" <?php } ?>>
                                <?php if($prod->nome <> ''){?>
                                <h3 class="services-one__title"><a ><?php echo $prod->nome;?></a></h3>
                                <?php } ?>
                                <?php 
                                if($prod->descricao <> ''){?> 
                               
                                <div class="outer">
                                  <p class="text_content_rating" id="<?php $prod->id ?>"><?php echo substr($prod->descricao, 0, 127); ?>
                                    <a class="text_load_more" style="color: #964833;">...Ler mais</a></p>
                                  <p class="text_content_rating_full display_none"><?php echo $prod->descricao; ?>
                                    <a class="text_hide" style="color: #964833;">Esconder</a></p>
                                </div>
                                              <script type="text/javascript">
                   
$(document).on('click', '.text_load_more ,.text_hide', function(e) {
  var selector = $(this).closest(".outer")
  //check if a has class
  if ($(this).hasClass("text_load_more")) {
    //remove class from full and add class to rating
    selector.find(".text_content_rating_full").removeClass("display_none");
    selector.find(".text_content_rating").addClass("display_none");

  } else {
    selector.find(".text_content_rating_full").addClass("display_none");
    selector.find(".text_content_rating").removeClass("display_none");
  }
});

                    </script>  
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                    
   
                    <?php } ?>
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