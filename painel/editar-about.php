<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: about.php');
    }else{
        $id = $_GET['id'];
        
    }
}

$about->editar();
$editaAbout = $about->rsDados(1);

?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Adriano Monteiro">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/hoogli_foto.svg">
    <title>Painel Hoogli - Editar Sobre</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar About</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">About</a></li>
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
                                    <h4 class="card-title">Sobre</h4>  

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Titulo</label>
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaAbout->titulo) && !empty($editaAbout->titulo)){ echo $editaAbout->titulo;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo</label>
                                                <input class="form-control" type="text" name="subtitulo" value="<?php if(isset($editaAbout->subtitulo) && !empty($editaAbout->subtitulo)){ echo $editaAbout->subtitulo;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo 2</label>
                                                <input class="form-control" type="text" name="subtitulo2" value="<?php if(isset($editaAbout->subtitulo2) && !empty($editaAbout->subtitulo2)){ echo $editaAbout->subtitulo2;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Texto</label>
                                                <textarea name="texto" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaAbout->texto) && !empty($editaAbout->texto)){ echo $editaAbout->texto;}?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md- col-sm-12">
                                                <label  class="col-form-label">Título 1</label>
                                                <input class="form-control" type="text" name="titulo1" value="<?php if(isset($editaAbout->titulo1) && !empty($editaAbout->titulo1)){ echo $editaAbout->titulo1;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Texto 1</label>
                                                <textarea name="texto1" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaAbout->texto1) && !empty($editaAbout->texto1)){ echo $editaAbout->texto1;}?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 2</label>
                                                <input class="form-control" type="text" name="titulo2" value="<?php if(isset($editaAbout->titulo2) && !empty($editaAbout->titulo2)){ echo $editaAbout->titulo2;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Texto 2</label>
                                                <textarea name="texto2" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaAbout->texto2) && !empty($editaAbout->texto2)){ echo $editaAbout->texto2;}?></textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Paralax 1</label>
                                                    <input type="file" name="paralax_1" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaAbout->paralax_1) && !empty($editaAbout->paralax_1)){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaAbout->paralax_1;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>           

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Paralax 2</label>
                                                    <input type="file" name="paralax_2" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaAbout->paralax_2) && !empty($editaAbout->paralax_2)){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaAbout->paralax_2;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>           

                                        <br>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem</label>
                                                    <input type="file" name="foto" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaAbout->foto) && !empty($editaAbout->foto)){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaAbout->foto;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 3</label>
                                                <input class="form-control" type="text" name="titulo3" value="<?php if(isset($editaAbout->titulo3) && !empty($editaAbout->titulo3)){ echo $editaAbout->titulo3;}?>" />
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 1</label>
                                                <input class="form-control" type="text" name="item1" value="<?php if(isset($editaAbout->item1) && !empty($editaAbout->item1)){ echo $editaAbout->item1;}?>" />
                                            </div>    
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 2</label>
                                                <input class="form-control" type="text" name="item2" value="<?php if(isset($editaAbout->item2) && !empty($editaAbout->item2)){ echo $editaAbout->item2;}?>" />
                                            </div> 
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 3</label>
                                                <input class="form-control" type="text" name="item3" value="<?php if(isset($editaAbout->item3) && !empty($editaAbout->item3)){ echo $editaAbout->item3;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Item 4</label>
                                                <input class="form-control" type="text" name="item4" value="<?php if(isset($editaAbout->item4) && !empty($editaAbout->item4)){ echo $editaAbout->item4;}?>" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Subtítulo 3</label>
                                                <input class="form-control" type="text" name="subtitulo3" value="<?php if(isset($editaAbout->subtitulo3) && !empty($editaAbout->subtitulo3)){ echo $editaAbout->subtitulo3;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 4</label>
                                                <input class="form-control" type="text" name="titulo4" value="<?php if(isset($editaAbout->titulo4) && !empty($editaAbout->titulo4)){ echo $editaAbout->titulo4;}?>" />
                                            </div>
                                        </div>
                                            
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <label  class="col-form-label">Texto 3</label>
                                                    <textarea name="texto3" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaAbout->texto3) && !empty($editaAbout->texto3)){ echo $editaAbout->texto3;}?></textarea>
                                                </div>
                                            </div>
                                            <br>
                                        
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <label  class="col-form-label">Título 5</label>
                                                    <input class="form-control" type="text" name="titulo5" value="<?php if(isset($editaAbout->titulo5) && !empty($editaAbout->titulo5)){ echo $editaAbout->titulo5;}?>" />
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <label  class="col-form-label">Texto 4</label>
                                                    <textarea name="texto4" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaAbout->texto4) && !empty($editaAbout->texto4)){ echo $editaAbout->texto4;}?></textarea>
                                                </div>
                                            </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Nome 1</label>
                                                <input class="form-control" type="text" name="nome1" value="<?php if(isset($editaAbout->nome1) && !empty($editaAbout->nome1)){ echo $editaAbout->nome1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Profissão 1</label>
                                                <input class="form-control" type="text" name="profissao1" value="<?php if(isset($editaAbout->profissao1) && !empty($editaAbout->profissao1)){ echo $editaAbout->profissao1;}?>" />
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem 1</label>
                                                    <input type="file" name="foto1" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaAbout->foto1) && !empty($editaAbout->foto1)){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaAbout->foto1;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Nome 2</label>
                                                <input class="form-control" type="text" name="nome2" value="<?php if(isset($editaAbout->nome2) && !empty($editaAbout->nome2)){ echo $editaAbout->nome2;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Profissão 2</label>
                                                <input class="form-control" type="text" name="profissao2" value="<?php if(isset($editaAbout->profissao2) && !empty($editaAbout->profissao2)){ echo $editaAbout->profissao2;}?>" />
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem 2</label>
                                                    <input type="file" name="foto2" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaAbout->foto2) && !empty($editaAbout->foto2)){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaAbout->foto2;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Nome 3</label>
                                                <input class="form-control" type="text" name="nome3" value="<?php if(isset($editaAbout->nome3) && !empty($editaAbout->nome3)){ echo $editaAbout->nome3;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Profissão 3</label>
                                                <input class="form-control" type="text" name="profissao3" value="<?php if(isset($editaAbout->profissao3) && !empty($editaAbout->profissao3)){ echo $editaAbout->profissao3;}?>" />
                                            </div>
                                        </div>
                                        <br>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem 3</label>
                                                    <input type="file" name="foto3" class="form-control" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaAbout->foto3) && !empty($editaAbout->foto3)){ ?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <img src="../img/<?php echo $editaAbout->foto3;?>"  width="100">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>             
                                    </div>

                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaAbout">
                                    <input type="hidden" name="id" value="<?php if(isset($editaAbout->id) && !empty($editaAbout->id)){ echo $editaAbout->id;}?>">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaAbout->foto) && !empty($editaAbout->foto)){ echo $editaAbout->foto;}?>">
                                    <input type="hidden" name="foto1_Atual" value="<?php if(isset($editaAbout->foto1) && !empty($editaAbout->foto1)){ echo $editaAbout->foto1;}?>">
                                    <input type="hidden" name="foto2_Atual" value="<?php if(isset($editaAbout->foto2) && !empty($editaAbout->foto2)){ echo $editaAbout->foto2;}?>">
                                    <input type="hidden" name="foto3_Atual" value="<?php if(isset($editaAbout->foto3) && !empty($editaAbout->foto3)){ echo $editaAbout->foto3;}?>">
                                    <input type="hidden" name="paralax_1_Atual" value="<?php if(isset($editaAbout->paralax_1) && !empty($editaAbout->paralax_1)){ echo $editaAbout->paralax_1;}?>">
                                    <input type="hidden" name="paralax_2_Atual" value="<?php if(isset($editaAbout->paralax_2) && !empty($editaAbout->paralax_2)){ echo $editaAbout->paralax_2;}?>">

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