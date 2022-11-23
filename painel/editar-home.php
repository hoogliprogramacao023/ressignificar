<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: home.php');
    }else{
        $id = $_GET['id'];
        
    }
}

$home->editar();
$editaHome = $home->rsDados($id);

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
    <title>Painel Hoogli - Editar Home</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Home</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="home.php" class="text-muted">home</a></li>
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
                                    <h4 class="card-title">Seção 1</h4>  
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label class="mr-sm-2" for="">Banner</label>
                                                <input type="file" name="banner" class="form-control" >
                                            </div>
                                        </div>
                                        <?php if(isset($editaHome->banner) && !empty($editaHome->banner)){ ?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img src="../img/<?php echo $editaHome->banner;?>"  width="100">
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                    
                                    <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título</label>
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaHome->titulo) && !empty($editaHome->titulo)){ echo $editaHome->titulo;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="subtitulo" value="<?php if(isset($editaHome->subtitulo) && !empty($editaHome->subtitulo)){ echo $editaHome->subtitulo;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                <input class="form-control" type="text" name="nome_botao" value="<?php if(isset($editaHome->nome_botao) && !empty($editaHome->nome_botao)){ echo $editaHome->nome_botao;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao" value="<?php if(isset($editaHome->link_botao) && !empty($editaHome->link_botao)){ echo $editaHome->link_botao;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Tópico 1</label>
                                                <input class="form-control" type="text" name="topico1" value="<?php if(isset($editaHome->topico1) && !empty($editaHome->topico1)){ echo $editaHome->topico1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Tópico 2</label>
                                                <input class="form-control" type="text" name="topico2" value="<?php if(isset($editaHome->topico2) && !empty($editaHome->topico2)){ echo $editaHome->topico2;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Tópico 3</label>
                                                <input class="form-control" type="text" name="topico3" value="<?php if(isset($editaHome->topico3) && !empty($editaHome->topico3)){ echo $editaHome->topico3;}?>" />
                                            </div>
                                         </div>

                                        <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem 1</label>
                                                    <input type="file" name="imagem1" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaHome->imagem1) && !empty($editaHome->imagem1)){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaHome->imagem1;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        
                                        <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem 2</label>
                                                    <input type="file" name="imagem2" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaHome->imagem2) && !empty($editaHome->imagem2)){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaHome->imagem2;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Quantidade de Anos</label>
                                                <input class="form-control" type="text" name="qtd_anos" value="<?php if(isset($editaHome->qtd_anos) && !empty($editaHome->qtd_anos)){ echo $editaHome->qtd_anos;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Categoria Anos</label>
                                                <input class="form-control" type="text" name="cat_anos" value="<?php if(isset($editaHome->cat_anos) && !empty($editaHome->cat_anos)){ echo $editaHome->cat_anos;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo 1</label>
                                                <input class="form-control" type="text" name="subtitulo1" value="<?php if(isset($editaHome->subtitulo1) && !empty($editaHome->subtitulo1)){ echo $editaHome->subtitulo1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 1</label>
                                                <input class="form-control" type="text" name="titulo1" value="<?php if(isset($editaHome->titulo1) && !empty($editaHome->titulo1)){ echo $editaHome->titulo1;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Texto 1</label>
                                                <textarea name="texto1" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaHome->texto1) && !empty($editaHome->texto1)){ echo $editaHome->texto1;}?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 1</label>
                                                <input class="form-control" type="text" name="item1" value="<?php if(isset($editaHome->item1) && !empty($editaHome->item1)){ echo $editaHome->item1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 2</label>
                                                <input class="form-control" type="text" name="item2" value="<?php if(isset($editaHome->item2) && !empty($editaHome->item2)){ echo $editaHome->item2;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 3</label>
                                                <input class="form-control" type="text" name="item3" value="<?php if(isset($editaHome->item3) && !empty($editaHome->item3)){ echo $editaHome->item3;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 4</label>
                                                <input class="form-control" type="text" name="item4" value="<?php if(isset($editaHome->item4) && !empty($editaHome->item4)){ echo $editaHome->item4;}?>" />
                                            </div>
                                        </div>


                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaHome">
                                    <input type="hidden" name="id" value="<?php if(isset($editaHome->id) && !empty($editaHome->id)){ echo $editaHome->id;}?>">
                                    <input type="hidden" name="imagem1_Atual" value="<?php if(isset($editaHome->imagem1) && !empty($editaHome->imagem1)){ echo $editaHome->imagem1;}?>">
                                    <input type="hidden" name="imagem2_Atual" value="<?php if(isset($editaHome->imagem2) && !empty($editaHome->imagem2)){ echo $editaHome->imagem2;}?>">
                                    <input type="hidden" name="banner_Atual" value="<?php if(isset($editaHome->banner) && !empty($editaHome->banner)){ echo $editaHome->banner;}?>">
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