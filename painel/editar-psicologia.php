<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: psicologia.php');
    }else{
        $id = $_GET['id'];
        
    }
}

$psicologia->editar();
$editaPsicologia = $psicologia->rsDados(1);

?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Adriano Monteiro">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_logo.svg">
    <title>Painel Hoogli - Editar Psicologia</title>
    <link href="dist/css/style.min.css" rel="stylesheet">
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
       <?php include "header.php";?>
       <?php include "inc-menu-lateral.php";?>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Psicologia</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Psicologia</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="services.php" class="text-muted">services</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data"> 
                                    <!--PRIMEIRA SEÇÃO-->
                                    <h4 class="card-title">Seção 3</h4>  
                                
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaPsicologia->titulo) && !empty($editaPsicologia->titulo)){ echo $editaPsicologia->titulo;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 1</label>
                                                <input class="form-control" type="text" name="item1" value="<?php if(isset($editaPsicologia->item1) && !empty($editaPsicologia->item1)){ echo $editaPsicologia->item1;}?>" />
                                            </div>    
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 2</label>
                                                <input class="form-control" type="text" name="item2" value="<?php if(isset($editaPsicologia->item2) && !empty($editaPsicologia->item2)){ echo $editaPsicologia->item2;}?>" />
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 3</label>
                                                <input class="form-control" type="text" name="item3" value="<?php if(isset($editaPsicologia->item3) && !empty($editaPsicologia->item3)){ echo $editaPsicologia->item3;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 4</label>
                                                <input class="form-control" type="text" name="item4" value="<?php if(isset($editaPsicologia->item4) && !empty($editaPsicologia->item4)){ echo $editaPsicologia->item4;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="subtitulo" value="<?php if(isset($editaPsicologia->subtitulo) && !empty($editaPsicologia->subtitulo)){ echo $editaPsicologia->subtitulo;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 2</label>
                                                <input class="form-control" type="text" name="titulo2" value="<?php if(isset($editaPsicologia->titulo2) && !empty($editaPsicologia->titulo2)){ echo $editaPsicologia->titulo2;}?>" />
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Texto</label>
                                                <textarea name="texto" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaPsicologia->texto) && !empty($editaPsicologia->texto)){ echo $editaPsicologia->texto;}?></textarea>
                                            </div>
                                        </div>                  
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Titulo 3</label>
                                            <input class="form-control" type="text" name="titulo3" value="<?php if(isset($editaPsicologia->titulo3) && !empty($editaPsicologia->titulo3)){ echo $editaPsicologia->titulo3;}?>" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Nome Botão</label>
                                            <input class="form-control" type="text" name="nome_botao" value="<?php if(isset($editaPsicologia->nome_botao) && !empty($editaPsicologia->nome_botao)){ echo $editaPsicologia->nome_botao;}?>" />
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Link Botão</label>
                                            <input class="form-control" type="text" name="link_botao" value="<?php if(isset($editaPsicologia->link_botao) && !empty($editaPsicologia->link_botao)){ echo $editaPsicologia->link_botao;}?>" />
                                        </div>
                                    </div>

                                    <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem</label>
                                                    <input type="file" name="foto" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaPsicologia->foto) && !empty($editaPsicologia->foto)){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaPsicologia->foto;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>

                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaPsicologia">
                                    <input type="hidden" name="id" value="<?php if(isset($editaPsicologia->id) && !empty($editaPsicologia->id)){ echo $editaPsicologia->id;}?>">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaPsicologia->foto) && !empty($editaPsicologia->foto)){ echo $editaPsicologia->foto;}?>">
                                    <input type="hidden" name="pagina_individual" value="<?php if(isset($_GET['pi']) && $_GET['pi'] == 'S'){echo "S";}else{echo "N";}?>">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <?php include "footer.php";?>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="vendor/ckeditor/ckeditor.js"></script>
    <script>
        var KTInputmask = function () {

// Private functions
var demos = function () {
 
 // phone number format
 $("#kt_inputmask_3").inputmask("mask", {
  "mask": "(99) 99999-9999"
 });

 // empty placeholder
 $("#kt_inputmask_4").inputmask({
  "mask": "999.999.999-99"
 });

}

return {
 // public functions
 init: function() {
  demos();
 }
};
}();

jQuery(document).ready(function() {
KTInputmask.init();
});
    </script>
</body>
</html>