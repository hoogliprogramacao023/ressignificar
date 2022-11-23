<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: sobre.php');
    }else{
        $id = $_GET['id'];
        
    }
}
$sobre->editar();
$editaSobre = $sobre->rsDados($id);
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
                                    <div class="row">
                                        <div class="col-md-2 col-sm-12">
                                            <label class="col-form-label">Ativo</label>
                                            <select name="ativo" class="form-control" id="">
                                                <option value="S"
                                                    <?php if(isset($editaSobre->ativo) && $editaSobre->ativo == 'S'){ echo "selected";}?>>
                                                    Sim</option>
                                                <option value="N"
                                                    <?php if(isset($editaSobre->ativo) && $editaSobre->ativo == 'N'){ echo "selected";}?>>
                                                    Não</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <label class="col-form-label">Ativo</label>
                                            <select name="tem_descricao2" class="form-control" id="">
                                                <option value="S"
                                                    <?php if(isset($editaSobre->tem_descricao2) && $editaSobre->tem_descricao2 == 'S'){ echo "selected";}?>>
                                                    Sim</option>
                                                <option value="N"
                                                    <?php if(isset($editaSobre->tem_descricao2) && $editaSobre->tem_descricao2 == 'N'){ echo "selected";}?>>
                                                    Não</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <label class="col-form-label">Ativo</label>
                                            <select name="tem_descricao3" class="form-control" id="">
                                                <option value="S"
                                                    <?php if(isset($editaSobre->tem_descricao3) && $editaSobre->tem_descricao3 == 'S'){ echo "selected";}?>>
                                                    Sim</option>
                                                <option value="N"
                                                    <?php if(isset($editaSobre->tem_descricao3) && $editaSobre->tem_descricao3 == 'N'){ echo "selected";}?>>
                                                    Não</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <label class="col-form-label">Ativo</label>
                                            <select name="tem_descricao4" class="form-control" id="">
                                                <option value="S"
                                                    <?php if(isset($editaSobre->tem_descricao4) && $editaSobre->tem_descricao4 == 'S'){ echo "selected";}?>>
                                                    Sim</option>
                                                <option value="N"
                                                    <?php if(isset($editaSobre->tem_descricao4) && $editaSobre->tem_descricao4 == 'N'){ echo "selected";}?>>
                                                    Não</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <label class="col-form-label">Ativo</label>
                                            <select name="tem_titulo5_sessao1" class="form-control" id="">
                                                <option value="S"
                                                    <?php if(isset($editaSobre->tem_titulo5_sessao1) && $editaSobre->tem_titulo5_sessao1 == 'S'){ echo "selected";}?>>
                                                    Sim</option>
                                                <option value="N"
                                                    <?php if(isset($editaSobre->tem_titulo5_sessao1) && $editaSobre->tem_titulo5_sessao1 == 'N'){ echo "selected";}?>>
                                                    Não</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <?php if(isset($editaSobre->tem_titulo) && $editaSobre->tem_titulo == 'S'){ ?>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título 1</label>
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaSobre->titulo) && !empty($editaSobre->titulo)){ echo $editaSobre->titulo;}?>" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Titulo 2</label>
                                                <input class="form-control" type="text" name="titulo4_sessao1" value="<?php if(isset($editaSobre->titulo4_sessao1) && !empty($editaSobre->titulo4_sessao1)){ echo $editaSobre->titulo4_sessao1;}?>" />
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12">
                                            <label  class="col-form-label">Breve</label>
                                            <input class="form-control" type="text" name="descricao" value="<?php if(isset($editaSobre->descricao) && !empty($editaSobre->descricao)){ echo $editaSobre->descricao;}?>" />
                                        </div>
                                    </div>
                                     <?php if(isset($editaSobre->tem_texto) && $editaSobre->tem_texto == 'S'){ ?>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                            <label  class="col-form-label">Texto</label>
                                            <textarea name="texto" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->texto) && !empty($editaSobre->texto)){ echo $editaSobre->texto;}?></textarea>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <div class="row">
                                         <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Título bullet</label>
                                                <input class="form-control" type="text" name="titulo5_sessao1" value="<?php if(isset($editaSobre->titulo5_sessao1) && !empty($editaSobre->titulo5_sessao1)){ echo $editaSobre->titulo5_sessao1;}?>" />
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Breve 1 </label>
                                                <input class="form-control" type="text" name="titulo6_sessao1" value="<?php if(isset($editaSobre->titulo6_sessao1) && !empty($editaSobre->titulo6_sessao1)){ echo $editaSobre->titulo6_sessao1;}?>" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Titulo bullet 2</label>
                                                <input class="form-control" type="text" name="titulo_img" value="<?php if(isset($editaSobre->titulo_img) && !empty($editaSobre->titulo_img)){ echo $editaSobre->titulo_img;}?>" />
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Breve 2</label>
                                            <input class="form-control" type="text" name="titulo7_sessao1" value="<?php if(isset($editaSobre->titulo7_sessao1) && !empty($editaSobre->titulo7_sessao1)){ echo $editaSobre->titulo7_sessao1;}?>" />
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <h4 class="card-title">Seção 1, Imagens</h4>
                                    <?php if(isset($editaSobre->tem_paralax_1) && $editaSobre->tem_paralax_1 == 'S'){ ?>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label  class="col-form-label">Imagem 1</label>
                                            <input class="form-control" type="file" name="paralax_1"  />
                                        </div>
                                        <?php if(isset($editaSobre->paralax_1) && !empty($editaSobre->paralax_1)){ ?>
                                        <div class="col-md-4 col-sm-12">
                                            <img src="../img/<?php echo $editaSobre->paralax_1;?>" width="100">
                                        </div>
                                        <?php }}?>
                                   </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label  class="col-form-label">Imagem 2</label>
                                            <input class="form-control" type="file" name="titulo18_sessao1"  />
                                        </div>
                                        <?php if(isset($editaSobre->titulo18_sessao1) && !empty($editaSobre->titulo18_sessao1)){ ?>
                                        <div class="col-md-4 col-sm-12">
                                             <img src="../img/<?php echo $editaSobre->titulo18_sessao1;?>" width="100">
                                        </div>
                                        <?php }?>
                                    </div>
                                     <!--FIM DA PRIMEIRA SEÇÃO-->  
                                    <br>
                                    <hr>
                                    <!--SEGUNDA SEÇÃO-->  
                                    <h4 class="card-title">Seção 2, Vídeo</h4>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12">
                                            <label  class="col-form-label">Imagem Fundo</label>
                                            <input class="form-control" type="file" name="foto_7" />
                                        </div>
                                    <?php if(isset($editaSobre->foto_7) && !empty($editaSobre->foto_7)){ ?>
                                        <div class="col-md-4 col-sm-12">
                                            <img src="../img/<?php echo $editaSobre->foto_7;?>" width="100">
                                        </div>
                                    <?php }?>
                                        <div class="col-md-7 col-sm-12">
                                            <label  class="col-form-label">Título 1</label>
                                            <input class="form-control" type="text" name="titulo8" value="<?php if(isset($editaSobre->titulo8) && !empty($editaSobre->titulo8)){ echo $editaSobre->titulo8;}?>" />
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label  class="col-form-label">Link Vídeo (https://www.youtube.com/watch?v=embed aqui)</label>
                                                <input class="form-control" type="text" name="link_botao_1" value="<?php if(isset($editaSobre->link_botao_1) && !empty($editaSobre->link_botao_1)){ echo $editaSobre->link_botao_1;}?>" />
                                        </div>
                                    </div>
                                    <br>
                                    <hr>
                                    <h4 class="card-title">Seção 2, Checks</h4>
                                     <div class="row">
                                        <div class="col-md-7 col-sm-12">
                                            <label  class="col-form-label">Titulo 1</label>
                                            <input class="form-control" type="text" name="titulo8_sessao1" value="<?php if(isset($editaSobre->titulo8_sessao1) && !empty($editaSobre->titulo8_sessao1)){ echo $editaSobre->titulo8_sessao1;}?>" />
                                        </div>
                                    </div>
                                    <?php if(isset($editaSobre->tem_titulo_2) && $editaSobre->tem_titulo_2 == 'S'){ ?>
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12">
                                            <label  class="col-form-label"><?php if(isset($editaSobre->nome_titulo2) && !empty($editaSobre->nome_titulo2)){ echo $editaSobre->nome_titulo2;}else{echo "Título 2";}?></label>
                                                <input class="form-control" type="text" name="titulo2" value="<?php if(isset($editaSobre->titulo2) && !empty($editaSobre->titulo2)){ echo $editaSobre->titulo2;}?>" />
                                        </div>
                                    </div>
                                    <?php }?>
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12">
                                            <label  class="col-form-label">Titulo 3 </label>
                                            <input class="form-control" type="text" name="titulo22_sessao1" value="<?php if(isset($editaSobre->titulo22_sessao1) && !empty($editaSobre->titulo22_sessao1)){ echo $editaSobre->titulo22_sessao1;}?>" />
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <label  class="col-form-label">Titulo 4 </label>
                                            <input class="form-control" type="text" name="titulo23_sessao1" value="<?php if(isset($editaSobre->titulo23_sessao1) && !empty($editaSobre->titulo23_sessao1)){ echo $editaSobre->titulo23_sessao1;}?>" />
                                        </div>
                                    </div>
                                    <!--FIM DA SEGUNDA SEÇÃO-->  
                                    <br>
                                    <hr>
                                    <!--TERCEIRA SEÇÃO-->   
                                    <h4 class="card-title">Seção 3, Cards</h4>
                                    <div class="row">
                                        <div class="col-md-7 col-sm-12">
                                            <label  class="col-form-label">Título 1 </label>
                                                <input class="form-control" type="text" name="titulo25_sessao1" value="<?php if(isset($editaSobre->titulo25_sessao1) && !empty($editaSobre->titulo25_sessao1)){ echo $editaSobre->titulo25_sessao1;}?>" />
                                        </div>
                                         <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Titulo 2</label>
                                                <input class="form-control" type="text" name="titulo24_sessao1" value="<?php if(isset($editaSobre->titulo24_sessao1) && !empty($editaSobre->titulo24_sessao1)){ echo $editaSobre->titulo24_sessao1;}?>" />
                                        </div>
                                        <!--<div class="col-md-7 col-sm-12">-->
                                        <!--    <label  class="col-form-label">Título 2 </label>-->
                                        <!--    <input class="form-control" type="text" name="nome_botao_6" value="< ?php if(isset($editaSobre->nome_botao_6) && !empty($editaSobre->nome_botao_6)){ echo $editaSobre->nome_botao_6;}?>" />-->
                                        <!--</div>-->
                                    </div>
                                    
                                    <!--<div class="row">-->
                                    <!--<?php if(isset($editaSobre->tem_paralax_2) && $editaSobre->tem_paralax_2 == 'S'){ ?>-->
                                    <!--    <div class="col-md-4 col-sm-12">-->
                                    <!--        <label  class="col-form-label">Imagem 1</label>-->
                                    <!--        <input class="form-control" type="file" name="paralax_2"  />-->
                                    <!--    </div>-->
                                    <!--<?php if(isset($editaSobre->paralax_2) && !empty($editaSobre->paralax_2)){ ?>-->
                                    <!--    <div class="col-md-4 col-sm-12">-->
                                    <!--        <img src="../img/<?php echo $editaSobre->paralax_2;?>" width="100">-->
                                    <!--    </div>-->
                                    <!--<?php }}?>-->
                                    <!--</div>-->
                                    <!--<br>-->
                                    <!--<div class="row">-->
                                    <!--<?php if(isset($editaSobre->tem_foto_6) && $editaSobre->tem_foto_6 == 'S'){ ?>-->
                                    <!--    <div class="col-md-4 col-sm-12">-->
                                    <!--        <label  class="col-form-label">Imagem 2</label>-->
                                    <!--        <input class="form-control" type="file" name="foto_6"  />-->
                                    <!--    </div>-->
                                    <!--<?php if(isset($editaSobre->foto_6) && !empty($editaSobre->foto_6)){ ?>-->
                                    <!--    <div class="col-md-4 col-sm-12">-->
                                    <!--        <img src="../img/<?php echo $editaSobre->foto_6;?>" width="100">-->
                                    <!--    </div>-->
                                    <!--<?php }}?>-->
                                    <!--</div>-->
                                    <!--<br>-->
                                    <!--<div class="row">-->
                                    <!--    <div class="col-md-4 col-sm-12">-->
                                    <!--        <label  class="col-form-label">Imagem 3 (dots)</label>-->
                                    <!--            <input class="form-control" type="file" name="paralax_8"  />-->
                                    <!--    </div>-->
                                    <!--<?php if(isset($editaSobre->paralax_8) && !empty($editaSobre->paralax_8)){ ?>-->
                                    <!--    <div class="col-md-1 col-sm-12">-->
                                    <!--      <img src="../img/<?php echo $editaSobre->paralax_8;?>" width="100">-->
                                    <!--    </div>-->
                                    <!--<?php }?>-->
                                    <!--</div>-->
                                   
                                    <!--<br>-->
                                    <!--<hr>-->
                                    <!--<h4 class="card-title">Textos ao lado das Imagens</h4>-->
                                     
                                    <div class="row">
                                    <?php if(isset($editaSobre->descricao2) && $editaSobre->tem_descricao2 == 'S'){ ?>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Título 1</label>
                                                <input class="form-control" type="text" name="titulo" value="<?php if(isset($editaSobre->titulo) && !empty($editaSobre->titulo)){ echo $editaSobre->titulo;}?>" />
                                            </div>
                                            <div class="col-md-7 col-sm-12">
                                                <label  class="col-form-label">Titulo 2</label>
                                                <input class="form-control" type="text" name="titulo4_sessao1" value="<?php if(isset($editaSobre->titulo4_sessao1) && !empty($editaSobre->titulo4_sessao1)){ echo $editaSobre->titulo4_sessao1;}?>" />
                                            </div>
                                        <?php }?>
                                    </div>
                                   
                                    <!-- <?php if(isset($editaSobre->tem_breve_sobre) && $editaSobre->tem_breve_sobre == 'S'){ ?>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-12 col-sm-12">-->
                                    <!--        <label  class="col-form-label">List com Bullets </label>-->
                                    <!--        <textarea name="breve_sobre" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->breve_sobre) && !empty($editaSobre->breve_sobre)){ echo $editaSobre->breve_sobre;}?></textarea>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--<?php }?>-->
                                   
                                    <!--<br>-->
                                    <!--<hr>-->
                                    <!--TERCEIRA SEÇÃO IMAGENS-->
                                    <!-- <h4 class="card-title">Seção 3, Imagens grandes com transição</h4>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-4 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Imagem 1</label>-->
                                    <!--                <input class="form-control" type="file" name="foto_8"  />-->
                                    <!--        </div>-->
                                    <!--    <?php if(isset($editaSobre->foto_8) && !empty($editaSobre->foto_8)){ ?>-->
                                    <!--        <div class="col-md-1 col-sm-12">-->
                                    <!--            <img src="../img/<?php echo $editaSobre->foto_8;?>" width="100">-->
                                    <!--        </div>-->
                                    <!--    <?php }?>-->
                                    <!--     <div class="col-md-4 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Imagem 2</label>-->
                                    <!--            <input class="form-control" type="file" name="foto10_sessao1"  />-->
                                    <!--        </div>-->
                                    <!--    <?php if(isset($editaSobre->foto10_sessao1) && !empty($editaSobre->foto10_sessao1)){ ?>-->
                                    <!--            <div class="col-md-1 col-sm-12">-->
                                    <!--                <img src="../img/<?php echo $editaSobre->foto10_sessao1;?>" width="100">-->
                                    <!--            </div>-->
                                    <!--    <?php }?>-->
                                    <!--    </div>  -->
                                    <!--    <br>-->
                                    <!--    <div class="row">-->
                                    <!--     <?php if(isset($editaSobre->tem_foto) && $editaSobre->tem_foto == 'S'){ ?>-->
                                    <!--        <div class="col-md-4 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Imagem 3</label>-->
                                    <!--            <input class="form-control" type="file" name="foto"  />-->
                                    <!--        </div>-->
                                    <!--    <?php if(isset($editaSobre->foto) && !empty($editaSobre->foto)){ ?>-->
                                    <!--        <div class="col-md-1 col-sm-12">-->
                                    <!--            <img src="../img/<?php echo $editaSobre->foto;?>" width="100">-->
                                    <!--        </div>-->
                                    <!--    <?php }}?>-->
                                    <!--    <?php if(isset($editaSobre->tem_foto_4) && $editaSobre->tem_foto_4 == 'S'){ ?>-->
                                    <!--        <div class="col-md-4 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Imagem 4</label>-->
                                    <!--            <input class="form-control" type="file" name="foto_4"  />-->
                                    <!--        </div>-->
                                    <!--    <?php if(isset($editaSobre->foto_4) && !empty($editaSobre->foto_4)){ ?>-->
                                    <!--        <div class="col-md-1 col-sm-12">-->
                                    <!--            <img src="../img/<?php echo $editaSobre->foto_4;?>" width="100">-->
                                    <!--        </div>-->
                                    <!--    <?php }}?>-->
                                    <!--    </div>-->
                                         
                                    <!--    <br>-->
                                    <!--    <hr>-->
                                        <!--TERCEIRA SEÇÃO TEXTOS-->
                                    <!--    <h4 class="card-title">Seção 3, Box de Textos</h4>-->
                                    <!--    <h4 class="card-title">Box 1</h4>-->
                                    <!--     <div class="row">-->
                                            
                                    <!--        <div class="col-md-12 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Breve 1</label>-->
                                    <!--         <textarea name="breve_sobre2" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->breve_sobre2) && !empty($editaSobre->breve_sobre2)){ echo $editaSobre->breve_sobre2;}?></textarea>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-4 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Nome Botão 1 </label>-->
                                    <!--            <input class="form-control" type="text" name="nome_botao_8" value="<?php if(isset($editaSobre->nome_botao_8) && !empty($editaSobre->nome_botao_8)){ echo $editaSobre->nome_botao_8;}?>" />-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Link Botão 1 </label>-->
                                    <!--            <input class="form-control" type="text" name="link_botao_8" value="<?php if(isset($editaSobre->link_botao_8) && !empty($editaSobre->link_botao_8)){ echo $editaSobre->link_botao_8;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <br>-->
                                    <!--    <hr>-->
                                    <!--    <h4 class="card-title">Box 2</h4>-->
                                        
                                    <!--        <?php if(isset($editaSobre->tem_texto_2) && $editaSobre->tem_texto_2 == 'S'){ ?>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-12 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Breve</label>-->
                                    <!--            <textarea name="texto_2" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->texto_2) && !empty($editaSobre->texto_2)){ echo $editaSobre->texto_2;}?></textarea>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <?php }?>-->
                                    <!--    <?php if(isset($editaSobre->tem_botao_1) && $editaSobre->tem_botao_1 == 'S'){ ?>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-6 col-sm-12">-->
                                    <!--        <label  class="col-form-label">Nome Botão 2</label>-->
                                    <!--            <input class="form-control" type="text" name="nome_botao_1" value="<?php if(isset($editaSobre->nome_botao_1) && !empty($editaSobre->nome_botao_1)){ echo $editaSobre->nome_botao_1;}?>" />-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-6 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Link Botão 2</label>-->
                                    <!--            <input class="form-control" type="text" name="nome_botao_5" value="<?php if(isset($editaSobre->nome_botao_5) && !empty($editaSobre->nome_botao_5)){ echo $editaSobre->nome_botao_5;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <?php }?>-->
                                    <!--    <br>-->
                                    <!--    <hr>-->
                                    <!--    <h4 class="card-title">Box 3</h4>-->
                                    <!--    <div class="row">-->
                                           
                                    <!--        <div class="col-md-7 col-sm-12">-->
                                    <!--            <label  class="col-form-label"><?php if(isset($editaSobre->nome_titulo7) && !empty($editaSobre->nome_titulo7)){ echo $editaSobre->nome_titulo7;}else{echo "Titulo 2 ";}?></label>-->
                                    <!--            <input class="form-control" type="text" name="titulo7" value="<?php if(isset($editaSobre->titulo7) && !empty($editaSobre->titulo7)){ echo $editaSobre->titulo7;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-12 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Breve</label>-->
                                    <!--            <textarea name="descricao2" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->descricao2) && !empty($editaSobre->descricao2)){ echo $editaSobre->descricao2;}?></textarea>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--     <div class="row">-->
                                    <!--         <div class="col-md-4 col-sm-12">-->
                                    <!--                <label  class="col-form-label">Nome Botão</label>-->
                                    <!--                <input class="form-control" type="text" name="nome_botao_4" value="<?php if(isset($editaSobre->nome_botao_4) && !empty($editaSobre->nome_botao_4)){ echo $editaSobre->nome_botao_4;}?>" />-->
                                    <!--            </div> -->
                                    <!--        <div class="col-md-4 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Link Botão</label>-->
                                    <!--            <input class="form-control" type="text" name="link_botao_5" value="<?php if(isset($editaSobre->link_botao_5) && !empty($editaSobre->link_botao_5)){ echo $editaSobre->link_botao_5;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <br>-->
                                    <!--    <hr>-->
                                    <!--    <h4 class="card-title">Box 4</h4>-->
                                    <!--    <div class="row">-->
                                    <!--    <?php if(isset($editaSobre->tem_titulo_6) && $editaSobre->tem_titulo_6 == 'S'){ ?>-->
                                    <!--        <div class="col-md-7 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Titulo 1</label>-->
                                    <!--            <input class="form-control" type="text" name="titulo6" value="<?php if(isset($editaSobre->titulo6) && !empty($editaSobre->titulo6)){ echo $editaSobre->titulo6;}?>" />-->
                                    <!--        </div>-->
                                    <!--    <?php }?>-->
                                    <!--    <?php if(isset($editaSobre->tem_botao_4) && $editaSobre->tem_botao_4 == 'S'){ ?>-->
                                    <!--        <div class="col-md-7 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Titulo 2</label>-->
                                    <!--            <input class="form-control" type="text" name="link_botao_4" value="<?php if(isset($editaSobre->link_botao_4) && !empty($editaSobre->link_botao_4)){ echo $editaSobre->link_botao_4;}?>" />-->
                                    <!--        </div>-->
                                    <!--    <?php }?>-->
                                    <!--    </div>-->
                                    <!--    <?php if(isset($editaSobre->tem_texto_6) && $editaSobre->tem_texto_6 == 'S'){ ?>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-12 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Breve</label>-->
                                    <!--            <textarea name="texto_6" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->texto_6) && !empty($editaSobre->texto_6)){ echo $editaSobre->texto_6;}?></textarea>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <?php }?>-->
                                    <!--    <div class="row">-->
                                    <!--         <div class="col-md-6 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Nome Botão</label>-->
                                    <!--            <input class="form-control" type="text" name="titulo15_sessao1" value="<?php if(isset($editaSobre->titulo15_sessao1) && !empty($editaSobre->titulo15_sessao1)){ echo $editaSobre->titulo15_sessao1;}?>" />-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-6 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Link Botão</label>-->
                                    <!--            <input class="form-control" type="text" name="link_botao_6" value="<?php if(isset($editaSobre->link_botao_6) && !empty($editaSobre->link_botao_6)){ echo $editaSobre->link_botao_6;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                        <!--FIM DA TERCEIRA SEÇÃO-->
                                    <!--    <br>-->
                                    <!--    <hr>-->
                                        <!--QUARTA SEÇÃO-->
                                    <!--    <h4 class="card-title">Seção 4</h4>-->
                                    <!--    <div class="row">-->
                                    <!--    <?php if(isset($editaSobre->tem_titulo_3) && $editaSobre->tem_titulo_3 == 'S'){ ?>-->
                                    <!--        <div class="col-md-7 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Título 1</label>-->
                                    <!--            <input class="form-control" type="text" name="titulo3" value="<?php if(isset($editaSobre->titulo3) && !empty($editaSobre->titulo3)){ echo $editaSobre->titulo3;}?>" />-->
                                    <!--        </div>-->
                                    <!--    <?php }?>-->
                                    <!--        <div class="col-md-7 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Titulo 2</label>-->
                                    <!--            <input class="form-control" type="text" name="descricao3" value="<?php if(isset($editaSobre->descricao3) && !empty($editaSobre->descricao3)){ echo $editaSobre->descricao3;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <?php if(isset($editaSobre->tem_texto_4) && $editaSobre->tem_texto_4 == 'S'){ ?>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-12 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Breve</label>-->
                                    <!--            <textarea name="texto_4" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->texto_4) && !empty($editaSobre->texto_4)){ echo $editaSobre->texto_4;}?></textarea>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <?php }?>-->
                                    <!--    <br>-->
                                    <!--    <div class="row">-->
                                    <!--    <?php if(isset($editaSobre->tem_paralax_6) && $editaSobre->tem_paralax_6 == 'S'){ ?>-->
                                    <!--        <div class="col-md-5 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Imagem 1</label>-->
                                    <!--            <input class="form-control" type="file" name="paralax_6"  />-->
                                    <!--        </div>-->
                                    <!--    <?php if(isset($editaSobre->paralax_6) && !empty($editaSobre->paralax_6)){ ?>-->
                                    <!--        <div class="col-md-1 col-sm-12">-->
                                    <!--            <img src="../img/<?php echo $editaSobre->paralax_6;?>" width="100">-->
                                    <!--        </div>-->
                                    <!--    <?php }}?>-->
                                    <!--    <?php if(isset($editaSobre->tem_paralax_3) && $editaSobre->tem_paralax_3 == 'S'){ ?>-->
                                    <!--        <div class="col-md-5 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Imagem 2</label>-->
                                    <!--            <input class="form-control" type="file" name="paralax_3"  />-->
                                    <!--        </div>-->
                                    <!--    <?php if(isset($editaSobre->paralax_3) && !empty($editaSobre->paralax_3)){ ?>-->
                                    <!--        <div class="col-md-1 col-sm-12">-->
                                    <!--            <img src="../img/<?php echo $editaSobre->paralax_3;?>" width="100">-->
                                    <!--        </div>-->
                                    <!--    <?php }}?>-->
                                    <!--    </div>-->
                                    <!--    <br>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-5 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Título Imagem 1</label>-->
                                    <!--            <input class="form-control" type="text" name="titulo10_sessao1" value="<?php if(isset($editaSobre->titulo10_sessao1) && !empty($editaSobre->titulo10_sessao1)){ echo $editaSobre->titulo10_sessao1;}?>" />-->
                                    <!--        </div>-->
                                    <!--    <?php if(isset($editaSobre->tem_titulo_4) && $editaSobre->tem_titulo_4 == 'S'){ ?>-->
                                    <!--        <div class="col-md-5 col-sm-12">-->
                                    <!--            <label  class="col-form-label"><?php if(isset($editaSobre->nome_titulo4) && !empty($editaSobre->nome_titulo4)){ echo $editaSobre->nome_titulo4;}else{echo "Título Imagem 2";}?></label>-->
                                    <!--            <input class="form-control" type="text" name="titulo4" value="<?php if(isset($editaSobre->titulo4) && !empty($editaSobre->titulo4)){ echo $editaSobre->titulo4;}?>" />-->
                                    <!--        </div>-->
                                    <!--    <?php }?>-->
                                    <!--    </div>-->
                                        <!--FIM DA QUARTA SEÇÃO-->
                                    <!--    <br>-->
                                    <!--    <hr>-->
                                        <!--QUINTA SEÇÃO-->
                                    <!--    <h4 class="card-title">Seção 5, Serviços</h4>-->
                                    <!--    <div class="row">-->
                                    <!--    <?php if(isset($editaSobre->tem_texto_3) && $editaSobre->tem_texto_3 == 'S'){ ?>-->
                                    <!--        <div class="col-md-4 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Título 1</label>-->
                                    <!--            <input type="text" name="texto_3" class="form-control" value="<?php if(isset($editaSobre->texto_3) && !empty($editaSobre->texto_3)){ echo $editaSobre->texto_3;}?>" />-->
                                    <!--        </div>-->
                                    <!--    <?php }?>-->
                                    <!--        <div class="col-md-7 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Título 2</label>-->
                                    <!--            <input class="form-control" type="text" name="titulo11_sessao1" value="<?php if(isset($editaSobre->titulo11_sessao1) && !empty($editaSobre->titulo11_sessao1)){ echo $editaSobre->titulo11_sessao1;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                        <!--FIM DA QUINTA SEÇÃO-->
                                    <!--    <br>-->
                                    <!--    <hr>-->
                                        <!--SEXTA SEÇÃO-->
                                    <!--     <h4 class="card-title">Seção 6, CTA</h4>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-6 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Breve</label>-->
                                    <!--                <input class="form-control" type="text" name="titulo12_sessao1" value="<?php if(isset($editaSobre->titulo12_sessao1) && !empty($editaSobre->titulo12_sessao1)){ echo $editaSobre->titulo12_sessao1;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-4 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Nome Botão</label>-->
                                    <!--                <input class="form-control" type="text" name="descricao4" value="<?php if(isset($editaSobre->descricao4) && !empty($editaSobre->descricao4)){ echo $editaSobre->descricao4;}?>" />-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Link Botão</label>-->
                                    <!--                <input class="form-control" type="text" name="titulo16_sessao1" value="<?php if(isset($editaSobre->titulo16_sessao1) && !empty($editaSobre->titulo16_sessao1)){ echo $editaSobre->titulo16_sessao1;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                        <!--FIM DA SEXTA SEÇÃO-->
                                    <!--    <br>-->
                                    <!--    <hr>-->
                                         <!--SÉTIMA SEÇÃO-->
                                    <!--      <h4 class="card-title">Seção 7, Cards Abaixo dos Serviços</h4>-->
                                    <!--     <div class="row">-->
                                    <!--        <div class="col-md-6 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Titulo 1</label>-->
                                    <!--            <input class="form-control" type="text" name="titulo13_sessao1" value="<?php if(isset($editaSobre->titulo13_sessao1) && !empty($editaSobre->titulo13_sessao1)){ echo $editaSobre->titulo13_sessao1;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-6 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Titulo 2</label>-->
                                    <!--            <input class="form-control" type="text" name="titulo14_sessao1" value="<?php if(isset($editaSobre->titulo14_sessao1) && !empty($editaSobre->titulo14_sessao1)){ echo $editaSobre->titulo14_sessao1;}?>" />-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                        <!--FIM DA SÉTIMA SEÇÃO-->
                                    <!--    <br>-->
                                    <!--    <hr>-->
                                         <!--OITAVA SEÇÃO-->
                                    <!--     <h4 class="card-title">Seção 8, Vídeo</h4>-->
                                    <!--        <div class="row">-->
                                    <!--        <?php if(isset($editaSobre->tem_paralax_7) && $editaSobre->tem_paralax_7 == 'S'){ ?>-->
                                    <!--            <div class="col-md-4 col-sm-12">-->
                                    <!--                <label  class="col-form-label">Imagem fundo</label>-->
                                    <!--                    <input class="form-control" type="file" name="paralax_7"  />-->
                                    <!--            </div>-->
                                    <!--            <?php if(isset($editaSobre->paralax_7) && !empty($editaSobre->paralax_7)){ ?>-->
                                    <!--                <div class="col-md-1 col-sm-12">-->
                                    <!--                    <img src="../img/<?php echo $editaSobre->paralax_7;?>" width="100">-->
                                    <!--                </div>-->
                                    <!--            <?php }}?>-->
                                    <!--        </div>-->
                                    <!--        <br>-->
                                    <!--        <?php if(isset($editaSobre->tem_video) && $editaSobre->tem_video == 'S'){ ?>-->
                                    <!--        <div class="row">-->
                                    <!--             <div class="col-md-7 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Embed->https://www.youtube.com/watch?v=embed aqui</label>-->
                                    <!--            <input class="form-control" type="text" name="embed" value="<?php if(isset($editaSobre->embed) && !empty($editaSobre->embed)){ echo $editaSobre->embed;}?>" />-->
                                    <!--        </div>-->
                                    <!--        </div>-->
                                    <!--        <?php }?>-->
                                    <!--         <div class="row">-->
                                    <!--            <div class="col-md-6 col-sm-12">-->
                                    <!--                <label  class="col-form-label">Breve</label>-->
                                    <!--                <input class="form-control" type="text" name="titulo9_sessao1" value="<?php if(isset($editaSobre->titulo9_sessao1) && !empty($editaSobre->titulo9_sessao1)){ echo $editaSobre->titulo9_sessao1;}?>" />-->
                                    <!--            </div>-->
                                               
                                    <!--        </div>-->
                                    <!--        <br>-->
                                    <!--        <hr>-->
                                    <!--        <h4 class="card-title">Seção 8, Checks</h4>-->
                                    <!--        <div class="row">-->
                                    <!--            <div class="col-md-7 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Título 1</label>-->
                                    <!--                <input class="form-control" type="text" name="titulo17_sessao1" value="<?php if(isset($editaSobre->titulo17_sessao1) && !empty($editaSobre->titulo17_sessao1)){ echo $editaSobre->titulo17_sessao1;}?>" />-->
                                    <!--            </div>-->
                                    <!--             <div class="col-md-7 col-sm-12">-->
                                    <!--                <label  class="col-form-label">Título 2</label>-->
                                    <!--                <input class="form-control" type="text" name="titulo19_sessao1" value="<?php if(isset($editaSobre->titulo19_sessao1) && !empty($editaSobre->titulo19_sessao1)){ echo $editaSobre->titulo19_sessao1;}?>" />-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-7 col-sm-12">-->
                                    <!--                <label  class="col-form-label">Título 3 </label>-->
                                    <!--                <input class="form-control" type="text" name="titulo20_sessao1" value="<?php if(isset($editaSobre->titulo20_sessao1) && !empty($editaSobre->titulo20_sessao1)){ echo $editaSobre->titulo20_sessao1;}?>" />-->
                                    <!--            </div>-->
                                    <!--            <div class="col-md-7 col-sm-12">-->
                                    <!--            <label  class="col-form-label">Título 4 </label>-->
                                    <!--                <input class="form-control" type="text" name="titulo21_sessao1" value="<?php if(isset($editaSobre->titulo21_sessao1) && !empty($editaSobre->titulo21_sessao1)){ echo $editaSobre->titulo21_sessao1;}?>" />-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                            <!--FIM DA OITAVA SEÇÃO-->
                                    <!--        <br>-->
                                    <!--        <hr>-->
                                             <!--NONA SEÇÃO-->
                                    <!--        <h4 class="card-title">Seção 9, News</h4>-->
                                    <!--        <?php if(isset($editaSobre->tem_titulo_5) && $editaSobre->tem_titulo_5 == 'S'){ ?>-->
                                    <!--        <div class="row">-->
                                    <!--            <div class="col-md-6 col-sm-12">-->
                                    <!--            <label  class="col-form-label"><?php if(isset($editaSobre->nome_titulo5) && !empty($editaSobre->nome_titulo5)){ echo $editaSobre->nome_titulo5;}else{echo "Título ";}?></label>-->
                                    <!--                <input class="form-control" type="text" name="titulo5" value="<?php if(isset($editaSobre->titulo5) && !empty($editaSobre->titulo5)){ echo $editaSobre->titulo5;}?>" />-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <?php }?>-->
                                    <!--         <div class="row">-->
                                    <!--            <div class="col-md-12 col-sm-12">-->
                                    <!--                <label  class="col-form-label">Título 2 </label>-->
                                    <!--                <input class="form-control" type="text" name="texto_8" value="<?php if(isset($editaSobre->texto_8) && !empty($editaSobre->texto_8)){ echo $editaSobre->texto_8;}?>"/>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="row">-->
                                    <!--            <div class="col-md-12 col-sm-12">-->
                                    <!--                <label  class="col-form-label">Breve</label>-->
                                    <!--                <textarea name="texto_7" class="ckeditor" id="ckeditor" cols="30" rows="10"><?php if(isset($editaSobre->texto_7) && !empty($editaSobre->texto_7)){ echo $editaSobre->texto_7;}?></textarea>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                            <!--FIM DA NONA SEÇÃO-->
                                    <!--        <br>-->
                                    <!--        <hr>-->
                                            <!--DÉCIMA SEÇÃO-->
                                    <!--        <h4 class="card-title">Seção 10, Parceiros</h4>-->
                                    <!--        <div class="row">-->
                                    <!--             <div class="col-md-4 col-sm-12">-->
                                    <!--             <label  class="col-form-label">Título </label>-->
                                    <!--                <input class="form-control" type="text" name="nome_botao_7" value="<?php if(isset($editaSobre->nome_botao_7) && !empty($editaSobre->nome_botao_7)){ echo $editaSobre->nome_botao_7;}?>" />-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                            <!--FIM DA DÉCIMA SEÇÃO-->
                                    <!--        <br>-->
                                    <!--        <hr>-->
                                            <!--CAMPOS QUE PODEM SER ADICIONADOS CASO HAJA NECESSIDADE -->
                                            <!--<div class="row">-->
                                            <!--< ?php if(isset($editaSobre->tem_paralax_4) && $editaSobre->tem_paralax_4 == 'S'){ ?>-->
                                            <!--        <div class="col-md-4 col-sm-12">-->
                                            <!--            <label  class="col-form-label">Imagem Bloco 1</label>-->
                                            <!--            <input class="form-control" type="file" name="paralax_4"  />-->
                                            <!--        </div>-->
                                            <!--< ?php if(isset($editaSobre->paralax_4) && !empty($editaSobre->paralax_4)){ ?>-->
                                            <!--        <div class="col-md-4 col-sm-12">-->
                                            <!--            <img src="../img/< ?php echo $editaSobre->paralax_4;?>" width="100">-->
                                            <!--        </div>-->
                                            <!--< ?php }?>-->
                                            <!--< ?php }?>-->
                                            <!--</div>-->
                                            <!--<div class="row">-->
                                            <!--< ?php if(isset($editaSobre->tem_foto_3) && $editaSobre->tem_foto_3 == 'S'){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Imagem Bloco 2</label>-->
                                            <!--        <input class="form-control" type="file" name="foto_3"  />-->
                                            <!--    </div>-->
                                            <!--< ?php if(isset($editaSobre->foto_3) && !empty($editaSobre->foto_3)){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <img src="../img/< ?php echo $editaSobre->foto_3;?>" width="100">-->
                                            <!--    </div>-->
                                            <!--< ?php }?>-->
                                            <!--< ?php }?>-->
                                            <!--</div>-->
                                            <!--< ?php if(isset($editaSobre->tem_foto_2) && $editaSobre->tem_foto_2 == 'S'){ ?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--    <label  class="col-form-label">Imagem 1</label>-->
                                            <!--        <input class="form-control" type="file" name="foto_2"  />-->
                                            <!--    </div>-->
                                            <!--< ?php if(isset($editaSobre->foto_2) && !empty($editaSobre->foto_2)){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <img src="../img/< ?php echo $editaSobre->foto_2;?>" width="100">-->
                                            <!--    </div>-->
                                            <!--< ?php }?>-->
                                            <!--</div>-->
                                            <!--< ?php }?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Imagem 2</label>-->
                                            <!--        <input class="form-control" type="file" name="foto11_sessao1"  />-->
                                            <!--    </div>-->
                                            <!--< ?php if(isset($editaSobre->foto11_sessao1) && !empty($editaSobre->foto11_sessao1)){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <img src="../img/< ?php echo $editaSobre->foto11_sessao1;?>" width="100">-->
                                            <!--    </div>-->
                                            <!--< ?php }?>-->
                                            <!--</div>-->
                                            <!--    <br>-->
                                            <!--    <hr>-->
                                            <!--< ?php if(isset($editaSobre->tem_paralax_5) && $editaSobre->tem_paralax_5 == 'S'){ ?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Imagem 3</label>-->
                                            <!--        <input class="form-control" type="file" name="paralax_5"  />-->
                                            <!--    </div>-->
                                            <!--< ?php if(isset($editaSobre->paralax_5) && !empty($editaSobre->paralax_5)){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <img src="../img/< ?php echo $editaSobre->paralax_5;?>" width="100">-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--< ?php }}?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Imagem 4</label>-->
                                            <!--        <input class="form-control" type="file" name="paralax_testemunho"  />-->
                                            <!--    </div>-->
                                            <!--< ?php if(isset($editaSobre->paralax_testemunho) && !empty($editaSobre->paralax_testemunho)){ ?>-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <img src="../img/< ?php echo $editaSobre->paralax_testemunho;?>" width="100">-->
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
                                            <!--    < ?php if(isset($editaSobre->foto_5) && !empty($editaSobre->foto_5)){ ?>-->
                                            <!--        <div class="col-md-4 col-sm-12">-->
                                            <!--            <img src="../img/< ?php echo $editaSobre->foto_5;?>" width="100">-->
                                            <!--        </div>-->
                                            <!--    < ?php }?>-->
                                            <!--</div>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Link Botão </label>-->
                                            <!--        <input class="form-control" type="text" name="link_botao_7" value="< ?php if(isset($editaSobre->link_botao_7) && !empty($editaSobre->link_botao_7)){ echo $editaSobre->link_botao_7;}?>" />-->
                                            <!--    </div>-->
                                            <!--     <div class="col-md-4 col-sm-12">-->
                                            <!--    <label  class="col-form-label">Nome Botão </label>-->
                                            <!--        <input class="form-control" type="text" name="nome_botao_3" value="< ?php if(isset($editaSobre->nome_botao_3) && !empty($editaSobre->nome_botao_3)){ echo $editaSobre->nome_botao_3;}?>" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<br>-->
                                            <!--<hr>-->
                                            <!--< ?php if(isset($editaSobre->tem_texto_5) && $editaSobre->tem_texto_5 == 'S'){ ?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12 col-sm-12">-->
                                            <!--     <label  class="col-form-label">Breve 4</label>-->
                                            <!--        <textarea name="texto_5" class="ckeditor" id="ckeditor" cols="30" rows="10">< ?php if(isset($editaSobre->texto_5) && !empty($editaSobre->texto_5)){ echo $editaSobre->texto_5;}?></textarea>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--< ?php }?>-->
                                            <!--< ?php if(isset($editaSobre->tem_titulo_sessao_sobre) && $editaSobre->tem_titulo_sessao_sobre == 'S'){ ?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-12 col-sm-12">-->
                                            <!--     <label  class="col-form-label">Titulo 5</label>-->
                                            <!--        <input class="form-control" type="text" name="titulo_sessao_sobre" value="< ?php if(isset($editaSobre->titulo_sessao_sobre) && !empty($editaSobre->titulo_sessao_sobre)){ echo $editaSobre->titulo_sessao_sobre;}?>" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--< ?php }?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--        <label  class="col-form-label">Nome Botão </label>-->
                                            <!--        <input class="form-control" type="text" name="nome_botao_2" value="< ?php if(isset($editaSobre->nome_botao_2) && !empty($editaSobre->nome_botao_2)){ echo $editaSobre->nome_botao_2;}?>" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<hr>-->
                                            <!--< ?php if(isset($editaSobre->tem_botao_2) && $editaSobre->tem_botao_2 == 'S'){ ?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--    <label  class="col-form-label">Link Botão 2</label>-->
                                            <!--        <input class="form-control" type="text" name="link_botao_2" value="< ?php if(isset($editaSobre->link_botao_2) && !empty($editaSobre->link_botao_2)){ echo $editaSobre->link_botao_2;}?>" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--< ?php }?>-->
                                            <!--<div class="row">-->
                                            <!--    <div class="col-md-4 col-sm-12">-->
                                            <!--    <label  class="col-form-label">Link Botão 3</label>-->
                                            <!--        <input class="form-control" type="text" name="link_botao_3" value="< ?php if(isset($editaSobre->link_botao_3) && !empty($editaSobre->link_botao_3)){ echo $editaSobre->link_botao_3;}?>" />-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!-- FIM DOS CAMPOS QUE PODEM SER ADICIONADOS CASO HAJA NECESSIDADE -->
                                        

                                        <!-- BLOCO METAS TAG -->

                                        <?php if(isset($editaSobre->tem_metas_tag) && $editaSobre->tem_metas_tag == 'S'){ ?>
                                        <h4 class="card-title">Metas Tags</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Title</label>
                                                    <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editaSobre->meta_title) && !empty($editaSobre->meta_title)){ echo $editaSobre->meta_title;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editaSobre->meta_keywords) && !empty($editaSobre->meta_keywords)){ echo $editaSobre->meta_keywords;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editaSobre->meta_description) && !empty($editaSobre->meta_description)){ echo $editaSobre->meta_description;}?></textarea>
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
                                    <input type="hidden" name="acao" value="editaSobre">
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaSobre->foto) && !empty($editaSobre->foto)){ echo $editaSobre->foto;}?>">
                                    <input type="hidden" name="foto_2_Atual" value="<?php if(isset($editaSobre->foto_2) && !empty($editaSobre->foto_2)){ echo $editaSobre->foto_2;}?>">
                                    <input type="hidden" name="foto_3_Atual" value="<?php if(isset($editaSobre->foto_3) && !empty($editaSobre->foto_3)){ echo $editaSobre->foto_3;}?>">
                                    <input type="hidden" name="foto_4_Atual" value="<?php if(isset($editaSobre->foto_4) && !empty($editaSobre->foto_4)){ echo $editaSobre->foto_4;}?>">
                                    <input type="hidden" name="foto_5_Atual" value="<?php if(isset($editaSobre->foto_5) && !empty($editaSobre->foto_5)){ echo $editaSobre->foto_5;}?>">
                                    <input type="hidden" name="foto_6_Atual" value="<?php if(isset($editaSobre->foto_6) && !empty($editaSobre->foto_6)){ echo $editaSobre->foto_6;}?>">
                                    <input type="hidden" name="foto_7_Atual" value="<?php if(isset($editaSobre->foto_7) && !empty($editaSobre->foto_7)){ echo $editaSobre->foto_7;}?>">
                                    <input type="hidden" name="foto_8_Atual" value="<?php if(isset($editaSobre->foto_8) && !empty($editaSobre->foto_8)){ echo $editaSobre->foto_8;}?>">
                                    <input type="hidden" name="paralax_1_Atual" value="<?php if(isset($editaSobre->paralax_1) && !empty($editaSobre->paralax_1)){ echo $editaSobre->paralax_1;}?>">
                                    <input type="hidden" name="paralax_2_Atual" value="<?php if(isset($editaSobre->paralax_2) && !empty($editaSobre->paralax_2)){ echo $editaSobre->paralax_2;}?>">
                                    <input type="hidden" name="paralax_3_Atual" value="<?php if(isset($editaSobre->paralax_3) && !empty($editaSobre->paralax_3)){ echo $editaSobre->paralax_3;}?>">
                                    <input type="hidden" name="paralax_4_Atual" value="<?php if(isset($editaSobre->paralax_4) && !empty($editaSobre->paralax_4)){ echo $editaSobre->paralax_4;}?>">
                                    <input type="hidden" name="paralax_5_Atual" value="<?php if(isset($editaSobre->paralax_5) && !empty($editaSobre->paralax_5)){ echo $editaSobre->paralax_5;}?>">
                                    <input type="hidden" name="paralax_6_Atual" value="<?php if(isset($editaSobre->paralax_6) && !empty($editaSobre->paralax_6)){ echo $editaSobre->paralax_6;}?>">
                                    <input type="hidden" name="paralax_7_Atual" value="<?php if(isset($editaSobre->paralax_7) && !empty($editaSobre->paralax_7)){ echo $editaSobre->paralax_7;}?>">
                                    <input type="hidden" name="paralax_8_Atual" value="<?php if(isset($editaSobre->paralax_8) && !empty($editaSobre->paralax_8)){ echo $editaSobre->paralax_8;}?>">
                                    <input type="hidden" name="foto11_sessao1_Atual" value="<?php if(isset($editaSobre->foto11_sessao1) && !empty($editaSobre->foto11_sessao1)){ echo $editaSobre->foto11_sessao1;}?>">
                                    <input type="hidden" name="foto10_sessao1_Atual" value="<?php if(isset($editaSobre->foto10_sessao1) && !empty($editaSobre->foto10_sessao1)){ echo $editaSobre->foto10_sessao1;}?>">
                                    <input type="hidden" name="paralax_testemunho_Atual" value="<?php if(isset($editaSobre->paralax_testemunho) && !empty($editaSobre->paralax_testemunho)){ echo $editaSobre->paralax_testemunho;}?>">
                                    <input type="hidden" name="id" value="<?php if(isset($editaSobre->id) && !empty($editaSobre->id)){ echo $editaSobre->id;}?>">
                                    <input type="hidden" name="pagina_individual" value="<?php if(isset($_GET['pi']) && $_GET['pi'] == 'S'){echo "S";}else{echo "N";}?>">
                                     <input type="hidden" name="titulo18_sessao1_Atual" value="<?php if(isset($editaSobre->titulo18_sessao1) && !empty($editaSobre->titulo18_sessao1)){ echo $editaSobre->titulo18_sessao1;}?>">
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