<?php
    include "Class/categorias.class.php";
    $categorias= Categorias::getInstance(Conexao::getInstance());
    $puxaCategorias = $categorias->rsDados();



    $servicos = Servico::getInstance(Conexao::getInstance());
    $puxaServico = $servicos->rsDados();
?>
<?php  include "flutuante/flutuante.php";?>
<header class="main-header clearfix">
            <div class="main-header__top">
                <div class="container container-header mobile-container">
                    <div class="main-header__top-inner clearfix">
                        <div class="main-header__logo">
                            <a href="<?php echo SITE_URL;?>">
                                <img src="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" alt="" class="dark-logo">
                                <img src="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" alt="" class="light-logo">
                            </a>    
                        </div>
                        <div class="main-header__top-right">
                            <div class="main-header__top-right-content">
                                <div class="main-header__top-address-box">
                                    <ul class="list-unstyled main-header__top-address">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-phone-call"></span>
                                            </div>
                                             <div class="content">
                                             <a href="tel:<?php echo $infoSistema->telefone1;?>"><?php echo $infoSistema->telefone1;?></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-message"></span>
                                            </div>
                                            <div class="content">
                                               <a href="mailto:<?php echo $infoSistema->email1;?>">Contato via E-mail</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon icon--location">
                                                <span class="icon-location"></span>
                                            </div>
                                            <div class="content">
                                             <?php echo $infoSistema->endereco;?>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-header__top-right-social">
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
            <nav class="main-menu clearfix menu-web">
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix">
                            <div class="main-menu__left">
                                <div class="main-menu__main-menu-box">

                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">

                                        <li class=" <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo "current";}?>" >
                                            <a href="<?php echo SITE_URL;?>">Home</a>
                                        </li>

                                        <li class=" <?php if(basename($_SERVER['SCRIPT_NAME']) == 'sobre.php'){echo "current";}?>" >
                                            <a href="<?php echo SITE_URL;?>/sobre">Sobre</a>
                                        </li>

                                        <li class="dropdown <?php if(basename($_SERVER['SCRIPT_NAME']) == 'servicos.php'){echo "current";}?>">
                                            <a class="" href="/ressignificar/servicos">Serviços</a>
                                          <ul class="dropdown-menu">
                                              <?php foreach($puxaServico as $servico) { ?>
                                                <li><a class="dropdown-item" href="<?php echo SITE_URL ?>/servicos/<?php echo $servico->name_url; ?>"><?php echo $servico->titulo; ?></a></li>
                                            <?php }?>
                                          </ul>
                                        </li>

                                        <li class="dropdown <?php if(basename($_SERVER['SCRIPT_NAME']) == 'blog.php'){echo "current";}?>">
                                          <a class="" href="<?php echo SITE_URL;?>/blog" >
                                            Blog
                                          </a>
                                          <ul class="dropdown-menu">
                                              <?php foreach($puxaBlogs as $blog) { ?>
                                                <li><a class="dropdown-item" href="<?php echo SITE_URL ?>/blog/<?php echo $blog->titulo; ?>"><?php echo $blog->titulo; ?></a></li>
                                              <?php }?>
                                          </ul>
                                        </li>

                                        <li class=" <?php if(basename($_SERVER['SCRIPT_NAME']) == 'contato.php'){echo "current";}?>">
                                            <a href="<?php echo SITE_URL;?>/contato">Contato </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu__right">
                                                                    
                                <div class="main-menu__search-btn-box">
                                    <div class="main-menu__search-box">
                                       
                                    </div>
                                    <div class="main-menu__btn-box">
                                        <a href="<?php echo $infoSistema->whatsapp_flutuante;?>" class="thm-btn main-menu__btn">Pré Agendamento</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
             <nav class="main-menu clearfix mobile-menu">
                <div class="main-menu__wrapper clearfix">
                    <div class="">
                        <div class="main-menu__wrapper-inner clearfix">
                            <div class="main-menu__right">
                                <div class="main-menu__main-menu-box">

                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li class=" <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo "current";}?>" >
                                            <a href="<?php echo SITE_URL;?>">Home </a>
                                           
                                        </li>
                                        <li class=" <?php if(basename($_SERVER['SCRIPT_NAME']) == 'sobre.php'){echo "current";}?>" >
                                            <a href="<?php echo SITE_URL;?>/sobre">Sobre</a>
                                        </li>
                                         <li class="dropdown <?php if(basename($_SERVER['SCRIPT_NAME']) == 'projetos.php'){echo "current";}?>">
                                          <a class="nav-link" href="<?php echo SITE_URL;?>/lojas" >
                                            Lojas
                                          </a>
                                          <ul class="dropdown-menu">
                                              <?php foreach($puxaCategorias as $categoria) { ?>
                                            <li><a class="dropdown-item" href="<?php echo SITE_URL ?>/site/lojas/<?php echo $categoria->id; ?>"><?php echo $categoria->nome; ?></a></li>
                                            <?php }?>
                                          </ul>
                                        </li>
                                        <li class=" <?php if(basename($_SERVER['SCRIPT_NAME']) == 'desc-servico.php'){echo "current";}?>"><a href="<?php echo SITE_URL;?>/site/eventos">Eventos</a> 
                                        </li>
                                        <li class=" <?php if(basename($_SERVER['SCRIPT_NAME']) == 'contato.php'){echo "current";}?>"><a href="<?php echo SITE_URL;?>/contato">Contato </a>
                                        </li>
                                          
                                    </ul>
                                </div>
                            </div>
                            <div class="main-menu__left">
                            <div class="main-header__logo">
                            <a href="<?php echo SITE_URL;?>">
                                <img src="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" alt="" class="dark-logo">
                                <img src="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" alt="" class="light-logo">
                            </a>
                        </div>
                                <div class="main-menu__search-btn-box">
                                    <div class="main-menu__search-box">
                                       
                                    </div>
                                    <div class="main-menu__btn-box">
                                        <a href="<?php echo $infoSistema->whatsapp_flutuante;?>" class="thm-btn main-menu__btn">Traga sua Loja</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>