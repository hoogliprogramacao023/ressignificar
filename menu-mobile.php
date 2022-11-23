<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <div class="logo-box">
                <a href="<?php echo SITE_URL;?>" aria-label="logo image"><img src="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_rodape;?>"
                        width="155" alt="" /></a>
            </div>
            <div class="mobile-nav__container"></div>
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:<?php echo $infoSistema->email1;?>">Contato via e-mail</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:<?php echo $infoSistema->telefone1;?>"><?php echo $infoSistema->telefone1;?></a>
                </li>
            </ul>
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
            </div>
        </div>
    </div>
</div>