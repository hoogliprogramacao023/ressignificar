<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: textos.php');
    }else{
        $id = $_GET['id'];
        
    }
}
$textos->editar();
$editaTexto = $textos->rsDados($id);
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
    <title>Painel Hoogli - Editar Texto</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Texto</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="textos.php" class="text-muted">Textos</a></li>
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
                                    <?php if(isset($editaTexto->tem_paralax_1) && $editaTexto->tem_paralax_1 == 'S'){ ?>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Imagem 1</label>
                                                <input class="form-control" type="file" name="paralax_1"  />
                                            </div>
                                            <?php if(isset($editaTexto->paralax_1) && !empty($editaTexto->paralax_1)){ ?>
                                            <div class="col-md-4 col-sm-12">
                                                <img src="../img/<?php echo $editaTexto->paralax_1;?>" width="100">
                                            </div>
                                            <?php }}?>
                                    <?php if(isset($editaTexto->tem_titulo) && $editaTexto->tem_titulo == 'S'){ ?>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Título 1</label>
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaTexto->titulo) && !empty($editaTexto->titulo)){ echo $editaTexto->titulo;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label"> Link Titulo 1</label>
                                                <input class="form-control" type="text" name="titulo4_sessao1" value="<?php if(isset($editaTexto->titulo4_sessao1) && !empty($editaTexto->titulo4_sessao1)){ echo $editaTexto->titulo4_sessao1;}?>" />
                                            </div>
                                        </div>
                                    <?php }?>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label  class="col-form-label">Imagem 2</label>
                                            <input class="form-control" type="file" name="titulo18_sessao1"  />
                                        </div>
                                    <?php if(isset($editaTexto->titulo18_sessao1) && !empty($editaTexto->titulo18_sessao1)){ ?>
                                        <div class="col-md-4 col-sm-12">
                                             <img src="../img/<?php echo $editaTexto->titulo18_sessao1;?>" width="100">
                                        </div>
                                    <?php }?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Titulo 2</label>
                                            <input class="form-control" type="text" name="descricao" value="<?php if(isset($editaTexto->descricao) && !empty($editaTexto->descricao)){ echo $editaTexto->descricao;}?>" />
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label"> Link Titulo 2</label>
                                                <input class="form-control" type="text" name="titulo5_sessao1" value="<?php if(isset($editaTexto->titulo5_sessao1) && !empty($editaTexto->titulo5_sessao1)){ echo $editaTexto->titulo5_sessao1;}?>" />
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label  class="col-form-label">Imagem 3</label>
                                            <input class="form-control" type="file" name="foto_7" />
                                        </div>
                                    <?php if(isset($editaTexto->foto_7) && !empty($editaTexto->foto_7)){ ?>
                                        <div class="col-md-4 col-sm-12">
                                            <img src="../img/<?php echo $editaTexto->foto_7;?>" width="100">
                                        </div>
                                    <?php }?>
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Título 3</label>
                                            <input class="form-control" type="text" name="titulo8" value="<?php if(isset($editaTexto->titulo8) && !empty($editaTexto->titulo8)){ echo $editaTexto->titulo8;}?>" />
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Link Título 3</label>
                                                <input class="form-control" type="text" name="link_botao_1" value="<?php if(isset($editaTexto->link_botao_1) && !empty($editaTexto->link_botao_1)){ echo $editaTexto->link_botao_1;}?>" />
                                        </div>
                                    </div>
                                    <!--FIM DA PRIMEIRA SEÇÃO-->   
                                    <br>
                                    <hr>
                                    <!--SEGUNDA SEÇÃO-->   
                                    <h4 class="card-title">Seção 2</h4>
                                    <div class="row">
                                    <?php if(isset($editaTexto->tem_paralax_2) && $editaTexto->tem_paralax_2 == 'S'){ ?>
                                        <div class="col-md-4 col-sm-12">
                                            <label  class="col-form-label">Imagem 1</label>
                                            <input class="form-control" type="file" name="paralax_2"  />
                                        </div>
                                    <?php if(isset($editaTexto->paralax_2) && !empty($editaTexto->paralax_2)){ ?>
                                        <div class="col-md-4 col-sm-12">
                                            <img src="../img/<?php echo $editaTexto->paralax_2;?>" width="100">
                                        </div>
                                    <?php }}?>
                                    </div>
                                    <br>
                                    <div class="row">
                                    <?php if(isset($editaTexto->tem_foto_6) && $editaTexto->tem_foto_6 == 'S'){ ?>
                                        <div class="col-md-4 col-sm-12">
                                            <label  class="col-form-label">Imagem 2</label>
                                            <input class="form-control" type="file" name="foto_6"  />
                                        </div>
                                    <?php if(isset($editaTexto->foto_6) && !empty($editaTexto->foto_6)){ ?>
                                        <div class="col-md-4 col-sm-12">
                                            <img src="../img/<?php echo $editaTexto->foto_6;?>" width="100">
                                        </div>
                                    <?php }}?>
                                    </div>
                                    <br> 
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label  class="col-form-label">Imagem 3 (dots)</label>
                                                <input class="form-control" type="file" name="paralax_8"  />
                                        </div>
                                    <?php if(isset($editaTexto->paralax_8) && !empty($editaTexto->paralax_8)){ ?>
                                        <div class="col-md-1 col-sm-12">
                                          <img src="../img/<?php echo $editaTexto->paralax_8;?>" width="100">
                                        </div>
                                    <?php }?>
                                    </div>
                                    <div class="row">
                                    <?php if(isset($editaTexto->tem_titulo6_sessao1) && $editaTexto->tem_titulo6_sessao1 == 'S'){ ?>
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Título 1 (Números) </label>
                                                <input class="form-control" type="text" name="titulo6_sessao1" value="<?php if(isset($editaTexto->titulo6_sessao1) && !empty($editaTexto->titulo6_sessao1)){ echo $editaTexto->titulo6_sessao1;}?>" />
                                        </div>
                                    <?php }?>
                                    <div class="col-md-6 col-sm-12">
                                         <label  class="col-form-label">Titulo 2</label>
                                            <input class="form-control" type="text" name="titulo_img" value="<?php if(isset($editaTexto->titulo_img) && !empty($editaTexto->titulo_img)){ echo $editaTexto->titulo_img;}?>" />
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <h4 class="card-title">Textos ao lado das Imagens</h4>
                                     <div class="row">
                                        <div class="col-md-5 col-sm-12">
                                            <label  class="col-form-label">Titulo 1</label>
                                            <input class="form-control" type="text" name="titulo7_sessao1" value="<?php if(isset($editaTexto->titulo7_sessao1) && !empty($editaTexto->titulo7_sessao1)){ echo $editaTexto->titulo7_sessao1;}?>" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12">
                                            <label  class="col-form-label">Titulo 2</label>
                                            <input class="form-control" type="text" name="titulo8_sessao1" value="<?php if(isset($editaTexto->titulo8_sessao1) && !empty($editaTexto->titulo8_sessao1)){ echo $editaTexto->titulo8_sessao1;}?>" />
                                        </div>
                                    </div>
                                    <?php if(isset($editaTexto->tem_texto) && $editaTexto->tem_texto == 'S'){ ?>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                            <label  class="col-form-label">Texto</label>
                                            <textarea name="texto" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->texto) && !empty($editaTexto->texto)){ echo $editaTexto->texto;}?></textarea>
                                            </div>
                                        </div>
                                    <?php }?>
                                     <?php if(isset($editaTexto->tem_breve_sobre) && $editaTexto->tem_breve_sobre == 'S'){ ?>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                            <label  class="col-form-label">List com Bullets </label>
                                            <textarea name="breve_sobre" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve_sobre) && !empty($editaTexto->breve_sobre)){ echo $editaTexto->breve_sobre;}?></textarea>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <!--FIM DA SEGUNDA SEÇÃO-->
                                    <br>
                                    <hr>
                                    <!--TERCEIRA SEÇÃO IMAGENS-->
                                     <h4 class="card-title">Seção 3, Imagens grandes com transição</h4>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Imagem 1</label>
                                                    <input class="form-control" type="file" name="foto_8"  />
                                            </div>
                                        <?php if(isset($editaTexto->foto_8) && !empty($editaTexto->foto_8)){ ?>
                                            <div class="col-md-1 col-sm-12">
                                                <img src="../img/<?php echo $editaTexto->foto_8;?>" width="100">
                                            </div>
                                        <?php }?>
                                         <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Imagem 2</label>
                                                <input class="form-control" type="file" name="foto10_sessao1"  />
                                            </div>
                                        <?php if(isset($editaTexto->foto10_sessao1) && !empty($editaTexto->foto10_sessao1)){ ?>
                                                <div class="col-md-1 col-sm-12">
                                                    <img src="../img/<?php echo $editaTexto->foto10_sessao1;?>" width="100">
                                                </div>
                                        <?php }?>
                                        </div>  
                                        <br>
                                        <div class="row">
                                         <?php if(isset($editaTexto->tem_foto) && $editaTexto->tem_foto == 'S'){ ?>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Imagem 3</label>
                                                <input class="form-control" type="file" name="foto"  />
                                            </div>
                                        <?php if(isset($editaTexto->foto) && !empty($editaTexto->foto)){ ?>
                                            <div class="col-md-1 col-sm-12">
                                                <img src="../img/<?php echo $editaTexto->foto;?>" width="100">
                                            </div>
                                        <?php }}?>
                                        <?php if(isset($editaTexto->tem_foto_4) && $editaTexto->tem_foto_4 == 'S'){ ?>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Imagem 4</label>
                                                <input class="form-control" type="file" name="foto_4"  />
                                            </div>
                                        <?php if(isset($editaTexto->foto_4) && !empty($editaTexto->foto_4)){ ?>
                                            <div class="col-md-1 col-sm-12">
                                                <img src="../img/<?php echo $editaTexto->foto_4;?>" width="100">
                                            </div>
                                        <?php }}?>
                                        </div>
                                         <?php if(isset($editaTexto->tem_titulo_2) && $editaTexto->tem_titulo_2 == 'S'){ ?>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label"><?php if(isset($editaTexto->nome_titulo2) && !empty($editaTexto->nome_titulo2)){ echo $editaTexto->nome_titulo2;}else{echo "Título Incial da Seção 3";}?></label>
                                                    <input class="form-control" type="text" name="titulo2" value="<?php if(isset($editaTexto->titulo2) && !empty($editaTexto->titulo2)){ echo $editaTexto->titulo2;}?>" />
                                            </div>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <hr>
                                        <!--TERCEIRA SEÇÃO TEXTOS-->
                                        <h4 class="card-title">Seção 3, Box de Textos</h4>
                                        <h4 class="card-title">Box 1</h4>
                                         <div class="row">
                                             <div class="col-md-7 col-sm-12">
                                                    <label  class="col-form-label">Titulo 1 </label>
                                                    <input class="form-control" type="text" name="titulo22_sessao1" value="<?php if(isset($editaTexto->titulo22_sessao1) && !empty($editaTexto->titulo22_sessao1)){ echo $editaTexto->titulo22_sessao1;}?>" />
                                            </div>
                                             <div class="col-md-7 col-sm-12">
                                                    <label  class="col-form-label">Titulo 2 </label>
                                                    <input class="form-control" type="text" name="titulo23_sessao1" value="<?php if(isset($editaTexto->titulo23_sessao1) && !empty($editaTexto->titulo23_sessao1)){ echo $editaTexto->titulo23_sessao1;}?>" />
                                                </div>
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Breve 1</label>
                                             <textarea name="breve_sobre2" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->breve_sobre2) && !empty($editaTexto->breve_sobre2)){ echo $editaTexto->breve_sobre2;}?></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Nome Botão 1 </label>
                                                <input class="form-control" type="text" name="nome_botao_8" value="<?php if(isset($editaTexto->nome_botao_8) && !empty($editaTexto->nome_botao_8)){ echo $editaTexto->nome_botao_8;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão 1 </label>
                                                <input class="form-control" type="text" name="link_botao_8" value="<?php if(isset($editaTexto->link_botao_8) && !empty($editaTexto->link_botao_8)){ echo $editaTexto->link_botao_8;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Box 2</h4>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título 1 </label>
                                                    <input class="form-control" type="text" name="titulo25_sessao1" value="<?php if(isset($editaTexto->titulo25_sessao1) && !empty($editaTexto->titulo25_sessao1)){ echo $editaTexto->titulo25_sessao1;}?>" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título 2 </label>
                                                <input class="form-control" type="text" name="nome_botao_6" value="<?php if(isset($editaTexto->nome_botao_6) && !empty($editaTexto->nome_botao_6)){ echo $editaTexto->nome_botao_6;}?>" />
                                            </div>
                                        </div>
                                            <?php if(isset($editaTexto->tem_texto_2) && $editaTexto->tem_texto_2 == 'S'){ ?>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Breve</label>
                                                <textarea name="texto_2" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->texto_2) && !empty($editaTexto->texto_2)){ echo $editaTexto->texto_2;}?></textarea>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <?php if(isset($editaTexto->tem_botao_1) && $editaTexto->tem_botao_1 == 'S'){ ?>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Nome Botão 2</label>
                                                <input class="form-control" type="text" name="nome_botao_1" value="<?php if(isset($editaTexto->nome_botao_1) && !empty($editaTexto->nome_botao_1)){ echo $editaTexto->nome_botao_1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Link Botão 2</label>
                                                <input class="form-control" type="text" name="nome_botao_5" value="<?php if(isset($editaTexto->nome_botao_5) && !empty($editaTexto->nome_botao_5)){ echo $editaTexto->nome_botao_5;}?>" />
                                            </div>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Box 3</h4>
                                        <div class="row">
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Titulo 1</label>
                                                <input class="form-control" type="text" name="titulo24_sessao1" value="<?php if(isset($editaTexto->titulo24_sessao1) && !empty($editaTexto->titulo24_sessao1)){ echo $editaTexto->titulo24_sessao1;}?>" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label"><?php if(isset($editaTexto->nome_titulo7) && !empty($editaTexto->nome_titulo7)){ echo $editaTexto->nome_titulo7;}else{echo "Titulo 2 ";}?></label>
                                                <input class="form-control" type="text" name="titulo7" value="<?php if(isset($editaTexto->titulo7) && !empty($editaTexto->titulo7)){ echo $editaTexto->titulo7;}?>" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Breve</label>
                                                <textarea name="descricao2" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->descricao2) && !empty($editaTexto->descricao2)){ echo $editaTexto->descricao2;}?></textarea>
                                            </div>
                                        </div>
                                         <div class="row">
                                             <div class="col-md-4 col-sm-12">
                                                    <label  class="col-form-label">Nome Botão</label>
                                                    <input class="form-control" type="text" name="nome_botao_4" value="<?php if(isset($editaTexto->nome_botao_4) && !empty($editaTexto->nome_botao_4)){ echo $editaTexto->nome_botao_4;}?>" />
                                                </div> 
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao_5" value="<?php if(isset($editaTexto->link_botao_5) && !empty($editaTexto->link_botao_5)){ echo $editaTexto->link_botao_5;}?>" />
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Box 4</h4>
                                        <div class="row">
                                        <?php if(isset($editaTexto->tem_titulo_6) && $editaTexto->tem_titulo_6 == 'S'){ ?>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Titulo 1</label>
                                                <input class="form-control" type="text" name="titulo6" value="<?php if(isset($editaTexto->titulo6) && !empty($editaTexto->titulo6)){ echo $editaTexto->titulo6;}?>" />
                                            </div>
                                        <?php }?>
                                        <?php if(isset($editaTexto->tem_botao_4) && $editaTexto->tem_botao_4 == 'S'){ ?>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Titulo 2</label>
                                                <input class="form-control" type="text" name="link_botao_4" value="<?php if(isset($editaTexto->link_botao_4) && !empty($editaTexto->link_botao_4)){ echo $editaTexto->link_botao_4;}?>" />
                                            </div>
                                        <?php }?>
                                        </div>
                                        <?php if(isset($editaTexto->tem_texto_6) && $editaTexto->tem_texto_6 == 'S'){ ?>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Breve</label>
                                                <textarea name="texto_6" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->texto_6) && !empty($editaTexto->texto_6)){ echo $editaTexto->texto_6;}?></textarea>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <div class="row">
                                             <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                <input class="form-control" type="text" name="titulo15_sessao1" value="<?php if(isset($editaTexto->titulo15_sessao1) && !empty($editaTexto->titulo15_sessao1)){ echo $editaTexto->titulo15_sessao1;}?>" />
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                <input class="form-control" type="text" name="link_botao_6" value="<?php if(isset($editaTexto->link_botao_6) && !empty($editaTexto->link_botao_6)){ echo $editaTexto->link_botao_6;}?>" />
                                            </div>
                                        </div>
                                        <!--FIM DA TERCEIRA SEÇÃO-->
                                        <br>
                                        <hr>
                                        <!--QUARTA SEÇÃO-->
                                        <h4 class="card-title">Seção 4</h4>
                                        <div class="row">
                                        <?php if(isset($editaTexto->tem_titulo_3) && $editaTexto->tem_titulo_3 == 'S'){ ?>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título 1</label>
                                                <input class="form-control" type="text" name="titulo3" value="<?php if(isset($editaTexto->titulo3) && !empty($editaTexto->titulo3)){ echo $editaTexto->titulo3;}?>" />
                                            </div>
                                        <?php }?>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Titulo 2</label>
                                                <input class="form-control" type="text" name="descricao3" value="<?php if(isset($editaTexto->descricao3) && !empty($editaTexto->descricao3)){ echo $editaTexto->descricao3;}?>" />
                                            </div>
                                        </div>
                                        <?php if(isset($editaTexto->tem_texto_4) && $editaTexto->tem_texto_4 == 'S'){ ?>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label  class="col-form-label">Breve</label>
                                                <textarea name="texto_4" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->texto_4) && !empty($editaTexto->texto_4)){ echo $editaTexto->texto_4;}?></textarea>
                                            </div>
                                        </div>
                                        <?php }?>
                                        <br>
                                        <div class="row">
                                        <?php if(isset($editaTexto->tem_paralax_6) && $editaTexto->tem_paralax_6 == 'S'){ ?>
                                            <div class="col-md-5 col-sm-12">
                                                <label  class="col-form-label">Imagem 1</label>
                                                <input class="form-control" type="file" name="paralax_6"  />
                                            </div>
                                        <?php if(isset($editaTexto->paralax_6) && !empty($editaTexto->paralax_6)){ ?>
                                            <div class="col-md-1 col-sm-12">
                                                <img src="../img/<?php echo $editaTexto->paralax_6;?>" width="100">
                                            </div>
                                        <?php }}?>
                                        <?php if(isset($editaTexto->tem_paralax_3) && $editaTexto->tem_paralax_3 == 'S'){ ?>
                                            <div class="col-md-5 col-sm-12">
                                                <label  class="col-form-label">Imagem 2</label>
                                                <input class="form-control" type="file" name="paralax_3"  />
                                            </div>
                                        <?php if(isset($editaTexto->paralax_3) && !empty($editaTexto->paralax_3)){ ?>
                                            <div class="col-md-1 col-sm-12">
                                                <img src="../img/<?php echo $editaTexto->paralax_3;?>" width="100">
                                            </div>
                                        <?php }}?>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-5 col-sm-12">
                                                <label  class="col-form-label">Título Imagem 1</label>
                                                <input class="form-control" type="text" name="titulo10_sessao1" value="<?php if(isset($editaTexto->titulo10_sessao1) && !empty($editaTexto->titulo10_sessao1)){ echo $editaTexto->titulo10_sessao1;}?>" />
                                            </div>
                                        <?php if(isset($editaTexto->tem_titulo_4) && $editaTexto->tem_titulo_4 == 'S'){ ?>
                                            <div class="col-md-5 col-sm-12">
                                                <label  class="col-form-label"><?php if(isset($editaTexto->nome_titulo4) && !empty($editaTexto->nome_titulo4)){ echo $editaTexto->nome_titulo4;}else{echo "Título Imagem 2";}?></label>
                                                <input class="form-control" type="text" name="titulo4" value="<?php if(isset($editaTexto->titulo4) && !empty($editaTexto->titulo4)){ echo $editaTexto->titulo4;}?>" />
                                            </div>
                                        <?php }?>
                                        </div>
                                        <!--FIM DA QUARTA SEÇÃO-->
                                        <br>
                                        <hr>
                                        <!--QUINTA SEÇÃO-->
                                        <h4 class="card-title">Seção 5, Serviços</h4>
                                        <div class="row">
                                        <?php if(isset($editaTexto->tem_texto_3) && $editaTexto->tem_texto_3 == 'S'){ ?>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Título 1</label>
                                                <input type="text" name="texto_3" class="form-control" value="<?php if(isset($editaTexto->texto_3) && !empty($editaTexto->texto_3)){ echo $editaTexto->texto_3;}?>" />
                                            </div>
                                        <?php }?>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título 2</label>
                                                <input class="form-control" type="text" name="titulo11_sessao1" value="<?php if(isset($editaTexto->titulo11_sessao1) && !empty($editaTexto->titulo11_sessao1)){ echo $editaTexto->titulo11_sessao1;}?>" />
                                            </div>
                                        </div>
                                        <!--FIM DA QUINTA SEÇÃO-->
                                        <br>
                                        <hr>
                                        <!--SEXTA SEÇÃO-->
                                         <h4 class="card-title">Seção 6, CTA</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Breve</label>
                                                    <input class="form-control" type="text" name="titulo12_sessao1" value="<?php if(isset($editaTexto->titulo12_sessao1) && !empty($editaTexto->titulo12_sessao1)){ echo $editaTexto->titulo12_sessao1;}?>" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Nome Botão</label>
                                                    <input class="form-control" type="text" name="descricao4" value="<?php if(isset($editaTexto->descricao4) && !empty($editaTexto->descricao4)){ echo $editaTexto->descricao4;}?>" />
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label  class="col-form-label">Link Botão</label>
                                                    <input class="form-control" type="text" name="titulo16_sessao1" value="<?php if(isset($editaTexto->titulo16_sessao1) && !empty($editaTexto->titulo16_sessao1)){ echo $editaTexto->titulo16_sessao1;}?>" />
                                            </div>
                                        </div>
                                        <!--FIM DA SEXTA SEÇÃO-->
                                        <br>
                                        <hr>
                                         <!--SÉTIMA SEÇÃO-->
                                          <h4 class="card-title">Seção 7, Cards Abaixo dos Serviços</h4>
                                         <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Titulo 1</label>
                                                <input class="form-control" type="text" name="titulo13_sessao1" value="<?php if(isset($editaTexto->titulo13_sessao1) && !empty($editaTexto->titulo13_sessao1)){ echo $editaTexto->titulo13_sessao1;}?>" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label">Titulo 2</label>
                                                <input class="form-control" type="text" name="titulo14_sessao1" value="<?php if(isset($editaTexto->titulo14_sessao1) && !empty($editaTexto->titulo14_sessao1)){ echo $editaTexto->titulo14_sessao1;}?>" />
                                            </div>
                                        </div>
                                        <!--FIM DA SÉTIMA SEÇÃO-->
                                        <br>
                                        <hr>
                                         <!--OITAVA SEÇÃO-->
                                         <h4 class="card-title">Seção 8, Vídeo</h4>
                                            <div class="row">
                                            <?php if(isset($editaTexto->tem_paralax_7) && $editaTexto->tem_paralax_7 == 'S'){ ?>
                                                <div class="col-md-4 col-sm-12">
                                                    <label  class="col-form-label">Imagem fundo</label>
                                                        <input class="form-control" type="file" name="paralax_7"  />
                                                </div>
                                                <?php if(isset($editaTexto->paralax_7) && !empty($editaTexto->paralax_7)){ ?>
                                                    <div class="col-md-1 col-sm-12">
                                                        <img src="../img/<?php echo $editaTexto->paralax_7;?>" width="100">
                                                    </div>
                                                <?php }}?>
                                            </div>
                                            <br>
                                            <?php if(isset($editaTexto->tem_video) && $editaTexto->tem_video == 'S'){ ?>
                                            <div class="row">
                                                 <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Embed->https://www.youtube.com/watch?v=embed aqui</label>
                                                <input class="form-control" type="text" name="embed" value="<?php if(isset($editaTexto->embed) && !empty($editaTexto->embed)){ echo $editaTexto->embed;}?>" />
                                            </div>
                                            </div>
                                            <?php }?>
                                             <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <label  class="col-form-label">Breve</label>
                                                    <input class="form-control" type="text" name="titulo9_sessao1" value="<?php if(isset($editaTexto->titulo9_sessao1) && !empty($editaTexto->titulo9_sessao1)){ echo $editaTexto->titulo9_sessao1;}?>" />
                                                </div>
                                               
                                            </div>
                                            <br>
                                            <hr>
                                            <h4 class="card-title">Seção 8, Checks</h4>
                                            <div class="row">
                                                <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título 1</label>
                                                    <input class="form-control" type="text" name="titulo17_sessao1" value="<?php if(isset($editaTexto->titulo17_sessao1) && !empty($editaTexto->titulo17_sessao1)){ echo $editaTexto->titulo17_sessao1;}?>" />
                                                </div>
                                                 <div class="col-md-7 col-sm-12">
                                                    <label  class="col-form-label">Título 2</label>
                                                    <input class="form-control" type="text" name="titulo19_sessao1" value="<?php if(isset($editaTexto->titulo19_sessao1) && !empty($editaTexto->titulo19_sessao1)){ echo $editaTexto->titulo19_sessao1;}?>" />
                                                </div>
                                                <div class="col-md-7 col-sm-12">
                                                    <label  class="col-form-label">Título 3 </label>
                                                    <input class="form-control" type="text" name="titulo20_sessao1" value="<?php if(isset($editaTexto->titulo20_sessao1) && !empty($editaTexto->titulo20_sessao1)){ echo $editaTexto->titulo20_sessao1;}?>" />
                                                </div>
                                                <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título 4 </label>
                                                    <input class="form-control" type="text" name="titulo21_sessao1" value="<?php if(isset($editaTexto->titulo21_sessao1) && !empty($editaTexto->titulo21_sessao1)){ echo $editaTexto->titulo21_sessao1;}?>" />
                                                </div>
                                            </div>
                                            <!--FIM DA OITAVA SEÇÃO-->
                                            <br>
                                            <hr>
                                             <!--NONA SEÇÃO-->
                                            <h4 class="card-title">Seção 9, News</h4>
                                            <?php if(isset($editaTexto->tem_titulo_5) && $editaTexto->tem_titulo_5 == 'S'){ ?>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                <label  class="col-form-label"><?php if(isset($editaTexto->nome_titulo5) && !empty($editaTexto->nome_titulo5)){ echo $editaTexto->nome_titulo5;}else{echo "Título ";}?></label>
                                                    <input class="form-control" type="text" name="titulo5" value="<?php if(isset($editaTexto->titulo5) && !empty($editaTexto->titulo5)){ echo $editaTexto->titulo5;}?>" />
                                                </div>
                                            </div>
                                            <?php }?>
                                             <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <label  class="col-form-label">Título 2 </label>
                                                    <input class="form-control" type="text" name="texto_8" value="<?php if(isset($editaTexto->texto_8) && !empty($editaTexto->texto_8)){ echo $editaTexto->texto_8;}?>"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12">
                                                    <label  class="col-form-label">Breve</label>
                                                    <textarea name="texto_7" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaTexto->texto_7) && !empty($editaTexto->texto_7)){ echo $editaTexto->texto_7;}?></textarea>
                                                </div>
                                            </div>
                                            <!--FIM DA NONA SEÇÃO-->
                                            <br>
                                            <hr>
                                            <!--DÉCIMA SEÇÃO-->
                                            <h4 class="card-title">Seção 10, Parceiros</h4>
                                            <div class="row">
                                                 <div class="col-md-4 col-sm-12">
                                                 <label  class="col-form-label">Título </label>
                                                    <input class="form-control" type="text" name="nome_botao_7" value="<?php if(isset($editaTexto->nome_botao_7) && !empty($editaTexto->nome_botao_7)){ echo $editaTexto->nome_botao_7;}?>" />
                                                </div>
                                            </div>
                                            <!--FIM DA DÉCIMA SEÇÃO-->
                                            <br>
                                            <hr>
                                            <!--CAMPOS QUE PODEM SER ADICIONADOS CASO HAJA NECESSIDADE -->
                                            <!--<div class="row">-->
                                            <!--< ?php if(isset($editaTexto->tem_paralax_4) && $editaTexto->tem_paralax_4 == 'S'){ ?>-->
                                            <!--        <div class="col-md-4 col-sm-12">-->
                                            <!--            <label  class="col-form-label">Imagem Bloco 1</label>-->
                                            <!--            <input class="form-control" type="file" name="paralax_4"  />-->
                                            <!--        </div>-->
                                            <!--< ?php if(isset($editaTexto->paralax_4) && !empty($editaTexto->paralax_4)){ ?>-->
                                            <!--        <div class="col-md-4 col-sm-12">-->
                                            <!--            <img src="../img/< ?php echo $editaTexto->paralax_4;?>" width="100">-->
                                            <!--        </div>-->
                                            <!--< ?php }?>-->
                                            <!--< ?php }?>-->
                                            <!--</div>-->
                                            <!--<div class="row">-->
                                            <!--< ?php if(isset($editaTexto->tem_foto_3) && $editaTexto->tem_foto_3 == 'S'){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Imagem Bloco 2</label>-->
                                            <!--        <input class="form-control" type="file" name="foto_3"  />-->
                                            <!--    </div>-->
                                            <!--< ?php if(isset($editaTexto->foto_3) && !empty($editaTexto->foto_3)){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <img src="../img/< ?php echo $editaTexto->foto_3;?>" width="100">-->
                                            <!--    </div>-->
                                            <!--< ?php }?>-->
                                            <!--< ?php }?>-->
                                            <!--</div>-->
                                            <!--< ?php if(isset($editaTexto->tem_foto_2) && $editaTexto->tem_foto_2 == 'S'){ ?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--    <label  class="col-form-label">Imagem 1</label>-->
                                            <!--        <input class="form-control" type="file" name="foto_2"  />-->
                                            <!--    </div>-->
                                            <!--< ?php if(isset($editaTexto->foto_2) && !empty($editaTexto->foto_2)){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <img src="../img/< ?php echo $editaTexto->foto_2;?>" width="100">-->
                                            <!--    </div>-->
                                            <!--< ?php }?>-->
                                            <!--</div>-->
                                            <!--< ?php }?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Imagem 2</label>-->
                                            <!--        <input class="form-control" type="file" name="foto11_sessao1"  />-->
                                            <!--    </div>-->
                                            <!--< ?php if(isset($editaTexto->foto11_sessao1) && !empty($editaTexto->foto11_sessao1)){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <img src="../img/< ?php echo $editaTexto->foto11_sessao1;?>" width="100">-->
                                            <!--    </div>-->
                                            <!--< ?php }?>-->
                                            <!--</div>-->
                                            <!--    <br>-->
                                            <!--    <hr>-->
                                            <!--< ?php if(isset($editaTexto->tem_paralax_5) && $editaTexto->tem_paralax_5 == 'S'){ ?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Imagem 3</label>-->
                                            <!--        <input class="form-control" type="file" name="paralax_5"  />-->
                                            <!--    </div>-->
                                            <!--< ?php if(isset($editaTexto->paralax_5) && !empty($editaTexto->paralax_5)){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <img src="../img/< ?php echo $editaTexto->paralax_5;?>" width="100">-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--< ?php }}?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Imagem 4</label>-->
                                            <!--        <input class="form-control" type="file" name="paralax_testemunho"  />-->
                                            <!--    </div>-->
                                            <!--< ?php if(isset($editaTexto->paralax_testemunho) && !empty($editaTexto->paralax_testemunho)){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <img src="../img/< ?php echo $editaTexto->paralax_testemunho;?>" width="100">-->
                                            <!--    </div>-->
                                            <!--< ?php }?>-->
                                            <!--</div>-->
                                            <!--<br>-->
                                            <!--<hr>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Imagem contato</label>-->
                                            <!--        <input class="form-control" type="file" name="foto_5"  />-->
                                            <!--    </div>-->
                                            <!--    < ?php if(isset($editaTexto->foto_5) && !empty($editaTexto->foto_5)){ ?>-->
                                            <!--        <div class="col-md-4 col-sm-12">-->
                                            <!--            <img src="../img/< ?php echo $editaTexto->foto_5;?>" width="100">-->
                                            <!--        </div>-->
                                            <!--    < ?php }?>-->
                                            <!--</div>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Link Botão </label>-->
                                            <!--        <input class="form-control" type="text" name="link_botao_7" value="< ?php if(isset($editaTexto->link_botao_7) && !empty($editaTexto->link_botao_7)){ echo $editaTexto->link_botao_7;}?>" />-->
                                            <!--    </div>-->
                                            <!--     <div class="col-md-4 col-sm-12">-->
                                            <!--    <label  class="col-form-label">Nome Botão </label>-->
                                            <!--        <input class="form-control" type="text" name="nome_botao_3" value="< ?php if(isset($editaTexto->nome_botao_3) && !empty($editaTexto->nome_botao_3)){ echo $editaTexto->nome_botao_3;}?>" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<br>-->
                                            <!--<hr>-->
                                            <!--< ?php if(isset($editaTexto->tem_texto_5) && $editaTexto->tem_texto_5 == 'S'){ ?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12 col-sm-12">-->
                                            <!--     <label  class="col-form-label">Breve 4</label>-->
                                            <!--        <textarea name="texto_5" class="ckeditor" id="ckeditor" cols="30" rows="10">< ?php if(isset($editaTexto->texto_5) && !empty($editaTexto->texto_5)){ echo $editaTexto->texto_5;}?></textarea>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--< ?php }?>-->
                                            <!--< ?php if(isset($editaTexto->tem_titulo_sessao_sobre) && $editaTexto->tem_titulo_sessao_sobre == 'S'){ ?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12 col-sm-12">-->
                                            <!--     <label  class="col-form-label">Titulo 5</label>-->
                                            <!--        <input class="form-control" type="text" name="titulo_sessao_sobre" value="< ?php if(isset($editaTexto->titulo_sessao_sobre) && !empty($editaTexto->titulo_sessao_sobre)){ echo $editaTexto->titulo_sessao_sobre;}?>" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--< ?php }?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Nome Botão </label>-->
                                            <!--        <input class="form-control" type="text" name="nome_botao_2" value="< ?php if(isset($editaTexto->nome_botao_2) && !empty($editaTexto->nome_botao_2)){ echo $editaTexto->nome_botao_2;}?>" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<hr>-->
                                            <!--< ?php if(isset($editaTexto->tem_botao_2) && $editaTexto->tem_botao_2 == 'S'){ ?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--    <label  class="col-form-label">Link Botão 2</label>-->
                                            <!--        <input class="form-control" type="text" name="link_botao_2" value="< ?php if(isset($editaTexto->link_botao_2) && !empty($editaTexto->link_botao_2)){ echo $editaTexto->link_botao_2;}?>" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--< ?php }?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--    <label  class="col-form-label">Link Botão 3</label>-->
                                            <!--        <input class="form-control" type="text" name="link_botao_3" value="< ?php if(isset($editaTexto->link_botao_3) && !empty($editaTexto->link_botao_3)){ echo $editaTexto->link_botao_3;}?>" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!-- FIM DOS CAMPOS QUE PODEM SER ADICIONADOS CASO HAJA NECESSIDADE -->
                                        

                                        <!-- BLOCO METAS TAG -->

                                        <?php if(isset($editaTexto->tem_metas_tag) && $editaTexto->tem_metas_tag == 'S'){ ?>
                                        <h4 class="card-title">Metas Tags</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Title</label>
                                                    <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editaTexto->meta_title) && !empty($editaTexto->meta_title)){ echo $editaTexto->meta_title;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editaTexto->meta_keywords) && !empty($editaTexto->meta_keywords)){ echo $editaTexto->meta_keywords;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editaTexto->meta_description) && !empty($editaTexto->meta_description)){ echo $editaTexto->meta_description;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <?php }?>

                                        <!-- FIM BLOCO METAS TAG -->
                                    </div>
                                    <br>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <!-- <button type="reset" class="btn btn-dark">Resetar</button> -->
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaTexto">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaTexto->foto) && !empty($editaTexto->foto)){ echo $editaTexto->foto;}?>">
                                    <input type="hidden" name="foto_2_Atual" value="<?php if(isset($editaTexto->foto_2) && !empty($editaTexto->foto_2)){ echo $editaTexto->foto_2;}?>">
                                    <input type="hidden" name="foto_3_Atual" value="<?php if(isset($editaTexto->foto_3) && !empty($editaTexto->foto_3)){ echo $editaTexto->foto_3;}?>">
                                    <input type="hidden" name="foto_4_Atual" value="<?php if(isset($editaTexto->foto_4) && !empty($editaTexto->foto_4)){ echo $editaTexto->foto_4;}?>">
                                    <input type="hidden" name="foto_5_Atual" value="<?php if(isset($editaTexto->foto_5) && !empty($editaTexto->foto_5)){ echo $editaTexto->foto_5;}?>">
                                    <input type="hidden" name="foto_6_Atual" value="<?php if(isset($editaTexto->foto_6) && !empty($editaTexto->foto_6)){ echo $editaTexto->foto_6;}?>">
                                    <input type="hidden" name="foto_7_Atual" value="<?php if(isset($editaTexto->foto_7) && !empty($editaTexto->foto_7)){ echo $editaTexto->foto_7;}?>">
                                    <input type="hidden" name="foto_8_Atual" value="<?php if(isset($editaTexto->foto_8) && !empty($editaTexto->foto_8)){ echo $editaTexto->foto_8;}?>">
                                    <input type="hidden" name="paralax_1_Atual" value="<?php if(isset($editaTexto->paralax_1) && !empty($editaTexto->paralax_1)){ echo $editaTexto->paralax_1;}?>">
                                    <input type="hidden" name="paralax_2_Atual" value="<?php if(isset($editaTexto->paralax_2) && !empty($editaTexto->paralax_2)){ echo $editaTexto->paralax_2;}?>">
                                    <input type="hidden" name="paralax_3_Atual" value="<?php if(isset($editaTexto->paralax_3) && !empty($editaTexto->paralax_3)){ echo $editaTexto->paralax_3;}?>">
                                    <input type="hidden" name="paralax_4_Atual" value="<?php if(isset($editaTexto->paralax_4) && !empty($editaTexto->paralax_4)){ echo $editaTexto->paralax_4;}?>">
                                    <input type="hidden" name="paralax_5_Atual" value="<?php if(isset($editaTexto->paralax_5) && !empty($editaTexto->paralax_5)){ echo $editaTexto->paralax_5;}?>">
                                    <input type="hidden" name="paralax_6_Atual" value="<?php if(isset($editaTexto->paralax_6) && !empty($editaTexto->paralax_6)){ echo $editaTexto->paralax_6;}?>">
                                    <input type="hidden" name="paralax_7_Atual" value="<?php if(isset($editaTexto->paralax_7) && !empty($editaTexto->paralax_7)){ echo $editaTexto->paralax_7;}?>">
                                    <input type="hidden" name="paralax_8_Atual" value="<?php if(isset($editaTexto->paralax_8) && !empty($editaTexto->paralax_8)){ echo $editaTexto->paralax_8;}?>">
                                    <input type="hidden" name="foto11_sessao1_Atual" value="<?php if(isset($editaTexto->foto11_sessao1) && !empty($editaTexto->foto11_sessao1)){ echo $editaTexto->foto11_sessao1;}?>">
                                    <input type="hidden" name="foto10_sessao1_Atual" value="<?php if(isset($editaTexto->foto10_sessao1) && !empty($editaTexto->foto10_sessao1)){ echo $editaTexto->foto10_sessao1;}?>">
                                    <input type="hidden" name="paralax_testemunho_Atual" value="<?php if(isset($editaTexto->paralax_testemunho) && !empty($editaTexto->paralax_testemunho)){ echo $editaTexto->paralax_testemunho;}?>">
                                    <input type="hidden" name="id" value="<?php if(isset($editaTexto->id) && !empty($editaTexto->id)){ echo $editaTexto->id;}?>">
                                    <input type="hidden" name="pagina_individual" value="<?php if(isset($_GET['pi']) && $_GET['pi'] == 'S'){echo "S";}else{echo "N";}?>">
                                     <input type="hidden" name="titulo18_sessao1_Atual" value="<?php if(isset($editaTexto->titulo18_sessao1) && !empty($editaTexto->titulo18_sessao1)){ echo $editaTexto->titulo18_sessao1;}?>">
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