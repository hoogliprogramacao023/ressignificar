<!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" /> -->
<link rel="stylesheet" href="<?php echo SITE_URL;?>/flutuante/flutuante.css" />
<script src="<?php echo SITE_URL;?>/flutuante/flutuante.js"></script>
<?php $hora_agora = date('H:i:s');
//echo $hora_agora;
?>
<?php if(isset($infoSistema->whatsapp_flutuante) && !empty($infoSistema->whatsapp_flutuante)){?>
<div>
    <a href="https://api.whatsapp.com/send?phone=55<?php echo $infoSistema->whatsapp_flutuante;?>" target="_blank"
        class="btn-floating-whats btn-large btn-success whatsapp">
        <!--<img class="whatsapp" src="<?php echo SITE_URL;?>/flutuante/whatsapp_button.png" alt="Whatsapp" width="57" />-->
        <i class="fab fa-whatsapp"></i>
    </a>
</div>
<?php }?>

<?php if(isset($infoSistema->telefone_flutuante) && !empty($infoSistema->telefone_flutuante)){?>
<div class="fixed-action-btn click-to-toggle ">
    <div class="hidden fixed-action-btn1" id="mostraLigue">
        <a href="tel:<?php echo str_replace(")", "", str_replace("(", "", $infoSistema->telefone_flutuante));?>"
            class="btn-floating1">
            <!-- <img  src="images/telephone1.png" width="300" /> -->
            <div class="telefone"><i class='fa fa-phone' ></i> <?php echo $infoSistema->telefone_flutuante;?><span>Ligue
                    Agora</span></div>
        </a>
    </div>
    <a href="javascript:;" onclick="mostra()" class="btn-floating btn-large btn-primary">
        <i class='fa fa-phone' ></i>
    </a>
</div>
<?php }?>

<?php if(isset($infoSistema->popup_ativo) && ($infoSistema->popup_ativo == 'Sim')){?>
<div id="popupModal" class="modal fade show" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" style="display: block">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="<?php echo SITE_URL; ?>/img/<?php echo $infoSistema->popup_imagem; ?>" height="300">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h4 class="title"><?php echo strip_tags($infoSistema->popup_titulo); ?></h4>
                        <p><?php echo strip_tags($infoSistema->popup_texto); ?></p>

                        <?php if($infoSistema->popup_temBotao == 'Sim') { ?>
                            <a href="<?php echo $infoSistema->popup_linkBotao; ?>" class="btn"><?php echo strip_tags($infoSistema->popup_textoBotao); ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<?php }?>