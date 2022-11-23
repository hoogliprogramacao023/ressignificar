<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: atendimento.php');
    }else{
        $id = $_GET['id'];
        
    }
}

$atendimento->editar();
$editaAtendimento = $atendimento->rsDados($id);

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
    <title>Painel Hoogli - Editar Atendimento</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Atendimento</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Atendimento</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="atendimento.php" class="text-muted">atendimento</a></li>
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
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaAtendimento->titulo) && !empty($editaAtendimento->titulo)){ echo $editaAtendimento->titulo;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="subtitulo" value="<?php if(isset($editaAtendimento->subtitulo) && !empty($editaAtendimento->subtitulo)){ echo $editaAtendimento->subtitulo;}?>" />
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Texto</label>
                                                <textarea name="texto" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaAtendimento->texto) && !empty($editaAtendimento->texto)){ echo $editaAtendimento->texto;}?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 1</label>
                                                <input class="form-control" type="text" name="item1" value="<?php if(isset($editaAtendimento->item1) && !empty($editaAtendimento->item1)){ echo $editaAtendimento->item1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 2</label>
                                                <input class="form-control" type="text" name="item2" value="<?php if(isset($editaAtendimento->item2) && !empty($editaAtendimento->item2)){ echo $editaAtendimento->item2;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Pergunta 1</label>
                                                <input class="form-control" type="text" name="pergunta1" value="<?php if(isset($editaAtendimento->pergunta1) && !empty($editaAtendimento->pergunta1)){ echo $editaAtendimento->pergunta1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Resposta 1</label>
                                                <input class="form-control" type="text" name="resposta1" value="<?php if(isset($editaAtendimento->resposta1) && !empty($editaAtendimento->resposta1)){ echo $editaAtendimento->resposta1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Pergunta 2</label>
                                                <input class="form-control" type="text" name="pergunta2" value="<?php if(isset($editaAtendimento->pergunta2) && !empty($editaAtendimento->pergunta2)){ echo $editaAtendimento->pergunta2;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Resposta 2</label>
                                                <input class="form-control" type="text" name="resposta2" value="<?php if(isset($editaAtendimento->resposta2) && !empty($editaAtendimento->resposta2)){ echo $editaAtendimento->resposta2;}?>" />
                                            </div> 
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Pergunta 3</label>
                                                <input class="form-control" type="text" name="pergunta3" value="<?php if(isset($editaAtendimento->pergunta3) && !empty($editaAtendimento->pergunta3)){ echo $editaAtendimento->pergunta3;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Resposta 3</label>
                                                <input class="form-control" type="text" name="resposta3" value="<?php if(isset($editaAtendimento->resposta3) && !empty($editaAtendimento->resposta3)){ echo $editaAtendimento->resposta3;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Pergunta 4</label>
                                                <input class="form-control" type="text" name="pergunta4" value="<?php if(isset($editaAtendimento->pergunta4) && !empty($editaAtendimento->pergunta4)){ echo $editaAtendimento->pergunta4;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Resposta 4</label>
                                                <input class="form-control" type="text" name="resposta4" value="<?php if(isset($editaAtendimento->resposta4) && !empty($editaAtendimento->resposta4)){ echo $editaAtendimento->resposta4;}?>" />
                                            </div>
                                         </div>                        
                        

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 2</label>
                                                <input class="form-control" type="text" name="titulo2" value="<?php if(isset($editaAtendimento->titulo2) && !empty($editaAtendimento->titulo2)){ echo $editaAtendimento->titulo2;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo 2</label>
                                                <input class="form-control" type="text" name="subtitulo2" value="<?php if(isset($editaAtendimento->subtitulo2) && !empty($editaAtendimento->subtitulo2)){ echo $editaAtendimento->subtitulo2;}?>" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaAtendimento">
                                    <input type="hidden" name="id" value="<?php if(isset($editaAtendimento->id) && !empty($editaAtendimento->id)){ echo $editaAtendimento->id;}?>">
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