<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: servico.php');
    }else{
        $id = $_GET['id'];        
    }
}
$servicos->editar();
$editaServico = $servicos->rsDados($id);
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
    <title>Painel Hoogli - Editar Serviços</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Adicionar Serviço</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="servicos.php" class="text-muted">Serviços</a></li>
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
                                        <h4 class="card-title">Título Serviço</h4>
                                        <div class="row">
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Ordem</label>
                                                    <input type="number" class="form-control" name="ordem" value="<?php if(isset($editaServico->ordem) && !empty($editaServico->ordem)){ echo $editaServico->ordem;}?>" >
                                                </div>
                                            </div>
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo" value="<?php if(isset($editaServico->titulo) && !empty($editaServico->titulo)){ echo $editaServico->titulo;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Icone</label>
                                                    <input type="file" class="form-control" name="icone" >
                                                </div>
                                            </div>
                                            
                                        
                                            <?php if(isset($editaServico->icone) && !empty($editaServico->icone)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                <img src="../img/<?php echo $editaServico->icone;?>" width="150" alt="">
                                                    </div>
                                                </div>
                                            <?php }?>  
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Foto Principal</label>
                                                    <input type="file" class="form-control" name="sessao1_paralax" >
                                                </div>
                                            </div>
                                             <?php if(isset($editaServico->sessao1_paralax) && !empty($editaServico->sessao1_paralax)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                <img src="../img/<?php echo $editaServico->sessao1_paralax;?>" width="150" alt="">
                                                    </div>
                                                </div>
                                            <?php }?>  
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="descricao" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->descricao) && !empty($editaServico->descricao)){ echo $editaServico->descricao;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row" >
                                           
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Banner Principal </label>
                                                    <input type="file" class="form-control" name="sessao4_foto" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaServico->sessao4_foto) && !empty($editaServico->sessao4_foto)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaServico->sessao4_foto;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <hr>

                                        <h4 class="card-title">Sessão 1</h4>
                                        
                                       
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título Texto</label>
                                                    <input type="text" class="form-control" name="sessao1_titulo" value="<?php if(isset($editaServico->sessao1_titulo) && !empty($editaServico->sessao1_titulo)){ echo $editaServico->sessao1_titulo;}?>" >
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto 1</label>
                                                   <textarea name="sessao1_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->sessao1_texto) && !empty($editaServico->sessao1_texto)){ echo $editaServico->sessao1_texto;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="form-group row">

                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label"> Titulo CTA 1 </label>
                                                <input class="form-control" type="text" name="topico1_titulo"
                                                    value="<?php if(isset($editaServico->topico1_titulo) && !empty($editaServico->topico1_titulo)){ echo $editaServico->topico1_titulo;}?>" />
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Nome Botão CTA 1</label>
                                                <input class="form-control" type="text" name="topico1_texto"
                                                    value="<?php if(isset($editaServico->topico1_texto) && !empty($editaServico->topico1_texto)){ echo $editaServico->topico1_texto;}?>" />
                                            </div>
                                            
                                             <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Link Botão CTA 1</label>
                                                <input class="form-control" type="text" name="topico1_foto"
                                                    value="<?php if(isset($editaServico->topico1_foto) && !empty($editaServico->topico1_foto)){ echo $editaServico->topico1_foto;}?>" />
                                            </div>
                                           
                                        </div>
                                        
                                        <div class="form-group row">

                                            <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto 2</label>
                                                <textarea name="topico3_texto" class="ckeditor" id="ckeditor" cols="30"
                                                    rows="10"><?php if(isset($editaServico->topico3_texto) && !empty($editaServico->topico3_texto)){ echo $editaServico->topico3_texto;}?></textarea>
                                            </div>

                                        </div>
                                        <div class="form-group row">

                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label"> Titulo CTA 2 </label> 
                                                <input class="form-control" type="text" name="topico2_foto"
                                                    value="<?php if(isset($editaServico->topico2_foto) && !empty($editaServico->topico2_foto)){ echo $editaServico->topico2_foto;}?>" />
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            
                                            <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Nome Botão CTA 2</label>
                                                <input class="form-control" type="text" name="topico2_titulo"
                                                    value="<?php if(isset($editaServico->topico2_titulo) && !empty($editaServico->topico2_titulo)){ echo $editaServico->topico2_titulo;}?>" />
                                            </div>
                                            
                                             <div class="col-md-6 col-sm-12">
                                                <label class="col-form-label">Link Botão CTA 2</label>
                                                <input class="form-control" type="text" name="topico2_texto"
                                                    value="<?php if(isset($editaServico->topico2_texto) && !empty($editaServico->topico2_texto)){ echo $editaServico->topico2_texto;}?>" />
                                            </div>
                                           
                                        </div>
                                         <div class="col-md-12 col-sm-12">
                                                <label class="col-form-label">Texto 3</label>
                                                <textarea name="topico4_texto" class="ckeditor" id="ckeditor" cols="30"
                                                    rows="10"><?php if(isset($editaServico->topico4_texto) && !empty($editaServico->topico4_texto)){ echo $editaServico->topico4_texto;}?></textarea>
                                            </div>
                                        <hr>
                                       

                                        <h4 class="card-title">Sessão 2-Caixas de texto </h4>
                                         

                                        <div class="row">
                                           
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Icone 1 (caixa de texto)</label>
                                                    <input type="file" class="form-control" name="sessao2_foto" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaServico->sessao2_foto) && !empty($editaServico->sessao2_foto)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaServico->sessao2_foto;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                        <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 1 (caixa de texto)</label>
                                                    <input type="text" class="form-control" name="sessao2_titulo" value="<?php if(isset($editaServico->sessao2_titulo) && !empty($editaServico->sessao2_titulo)){ echo $editaServico->sessao2_titulo;}?>" >
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto 1 (caixa de texto)</label>
                                                   <textarea name="sessao2_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->sessao2_texto) && !empty($editaServico->sessao2_texto)){ echo $editaServico->sessao2_texto;}?></textarea>
                                                </div>
                                            </div>          
                                            
                                            </div>
                                            
                                                <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-4" for="">Icone 2 (caixa de texto)</label>
                                                    <input type="file" class="form-control" name="sessao3_paralax" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaServico->sessao3_paralax) && !empty($editaServico->sessao3_paralax)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaServico->sessao3_paralax;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div> 
                                       
                                        <div class"row">
                                                    <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 2 (caixa de texto)</label>
                                                    <input type="text" class="form-control" name="sessao2_titulo2" value="<?php if(isset($editaServico->sessao2_titulo2) && !empty($editaServico->sessao2_titulo2)){ echo $editaServico->sessao2_titulo2;}?>" >
                                                </div>
                                            </div> 
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto 2 (caixa de texto)</label>
                                                   <textarea name="sessao2_nome_botao" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->sessao2_nome_botao) && !empty($editaServico->sessao2_nome_botao)){ echo $editaServico->sessao2_nome_botao;}?></textarea>
                                                </div>
                                            </div>        
                                        </div>
                                             
                                        
                                        
                                       <!-- <div class="row">-->
                                           
                                       <!--    <div class="col-md-6">-->
                                       <!--        <div class="form-group">-->
                                       <!--        <label class="mr-sm-2" for="">Link Botão</label>-->
                                       <!--            <input type="text" class="form-control" name="sessao2_link_botao" value="< ?php if(isset($editaServico->sessao2_link_botao) && !empty($editaServico->sessao2_link_botao)){ echo $editaServico->sessao2_link_botao;}?>">-->
                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--</div>-->
                                        
                                        <hr>

                                        <h4 class="card-title" >Sessão 3</h4>
                                        
                                        <div class="row" >
                                             <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem ao lado do texto</label>
                                                    <input type="file" class="form-control" name="sessao3_foto" >
                                                </div>
                                            </div>
                                            <?php if(isset($editaServico->sessao3_foto) && !empty($editaServico->sessao3_foto)){ ?>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                               <img src="../img/<?php echo $editaServico->sessao3_foto;?>" width="150" alt="">
                                                </div>
                                            </div>
                                            <?php }?>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título bullet</label>
                                                    <input type="text" class="form-control" name="sessao3_titulo" value="<?php if(isset($editaServico->sessao3_titulo) && !empty($editaServico->sessao3_titulo)){ echo $editaServico->sessao3_titulo;}?>" >
                                                </div>
                                            </div>
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Subtitulo bullet</label>
                                                    <input type="text" class="form-control" name="sessao4_titulo2" value="<?php if(isset($editaServico->sessao4_titulo2) && !empty($editaServico->sessao4_titulo2)){ echo $editaServico->sessao4_titulo2;}?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto bullet</label>
                                                   <textarea name="sessao3_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->sessao3_texto) && !empty($editaServico->sessao3_texto)){ echo $editaServico->sessao3_texto;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                       
                                        <hr>
                                        
                                        
                                        <h4 class="card-title">Sessão 4</h4>
                                        <div class="row">
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título form</label>
                                                    <input type="text" class="form-control" name="sessao4_titulo" value="<?php if(isset($editaServico->sessao4_titulo) && !empty($editaServico->sessao4_titulo)){ echo $editaServico->sessao4_titulo;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Breve form</label>
                                                   <input type="text" class="form-control" name="sessao4_nome_botao" value="<?php if(isset($editaServico->sessao4_nome_botao) && !empty($editaServico->sessao4_nome_botao)){ echo $editaServico->sessao4_nome_botao;}?>">
                                               </div>
                                           </div>
                                           
                                        </div>
                                        
                                   
                                       
                                           <div class="row">
                                           <div class="col-md-6">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Nome Botão acima do form</label>
                                                   <input type="text" class="form-control" name="sessao3_nome_botao" value="<?php if(isset($editaServico->sessao3_nome_botao) && !empty($editaServico->sessao3_nome_botao)){ echo $editaServico->sessao3_nome_botao;}?>">
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-group">
                                               <label class="mr-sm-2" for="">Link Botão acima do form</label>
                                                   <input type="text" class="form-control" name="sessao4_link_botao" value="<?php if(isset($editaServico->sessao4_link_botao) && !empty($editaServico->sessao4_link_botao)){ echo $editaServico->sessao4_link_botao;}?>">
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
                                                    <input type="text" class="form-control" name="meta_title" value="<?php if(isset($editaServico->meta_title) && !empty($editaServico->meta_title)){ echo $editaServico->meta_title;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" value="<?php if(isset($editaServico->meta_keywords) && !empty($editaServico->meta_keywords)){ echo $editaServico->meta_keywords;}?>">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"><?php if(isset($editaServico->meta_description) && !empty($editaServico->meta_description)){ echo $editaServico->meta_description;}?></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">URL Amigavel</label>
                                                    <input type="text" class="form-control" name="url_amigavel" value="<?php if(isset($editaServico->url_amigavel) && !empty($editaServico->url_amigavel)){ echo $editaServico->url_amigavel;}?>">
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
                                    <input type="hidden" name="acao" value="editaServico">
                                    <input type="hidden" name="id" value="<?php echo $editaServico->id;?>">
                                    <input type="hidden" name="sessao1_foto_Atual" value="<?php if(isset($editaServico->sessao1_foto) && !empty($editaServico->sessao1_foto)){ echo $editaServico->sessao1_foto;}?>">
                                    <input type="hidden" name="sessao2_foto_Atual" value="<?php if(isset($editaServico->sessao2_foto) && !empty($editaServico->sessao2_foto)){ echo $editaServico->sessao2_foto;}?>">
                                    <input type="hidden" name="sessao4_foto_Atual" value="<?php if(isset($editaServico->sessao4_foto) && !empty($editaServico->sessao4_foto)){ echo $editaServico->sessao4_foto;}?>">
                                    <input type="hidden" name="sessao3_foto_Atual" value="<?php if(isset($editaServico->sessao3_foto) && !empty($editaServico->sessao3_foto)){ echo $editaServico->sessao3_foto;}?>">
                                    <input type="hidden" name="sessao1_paralax_Atual" value="<?php if(isset($editaServico->sessao1_paralax) && !empty($editaServico->sessao1_paralax)){ echo $editaServico->sessao1_paralax;}?>">
                                    <input type="hidden" name="sessao2_paralax_Atual" value="<?php if(isset($editaServico->sessao2_paralax) && !empty($editaServico->sessao2_paralax)){ echo $editaServico->sessao2_paralax;}?>">
                                    <input type="hidden" name="sessao3_paralax_Atual" value="<?php if(isset($editaServico->sessao3_paralax) && !empty($editaServico->sessao3_paralax)){ echo $editaServico->sessao3_paralax;}?>">
                                    <input type="hidden" name="icone_Atual" value="<?php if(isset($editaServico->icone) && !empty($editaServico->icone)){ echo $editaServico->icone;}?>">
                                    <input type="hidden" name="topico1_foto_Atual" value="<?php if(isset($editaServico->topico1_foto) && !empty($editaServico->topico1_foto)){ echo $editaServico->topico1_foto;}?>">
                                    <input type="hidden" name="topico2_foto_Atual" value="<?php if(isset($editaServico->topico2_foto) && !empty($editaServico->topico2_foto)){ echo $editaServico->topico2_foto;}?>">
                                    <input type="hidden" name="topico3_foto_Atual" value="<?php if(isset($editaServico->topico3_foto) && !empty($editaServico->topico3_foto)){ echo $editaServico->topico3_foto;}?>">
                                    <input type="hidden" name="topico4_foto_Atual" value="<?php if(isset($editaServico->topico4_foto) && !empty($editaServico->topico4_foto)){ echo $editaServico->topico4_foto;}?>">
                                    <!-- <input type="hidden" name="contato_foto_Atual" value="<?php if(isset($editaServico->contato_foto) && !empty($editaServico->contato_foto)){ echo $editaServico->contato_foto;}?>"> -->
                                   
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