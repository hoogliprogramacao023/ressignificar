<?php

$footer = Footer::getInstance(Conexao::getInstance());
$puxaFooter = $footer->rsDados(1);
$puxaTexto = $textos->rsDados(50);
$infoSistema = ConfigSistema::getInstance(Conexao::getInstance());

?>

 <footer class="site-footer">
            <div class="site-footer-bg" style="background-image: none"></div>
            <div class="site-footer__top">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">Sobre</h3>
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text"><?php echo $infoSistema->texto_sobre;?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__explore clearfix">
                                <h3 class="footer-widget__title">Site Map</h3>
                                <ul class="footer-widget__explore-list list-unstyled clearfix">
                                    <li><a href="<?php echo SITE_URL;?>">Home</a></li>
                                    <li><a href="<?php echo SITE_URL;?>/sobre">Sobre</a></li>
                                    <li><a href="<?php echo SITE_URL;?>/site/lojas">Lojas</a></li>
                                    <li><a href="<?php echo SITE_URL;?>/eventos">Eventos</a></li>
                                    <li><a href="<?php echo SITE_URL;?>/contato">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                       
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact clearfix">
                                <h3 class="footer-widget__title">Localização</h3>
                                <ul class="footer-widget__contact-list list-unstyled clearfix">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-phone-call"></span>
                                        </div>
                                        <div class="text">
                                            <h4 style="color:#000;font-size: 15px;">Fale Conosco</h4>
                                            <p><a href="tel:<?php echo $infoSistema->telefone1;?>"><?php echo $infoSistema->telefone1;?></a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-message"></span>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:<?php echo $infoSistema->email1;?>">Contato via E-mail</a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-location"style="width: 86px;left: 5px;font-size: 30px;"></span>
                                        </div>
                                        <div class="text">
                                            
                                            <p><?php echo $infoSistema->endereco;?></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__services clearfix">
                                <h3 class="footer-widget__title">Redes Sociais</h3>
                                <div class="site-footer__social">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <?php include "copy.php";?>
            </div>
        </footer>