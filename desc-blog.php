<?php include "includes.php";
include "Class/textos.class.php";
include "Class/blogs.class.php";

$blog = Blogs::getInstance(Conexao::getInstance());
$descBlog = $blog->rsDados();
$textos = Textos::getInstance(Conexao::getInstance());

$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: '.SITE_URL);
    }else{
        $id = $_GET['id'];        
    }
}
$sessao1 = $textos->rsDados(69);
$descBlog    = $blog->rsDados('', '', '', '', '', $id);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
   <?php include "description.php";?>
   <?php include "inc-tagmanager-head.php";?>


</head>

<body >

    <!-- /.preloader -->
    <div class="page-wrapper">
        <?php include "header.php";?>
         <?php include "inc-tagmanager-body.php";?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        
        <!--Page Header End-->

        <!--Blog Details Start-->
        <section class="">
             <div class="blog-details__img">
                                <img src="<?php echo SITE_URL;?>/img/<?php echo $descBlog->imagem_desc;?>" alt="">
                            </div>
        </section>
        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-7 boseo-padding" >
                        <div class="blog-details__left boseo-bg-text">
                           
                            <div class="blog-details__content boseo-bg2-text">
                                <ul class="list-unstyled blog-details__meta">
                                    <li><a href="."> Home</a>
                                    </li>
                                    <li><span>/</span></li>
                                    <li><a href="<?php echo SITE_URL;?>/blogs"> Blog</a> 
                                    </li>
                                    <li><span>/</span></li>
                                    <li> <?php echo $descBlog->titulo;?></li>
                                </ul>
                                <h1 class="blog-details__title"><?php echo $descBlog->titulo;?></h1>
                                <ul class="list-unstyled blog-details__meta">
                                    <li><a href="."><i class="far fa-user-circle"></i> <?php echo $descBlog->postado_por;?></a>
                                    </li>
                                    <li><span>/</span></li>
                                    <li><i class="far fa-calendar"></i><?php echo formataDataDia($descBlog->data_postagem);?> <?php echo formataDataMes($descBlog->data_postagem);?>, <?php echo formataDataAno($descBlog->data_postagem);?></li>
                                </ul>
                            <div class="text-blog">
                                <p class="blog-details__text-1 "> <?php echo $descBlog->conteudo;?></p>
                                
                                 <?php if($descBlog->legenda_icon <> ""){?>
                                    <div class="cta-model mbt-blog">
                                       <div class="text-cta">
                                           <h3 class="blog-h3"><?php echo $descBlog->legenda_icon;?></h3>
                                              <a class="lgx-scroll btn lgx-btn" href="<?php echo $descBlog->link_botao;?>"><span><?php echo $descBlog->nome_botao;?></span></a>
                                       </div>
                                   </div>
                                   <?php }?>
                               
                        
                                <p class="blog-details__text-2 "><?php echo $descBlog->conteudo2;?></p>
                                
                               <?php if($descBlog->legenda_icon2 <> ""){?>
                                <div class="cta-model mbt-blog">
                                   <div class="text-cta">
                                       <h3 class="blog-h3"><?php echo $descBlog->legenda_icon2;?></h3>
                                       <a class="lgx-scroll btn lgx-btn" href="<?php echo $descBlog->link_botao2;?>"><span><?php echo $descBlog->nome_botao2;?></span></a>
                                   </div>
                                </div>
                                <?php }?>
                                   
                                    <p class="blog-details__text-2 text-blog"> <?php echo $descBlog->conteudo3;?></p>
                                 </div>
                            </div>
                            <div class="blog-details__bottom">
                                
                            </div>
                            
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>
        <!--Blog Details End-->



         <style>
            
            .text-blog ul li::marker {
            content: url(<?php echo SITE_URL;?>/img/check_2.png);
            display: inline-block;
            margin-top: 0.7em;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            color: #d8a870;
            margin-left: -21px;
        }
        blockquote:before {
            content: url(<?php echo SITE_URL;?>/img/quote_azul.png);
            float: left;   
            margin-right: 10px;
        }
        blockquote p{
            color: #0e0e0e;
            font-family: "Roboto", sans-serif;
            font-size: 20px;
            font-weight: 400;
            font-style: normal;
            line-height: 30px;
            padding-left: 78px;
        }
        blockquote {
        padding: 10px 20px;
        margin: 0 0 20px;
        font-size: 17.5px;
        border-left: 5px solid #eee;
        }
            
        </style>
         <!--Newsletter End-->

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