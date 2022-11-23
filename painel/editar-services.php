<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: services.php');
    }else{
        $id = $_GET['id'];
        
    }
}

$services->editar();
$editaServices = $services->rsDados($id);

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
    <title>Painel Hoogli - Editar Services</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Services</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Services</a></li>
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
                                    <h4 class="card-title">Seção 2</h4>  
                                
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaServices->titulo) && !empty($editaServices->titulo)){ echo $editaServices->titulo;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="subtitulo" value="<?php if(isset($editaServices->subtitulo) && !empty($editaServices->subtitulo)){ echo $editaServices->subtitulo;}?>" />
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 1</label>
                                                <input class="form-control" type="text" name="titulo1" value="<?php if(isset($editaServices->titulo1) && !empty($editaServices->titulo1)){ echo $editaServices->titulo1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo 1</label>
                                                <input class="form-control" type="text" name="subtitulo1" value="<?php if(isset($editaServices->subtitulo1) && !empty($editaServices->subtitulo1)){ echo $editaServices->subtitulo1;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 2</label>
                                                <input class="form-control" type="text" name="titulo2" value="<?php if(isset($editaServices->titulo2) && !empty($editaServices->titulo2)){ echo $editaServices->titulo2;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo 2</label>
                                                <input class="form-control" type="text" name="subtitulo2" value="<?php if(isset($editaServices->subtitulo2) && !empty($editaServices->subtitulo2)){ echo $editaServices->subtitulo2;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 3</label>
                                                <input class="form-control" type="text" name="titulo3" value="<?php if(isset($editaServices->titulo3) && !empty($editaServices->titulo3)){ echo $editaServices->titulo3;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo 3</label>
                                                <input class="form-control" type="text" name="subtitulo3" value="<?php if(isset($editaServices->subtitulo3) && !empty($editaServices->subtitulo3)){ echo $editaServices->subtitulo3;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 4</label>
                                                <input class="form-control" type="text" name="titulo4" value="<?php if(isset($editaServices->titulo4) && !empty($editaServices->titulo4)){ echo $editaServices->titulo4;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo 4</label>
                                                <input class="form-control" type="text" name="subtitulo4" value="<?php if(isset($editaServices->subtitulo4) && !empty($editaServices->subtitulo4)){ echo $editaServices->subtitulo4;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Texto</label>
                                                <textarea name="texto" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaServices->texto) && !empty($editaServices->texto)){ echo $editaServices->texto;}?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                <input class="form-control" type="text" name="nome_botao" value="<?php if(isset($editaServices->nome_botao) && !empty($editaServices->nome_botao)){ echo $editaServices->nome_botao;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao" value="<?php if(isset($editaServices->link_botao) && !empty($editaServices->link_botao)){ echo $editaServices->link_botao;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 5</label>
                                                <input class="form-control" type="text" name="titulo5" value="<?php if(isset($editaServices->titulo5) && !empty($editaServices->titulo5)){ echo $editaServices->titulo5;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo 5</label>
                                                <input class="form-control" type="text" name="subtitulo5" value="<?php if(isset($editaServices->subtitulo5) && !empty($editaServices->subtitulo5)){ echo $editaServices->subtitulo5;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 1</label>
                                                <input class="form-control" type="text" name="item1" value="<?php if(isset($editaServices->item1) && !empty($editaServices->item1)){ echo $editaServices->item1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Texto 1</label>
                                                <input class="form-control" type="text" name="texto1" value="<?php if(isset($editaServices->texto1) && !empty($editaServices->texto1)){ echo $editaServices->texto1;}?>" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 2</label>
                                                <input class="form-control" type="text" name="item2" value="<?php if(isset($editaServices->item2) && !empty($editaServices->item2)){ echo $editaServices->item2;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Texto 2</label>
                                                <input class="form-control" type="text" name="texto2" value="<?php if(isset($editaServices->texto2) && !empty($editaServices->texto2)){ echo $editaServices->texto2;}?>" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 3</label>
                                                <input class="form-control" type="text" name="item3" value="<?php if(isset($editaServices->item3) && !empty($editaServices->item3)){ echo $editaServices->item3;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Texto 3</label>
                                                <input class="form-control" type="text" name="texto3" value="<?php if(isset($editaServices->texto3) && !empty($editaServices->texto3)){ echo $editaServices->texto3;}?>" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaServices">
                                    <input type="hidden" name="id" value="<?php if(isset($editaServices->id) && !empty($editaServices->id)){ echo $editaServices->id;}?>">
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