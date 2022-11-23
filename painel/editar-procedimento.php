<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: procedimentos.php');
    }else{
        $id = $_GET['id'];        
    }
}
$procedimentos->editar();
$editaProcedimento = $procedimentos->rsDados($id);
$puxaCategorias = $categorias->rsDados();
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
    <title>Painel Hoogli - Editar Projetos</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar Projeto</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="procedimentos.php" class="text-muted">Projetos</a></li>
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
                                    <div class="form-body">
                                         <h4 class="card-title">Categoria</h4>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                <label class="mr-sm-2" >Categoria</label>
                                                <select class="custom-select mr-sm-2" name="id_cat" >
                                                    <?php foreach ($puxaCategorias as $categoria){?>
                                                    <option value="<?php echo $categoria->id;?>" <?php if($categoria->id == $id){?> selected <?php } ?> ><?php echo $categoria->nome;?></option>
                                                    <?php }?>
    
                                                </select>
                                                </div>
                                            </div>
                                        </div>                                             
                                        <h4 class="card-title">Página Lojas</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo" value="<?php if(isset($editaProcedimento->titulo) && !empty($editaProcedimento->titulo)){ echo $editaProcedimento->titulo;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Foto Capa</label>
                                                    <input type="file" class="form-control" name="topico1_foto" >
                                                </div>
                                            </div>
                                        
                                            <?php if(isset($editaProcedimento->topico1_foto) && !empty($editaProcedimento->topico1_foto)){ ?>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                <img src="../img/<?php echo $editaProcedimento->topico1_foto;?>" width="100" alt="">
                                                    </div>
                                                </div>
                                            <?php }?>  
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Icone</label>
                                                    <input type="file" class="form-control" name="icone" >
                                                </div>
                                            </div>
                                        
                                            <?php if(isset($editaProcedimento->icone) && !empty($editaProcedimento->icone)){ ?>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                <img src="../img/<?php echo $editaProcedimento->icone;?>" width="100" alt="">
                                                    </div>
                                                </div>
                                            <?php }?>  
                                        </div>
                                        <br>
                                        <hr>
                                        <h4 class="card-title">Página Descrição Loja</h4>
                                         <div class="row">
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem fundo</label>
                                                    <input type="file" class="form-control" name="sessao1_paralax" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaProcedimento->sessao1_paralax) && !empty($editaProcedimento->sessao1_paralax)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaProcedimento->sessao1_paralax;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <div class="row">
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Foto Página Projeto</label>
                                                    <input type="file" class="form-control" name="foto_projeto" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaProcedimento->foto_projeto) && !empty($editaProcedimento->foto_projeto)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaProcedimento->foto_projeto;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <div class="row">
                                              
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Paralax desc projeto</label>
                                                    <input type="file" class="form-control" name="sessao2_paralax" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaProcedimento->sessao2_paralax) && !empty($editaProcedimento->sessao2_paralax)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaProcedimento->sessao2_paralax;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Banner </label>
                                                    <input type="file" class="form-control" name="sessao3_paralax" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaProcedimento->sessao3_paralax) && !empty($editaProcedimento->sessao3_paralax)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaProcedimento->sessao3_paralax;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div> 
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="descricao" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaProcedimento->descricao) && !empty($editaProcedimento->descricao)){ echo $editaProcedimento->descricao;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="sessao1_nome_botao" value="<?php if(isset($editaProcedimento->sessao1_nome_botao) && !empty($editaProcedimento->sessao1_nome_botao)){ echo $editaProcedimento->sessao1_nome_botao;}?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="sessao1_link_botao" value="<?php if(isset($editaProcedimento->sessao1_link_botao) && !empty($editaProcedimento->sessao1_link_botao)){ echo $editaProcedimento->sessao1_link_botao;}?>">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h4 class="card-title">Sessão Cliente</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">titulo 1</label>
                                                    <input type="text" class="form-control" name="contato_titulo" value="<?php if(isset($editaProcedimento->contato_titulo) && !empty($editaProcedimento->contato_titulo)){ echo $editaProcedimento->contato_titulo;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Breve 1</label>
                                                    <input type="text" class="form-control" name="contato_titulo2" value="<?php if(isset($editaProcedimento->contato_titulo2) && !empty($editaProcedimento->contato_titulo2)){ echo $editaProcedimento->contato_titulo2;}?>" >
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Foto</label>
                                                    <input type="file" class="form-control" name="contato_foto" >
                                                </div>
                                            </div>
                                        
                                            <?php if(isset($editaProcedimento->contato_foto) && !empty($editaProcedimento->contato_foto)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <img src="../img/<?php echo $editaProcedimento->contato_foto;?>" width="150" alt="">
                                                    </div>
                                                </div>
                                            <?php }?>  -->
                                            <!--<div class="col-md-6">-->
                                            <!--    <div class="form-group">-->
                                            <!--    <label class="mr-sm-2" for="">Botão</label>-->
                                            <!--        <input type="text" class="form-control" name="contato_botao" value="<?php if(isset($editaProcedimento->contato_botao) && !empty($editaProcedimento->contato_botao)){ echo $editaProcedimento->contato_botao;}?>" >-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Titulo 2</label>
                                                    <input type="text" class="form-control" name="contato_texto" value="<?php if(isset($editaProcedimento->contato_texto) && !empty($editaProcedimento->contato_texto)){ echo $editaProcedimento->contato_texto;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Breve 2</label>
                                                    <input type="text" class="form-control" name="sessao4_titulo" value="<?php if(isset($editaProcedimento->sessao4_titulo) && !empty($editaProcedimento->sessao4_titulo)){ echo $editaProcedimento->sessao4_titulo;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 3</label>
                                                    <input type="text" class="form-control" name="sessao4_titulo2" value="<?php if(isset($editaProcedimento->sessao4_titulo2) && !empty($editaProcedimento->sessao4_titulo2)){ echo $editaProcedimento->sessao4_titulo2;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Breve 3</label>
                                                    <input type="text" class="form-control" name="topico3_titulo" value="<?php if(isset($editaProcedimento->topico3_titulo) && !empty($editaProcedimento->topico3_titulo)){ echo $editaProcedimento->topico3_titulo;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 4</label>
                                                    <input type="text" class="form-control" name="topico3_texto" value="<?php if(isset($editaProcedimento->topico3_texto) && !empty($editaProcedimento->topico3_texto)){ echo $editaProcedimento->topico3_texto;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Breve 4</label>
                                                    <input type="text" class="form-control" name="topico1_texto" value="<?php if(isset($editaProcedimento->topico1_texto) && !empty($editaProcedimento->topico1_texto)){ echo $editaProcedimento->topico1_texto;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Instagram</label>
                                                    <input type="text" class="form-control" name="topico2_foto" value="<?php if(isset($editaProcedimento->topico2_foto) && !empty($editaProcedimento->topico2_foto)){ echo $editaProcedimento->topico2_foto;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Facebook</label>
                                                    <input type="text" class="form-control" name="topico2_titulo" value="<?php if(isset($editaProcedimento->topico2_titulo) && !empty($editaProcedimento->topico2_titulo)){ echo $editaProcedimento->topico2_titulo;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Twitter</label>
                                                    <input type="text" class="form-control" name="topico2_texto" value="<?php if(isset($editaProcedimento->topico2_texto) && !empty($editaProcedimento->topico2_texto)){ echo $editaProcedimento->topico2_texto;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Pinterest</label>
                                                    <input type="text" class="form-control" name="topico3_foto" value="<?php if(isset($editaProcedimento->topico3_foto) && !empty($editaProcedimento->topico3_foto)){ echo $editaProcedimento->topico3_foto;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        <hr>

                                        <h4 class="card-title">Sessão 1</h4>
                                       
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao1_titulo" value="<?php if(isset($editaProcedimento->sessao1_titulo) && !empty($editaProcedimento->sessao1_titulo)){ echo $editaProcedimento->sessao1_titulo;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem</label>
                                                    <input type="file" class="form-control" name="sessao1_foto" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaProcedimento->sessao1_foto) && !empty($editaProcedimento->sessao1_foto)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaProcedimento->sessao1_foto;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                   <textarea name="sessao1_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaProcedimento->sessao1_texto) && !empty($editaProcedimento->sessao1_texto)){ echo $editaProcedimento->sessao1_texto;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                        <hr>

                                        <h4 class="card-title">Sessão 2</h4>
                                       
                                        <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 1 </label>
                                                    <input type="text" class="form-control" name="sessao2_titulo" value="<?php if(isset($editaProcedimento->sessao2_titulo) && !empty($editaProcedimento->sessao2_titulo)){ echo $editaProcedimento->sessao2_titulo;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 2</label>
                                                    <input type="text" class="form-control" name="sessao2_titulo2" value="<?php if(isset($editaProcedimento->sessao2_titulo2) && !empty($editaProcedimento->sessao2_titulo2)){ echo $editaProcedimento->sessao2_titulo2;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 3 </label>
                                                    <input type="text" class="form-control" name="titulo6_porcen" value="<?php if(isset($editaProcedimento->titulo6_porcen) && !empty($editaProcedimento->titulo6_porcen)){ echo $editaProcedimento->titulo6_porcen;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 4</label>
                                                    <input type="text" class="form-control" name="titulo_porcen" value="<?php if(isset($editaProcedimento->titulo_porcen) && !empty($editaProcedimento->titulo_porcen)){ echo $editaProcedimento->titulo_porcen;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 5 </label>
                                                    <input type="text" class="form-control" name="titulo2_porcen" value="<?php if(isset($editaProcedimento->titulo2_porcen) && !empty($editaProcedimento->titulo2_porcen)){ echo $editaProcedimento->titulo2_porcen;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 6</label>
                                                    <input type="text" class="form-control" name="titulo3_porcen" value="<?php if(isset($editaProcedimento->titulo3_porcen) && !empty($editaProcedimento->titulo3_porcen)){ echo $editaProcedimento->titulo3_porcen;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 7 </label>
                                                    <input type="text" class="form-control" name="titulo4_porcen" value="<?php if(isset($editaProcedimento->titulo4_porcen) && !empty($editaProcedimento->titulo4_porcen)){ echo $editaProcedimento->titulo4_porcen;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 8</label>
                                                    <input type="text" class="form-control" name="titulo5_porcen" value="<?php if(isset($editaProcedimento->titulo5_porcen) && !empty($editaProcedimento->titulo5_porcen)){ echo $editaProcedimento->titulo5_porcen;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="row">-->
                                           
                                        <!--    <div class="col-md-4">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Imagem</label>-->
                                        <!--            <input type="file" class="form-control" name="sessao2_foto" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <?php if(isset($editaProcedimento->sessao2_foto) && !empty($editaProcedimento->sessao2_foto)){ ?>-->
                                        <!--    <div class="col-md-3">-->
                                        <!--        <div class="form-group">-->
                                        <!--       <img src="../img/<?php echo $editaProcedimento->sessao2_foto;?>" width="150" alt="">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <?php }?>-->
                                        <!--</div>-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                   <textarea name="sessao2_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaProcedimento->sessao2_texto) && !empty($editaProcedimento->sessao2_texto)){ echo $editaProcedimento->sessao2_texto;}?></textarea>
                                                </div>
                                            </div>   
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem</label>
                                                    <input type="file" class="form-control" name="sessao3_foto" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaProcedimento->sessao3_foto) && !empty($editaProcedimento->sessao3_foto)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaProcedimento->sessao3_foto;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-6">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Nome Botão</label>
                                                   <input type="text" class="form-control" name="sessao2_nome_botao" value="<?php if(isset($editaProcedimento->sessao2_nome_botao) && !empty($editaProcedimento->sessao2_nome_botao)){ echo $editaProcedimento->sessao2_nome_botao;}?>">
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Link Botão</label>
                                                   <input type="text" class="form-control" name="sessao2_link_botao" value="<?php if(isset($editaProcedimento->sessao2_link_botao) && !empty($editaProcedimento->sessao2_link_botao)){ echo $editaProcedimento->sessao2_link_botao;}?>">
                                               </div>
                                           </div>
                                       </div>
                                        
                                        <hr>

                                        <h4 class="card-title" >Sessão 3</h4>
                                        
                                        <div class="row" >
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao3_titulo" value="<?php if(isset($editaProcedimento->sessao3_titulo) && !empty($editaProcedimento->sessao3_titulo)){ echo $editaProcedimento->sessao3_titulo;}?>" >
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                   <textarea name="sessao3_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaProcedimento->sessao3_texto) && !empty($editaProcedimento->sessao3_texto)){ echo $editaProcedimento->sessao3_texto;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                           
                                           <div class="col-md-6">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Nome Botão</label>
                                                   <input type="text" class="form-control" name="sessao3_nome_botao" value="<?php if(isset($editaProcedimento->sessao3_nome_botao) && !empty($editaProcedimento->sessao3_nome_botao)){ echo $editaProcedimento->sessao3_nome_botao;}?>">
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Link Botão</label>
                                                   <input type="text" class="form-control" name="sessao3_link_botao" value="<?php if(isset($editaProcedimento->sessao3_link_botao) && !empty($editaProcedimento->sessao3_link_botao)){ echo $editaProcedimento->sessao3_link_botao;}?>">
                                               </div>
                                           </div>
                                       </div>
                                        <hr>
                                        
                                        
                                        <h4 class="card-title">Sessão 4</h4>
                                        <div class="row">
                                          
                                            <div class="col-md-6">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Titulo</label>
                                                   <input type="text" class="form-control" name="sessao4_nome_botao" value="<?php if(isset($editaProcedimento->sessao4_nome_botao) && !empty($editaProcedimento->sessao4_nome_botao)){ echo $editaProcedimento->sessao4_nome_botao;}?>">
                                               </div>
                                           </div>
                                            
                                           
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="sessao4_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaProcedimento->sessao4_texto) && !empty($editaProcedimento->sessao4_texto)){ echo $editaProcedimento->sessao4_texto;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                        <!--<div class="row" >-->
                                           
                                        <!--    <div class="col-md-4">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Imagem</label>-->
                                        <!--            <input type="file" class="form-control" name="sessao4_foto" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    < ?php if(isset($editaProcedimento->sessao4_foto) && !empty($editaProcedimento->sessao4_foto)){ ?>-->
                                        <!--    <div class="col-md-3">-->
                                        <!--        <div class="form-group">-->
                                        <!--       <img src="../img/< ?php echo $editaProcedimento->sessao4_foto;?>" width="150" alt="">-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    < ?php }?>-->
                                        <!--</div>-->
                                   
                                       
                                        <div class="row">
                                           
                                           
                                           <div class="col-md-6">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Link Botão</label>
                                                   <input type="text" class="form-control" name="sessao4_link_botao" value="<?php if(isset($editaProcedimento->sessao4_link_botao) && !empty($editaProcedimento->sessao4_link_botao)){ echo $editaProcedimento->sessao4_link_botao;}?>">
                                               </div>
                                           </div>
                                       </div>
                                        <hr>

                                        
                                      <br>
                                        
                                        <h4 class="card-title">Metas Tags</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Title</label>
                                                    <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editaProcedimento->meta_title) && !empty($editaProcedimento->meta_title)){ echo $editaProcedimento->meta_title;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editaProcedimento->meta_keywords) && !empty($editaProcedimento->meta_keywords)){ echo $editaProcedimento->meta_keywords;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editaProcedimento->meta_description) && !empty($editaProcedimento->meta_description)){ echo $editaProcedimento->meta_description;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">URL Amigavel</label>
                                                    <input type="text" class="form-control" name="url_amigavel" value="<?php if(isset($editaProcedimento->url_amigavel) && !empty($editaProcedimento->url_amigavel)){ echo $editaProcedimento->url_amigavel;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Salvar</button>
                                            <button type="reset" class="btn btn-dark">Resetar</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="acao" value="editaProcedimento">
                                    <input type="hidden" name="id" value="<?php echo $editaProcedimento->id;?>">
                                    <input type="hidden" name="sessao1_foto_Atual" value="<?php if(isset($editaProcedimento->sessao1_foto) && !empty($editaProcedimento->sessao1_foto)){ echo $editaProcedimento->sessao1_foto;}?>">
                                    <input type="hidden" name="sessao2_foto_Atual" value="<?php if(isset($editaProcedimento->sessao2_foto) && !empty($editaProcedimento->sessao2_foto)){ echo $editaProcedimento->sessao2_foto;}?>">
                                    <input type="hidden" name="sessao4_foto_Atual" value="<?php if(isset($editaProcedimento->sessao4_foto) && !empty($editaProcedimento->sessao4_foto)){ echo $editaProcedimento->sessao4_foto;}?>">
                                    <input type="hidden" name="sessao3_foto_Atual" value="<?php if(isset($editaProcedimento->sessao3_foto) && !empty($editaProcedimento->sessao3_foto)){ echo $editaProcedimento->sessao3_foto;}?>">
                                    <input type="hidden" name="sessao1_paralax_Atual" value="<?php if(isset($editaProcedimento->sessao1_paralax) && !empty($editaProcedimento->sessao1_paralax)){ echo $editaProcedimento->sessao1_paralax;}?>">
                                    <input type="hidden" name="sessao2_paralax_Atual" value="<?php if(isset($editaProcedimento->sessao2_paralax) && !empty($editaProcedimento->sessao2_paralax)){ echo $editaProcedimento->sessao2_paralax;}?>">
                                    <input type="hidden" name="sessao3_paralax_Atual" value="<?php if(isset($editaProcedimento->sessao3_paralax) && !empty($editaProcedimento->sessao3_paralax)){ echo $editaProcedimento->sessao3_paralax;}?>">
                                    <input type="hidden" name="icone_Atual" value="<?php if(isset($editaProcedimento->icone) && !empty($editaProcedimento->icone)){ echo $editaProcedimento->icone;}?>">
                                    <input type="hidden" name="topico1_foto_Atual" value="<?php if(isset($editaProcedimento->topico1_foto) && !empty($editaProcedimento->topico1_foto)){ echo $editaProcedimento->topico1_foto;}?>">
                                    <input type="hidden" name="foto_projeto_Atual" value="<?php if(isset($editaProcedimento->foto_projeto) && !empty($editaProcedimento->foto_projeto)){ echo $editaProcedimento->foto_projeto;}?>">
                                    <input type="hidden" name="foto_desc_projeto_Atual" value="<?php if(isset($editaProcedimento->foto_desc_projeto_Atual) && !empty($editaProcedimento->foto_desc_projeto_Atual)){ echo $editaProcedimento->foto_desc_projeto_Atual;}?>">
                                    <!-- <input type="hidden" name="contato_foto_Atual" value="<?php if(isset($editaProcedimento->contato_foto) && !empty($editaProcedimento->contato_foto)){ echo $editaProcedimento->contato_foto;}?>"> -->
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
</body>
</html>