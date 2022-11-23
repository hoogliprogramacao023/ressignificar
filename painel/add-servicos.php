<?php include "verifica.php";
$servicos->add();
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
    <title>Painel Hoogli - Adicionar Serviço</title>
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
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="servicos.php" class="text-muted">Serviço</a></li>
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
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Ordem</label>
                                                    <input type="number" class="form-control" name="ordem" >
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                           <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Icone</label>
                                                    <input type="file" class="form-control" name="icone" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Foto Principal</label>
                                                    <input type="file" class="form-control" name="sessao1_paralax" >
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo" >
                                                </div>
                                            </div>
                                           
                                            
                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Breve</label>
                                                   <textarea name="descricao" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Banner Principal</label>
                                                    <input type="file" class="form-control" name="sessao4_foto" >
                                                </div>
                                            </div>                                        
                                        </div>
                                        <hr>

                                        <h4 class="card-title">Sessão 1</h4>
                                       
                                        <div class="row">
                                           
                                            <!--<div class="col-md-4">-->
                                            <!--    <div class="form-group">-->
                                            <!--    <label class="mr-sm-2" for="">Imagem</label>-->
                                            <!--        <input type="file" class="form-control" name="sessao1_foto" >-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Embed</label>
                                                    <input type="text" class="form-control" name="embed_servico" >
                                                </div>
                                            </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="sessao1_titulo" >
                                                </div>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                   <textarea name="sessao1_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                        <div class="row">
                                                <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Titulo CTA 1 </label>
                                                    <input type="text" class="form-control" name="topico1_titulo" >
                                                </div>
                                            </div>                               
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Nome Botão CTA 1</label>
                                                     <input type="text" class="form-control" name="topico1_texto" >
                                                   
                                                </div>
                                            </div>  
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Link Botão CTA 1</label>
                                                    <input type="text" class="form-control" name="topico1_foto" >
                                                  
                                                </div>
                                            </div>     
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto 2</label>
                                                   <textarea name="topico3_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">CTA 2 Titulo </label>
                                                    <input type="text" class="form-control" name="topico2_foto" >
                                                 
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Nome Botão CTA 2</label>
                                                    <input type="text" class="form-control" name="topico2_titulo" >
                                                   
                                                </div>
                                            </div>  
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Link Botão CTA 2</label>
                                                    <input type="text" class="form-control" name="topico2_texto" >
                                                   
                                                </div>
                                            </div>     
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto 3</label>
                                                   <textarea name="topico4_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                           
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                <input type="text" class="form-control" name="sessao1_nome_botao" >
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                 <input type="text" class="form-control" name="sessao1_link_botao" >
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <hr>

                                        <h4 class="card-title">Sessão 2-caixas de texto</h4>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Paralax</label>
                                                    <input type="file" class="form-control" name="sessao2_paralax" >
                                                </div>
                                            </div>
                                           
                                        </div> -->
                                        <div class="row">
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Icone 1 (caixa de texto)</label>
                                                    <input type="file" class="form-control" name="sessao2_foto" >
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                           <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 1(caixa de texto)</label>
                                                    <input type="text" class="form-control" name="sessao2_titulo" >
                                                </div>
                                            </div>
                                             
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto 1(caixa de texto)</label>
                                                   <textarea name="sessao2_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Icone 2(caixa de texto)</label>
                                                    <input type="file" class="form-control" name="sessao3_paralax" >
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 2(caixa de texto)</label>
                                                    <input type="text" class="form-control" name="sessao2_titulo2" >
                                                </div>
                                            </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto 2(caixa de texto)</label>
                                                   <textarea name="sessao2_nome_botao" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        
                                        
                                       <!-- <div class="row">-->
                                       <!--    <div class="col-md-6">-->
                                       <!--        <div class="form-group">-->
                                       <!--        <label class="mr-sm-2" for="">Nome Botão</label>-->
                                       <!--            <input type="text" class="form-control" name="sessao2_nome_botao" >-->
                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--    <div class="col-md-6">-->
                                       <!--        <div class="form-group">-->
                                       <!--        <label class="mr-sm-2" for="">Link Botão</label>-->
                                       <!--            <input type="text" class="form-control" name="sessao2_link_botao" >-->
                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--</div>-->
                                        
                                        <hr>

                                        <h4 class="card-title" >Sessão 3-Bullets</h4>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Paralax</label>
                                                    <input type="file" class="form-control" name="sessao3_paralax" >
                                                </div>
                                            </div>
                                          
                                        </div> -->
                                        <div class="row" >
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Imagem ao lado do texto</label>
                                                    <input type="file" class="form-control" name="sessao3_foto" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título bullet</label>
                                                    <input type="text" class="form-control" name="sessao3_titulo">
                                                </div>
                                            </div>
                                           
                                          
                                        </div>
                                         <div class="row" >
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Subtitulo bullet</label>
                                                    <input type="text" class="form-control" name="sessao4_titulo2">
                                                </div>
                                            </div>                                     
                                        </div>
                                        <div class="row" >
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto bullet</label>
                                                   <textarea name="sessao3_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                           
                                           <!--<div class="col-md-6">-->
                                           <!--    <div class="form-group">-->
                                           <!--    <label class="mr-sm-2" for="">Nome Botão</label>-->
                                           <!--        <input type="text" class="form-control" name="sessao3_nome_botao" >-->
                                           <!--    </div>-->
                                           <!--</div>-->
                                           <!--<div class="col-md-6">-->
                                           <!--    <div class="form-group">-->
                                           <!--    <label class="mr-sm-2" for="">Link Botão</label>-->
                                           <!--        <input type="text" class="form-control" name="sessao3_link_botao" >-->
                                           <!--    </div>-->
                                           <!--</div>-->
                                       </div>
                                        <hr>
                                        
                                        
                                        <h4 class="card-title">Sessão 4</h4>
                                        <div class="row">
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título form</label>
                                                    <input type="text" class="form-control" name="sessao4_titulo" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Breve form</label>
                                                    <input type="text" class="form-control" name="sessao4_nome_botao" >
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                          
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão acima do form</label>
                                                    <input type="text" class="form-control" name="sessao3_nome_botao" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão acima do form</label>
                                                    <input type="text" class="form-control" name="sessao4_link_botao" >
                                                </div>
                                            </div>
                                           
                                        </div>
                                       <!-- <div class="row" >-->
                                           
                                       <!--     <div class="col-md-4">-->
                                       <!--         <div class="form-group">-->
                                       <!--         <label class="mr-sm-2" for="">Imagem</label>-->
                                       <!--             <input type="file" class="form-control" name="sessao4_foto" >-->
                                       <!--         </div>-->
                                       <!--     </div>-->
                                           
                                       <!-- </div>-->
                                   
                                       <!-- <div class="row">-->
                                       <!--     <div class="col-md-12">-->
                                       <!--         <div class="form-group">-->
                                       <!--             <label class="mr-sm-2" for="">Texto</label>-->
                                       <!--            <textarea name="sessao4_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                       <!--         </div>-->
                                       <!--     </div>                                        -->
                                       <!-- </div>-->
                                       <!-- <div class="row">-->
                                           
                                       <!--    <div class="col-md-6">-->
                                       <!--        <div class="form-group">-->
                                       <!--        <label class="mr-sm-2" for="">Nome Botão</label>-->
                                       <!--            <input type="text" class="form-control" name="sessao4_nome_botao" >-->
                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--    <div class="col-md-6">-->
                                       <!--        <div class="form-group">-->
                                       <!--        <label class="mr-sm-2" for="">Link Botão</label>-->
                                       <!--            <input type="text" class="form-control" name="sessao4_link_botao" >-->
                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--</div>-->
                                        <hr>
                                        
                                        <!-- SESSAO 5 -->
                                        
                                       <!-- <h4 class="card-title">Sessão 5</h4>-->
                                       <!-- <div class="row">-->
                                          
                                       <!--     <div class="col-md-6">-->
                                       <!--         <div class="form-group">-->
                                       <!--         <label class="mr-sm-2" for="">Título</label>-->
                                       <!--             <input type="text" class="form-control" name="sessao5_titulo" >-->
                                       <!--         </div>-->
                                       <!--     </div>-->
                                           
                                       <!-- </div>-->
                                       <!-- <div class="row" >-->
                                           
                                       <!--     <div class="col-md-4">-->
                                       <!--         <div class="form-group">-->
                                       <!--         <label class="mr-sm-2" for="">Imagem</label>-->
                                       <!--             <input type="file" class="form-control" name="sessao5_foto" >-->
                                       <!--         </div>-->
                                       <!--     </div>-->
                                           
                                       <!-- </div>-->
                                   
                                       <!-- <div class="row">-->
                                       <!--     <div class="col-md-12">-->
                                       <!--         <div class="form-group">-->
                                       <!--             <label class="mr-sm-2" for="">Texto</label>-->
                                       <!--            <textarea name="sessao5_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                       <!--         </div>-->
                                       <!--     </div>                                        -->
                                       <!-- </div>-->
                                       <!-- <div class="row">-->
                                           
                                       <!--    <div class="col-md-6">-->
                                       <!--        <div class="form-group">-->
                                       <!--        <label class="mr-sm-2" for="">Nome Botão</label>-->
                                       <!--            <input type="text" class="form-control" name="sessao5_nome_botao" >-->
                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--    <div class="col-md-6">-->
                                       <!--        <div class="form-group">-->
                                       <!--        <label class="mr-sm-2" for="">Link Botão</label>-->
                                       <!--            <input type="text" class="form-control" name="sessao5_link_botao" >-->
                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--</div>-->
                                       <!-- <hr>-->
                                        
                                        <!-- FIM SESSAO 5 -->
                                        
                                        <!-- SESSAO 6 -->
                                        
                                       <!-- <h4 class="card-title">Sessão 6</h4>-->
                                       <!-- <div class="row">-->
                                          
                                       <!--     <div class="col-md-6">-->
                                       <!--         <div class="form-group">-->
                                       <!--         <label class="mr-sm-2" for="">Título</label>-->
                                       <!--             <input type="text" class="form-control" name="sessao6_titulo" >-->
                                       <!--         </div>-->
                                       <!--     </div>-->
                                       <!--     <div class="col-md-6">-->
                                       <!--         <div class="form-group">-->
                                       <!--         <label class="mr-sm-2" for="">Título 2</label>-->
                                       <!--             <input type="text" class="form-control" name="sessao6_titulo2" >-->
                                       <!--         </div>-->
                                       <!--     </div>-->
                                           
                                       <!-- </div>-->
                                       <!-- <div class="row" >-->
                                           
                                       <!--     <div class="col-md-4">-->
                                       <!--         <div class="form-group">-->
                                       <!--         <label class="mr-sm-2" for="">Imagem</label>-->
                                       <!--             <input type="file" class="form-control" name="sessao6_foto" >-->
                                       <!--         </div>-->
                                       <!--     </div>-->
                                           
                                       <!-- </div>-->
                                   
                                       <!-- <div class="row">-->
                                       <!--     <div class="col-md-12">-->
                                       <!--         <div class="form-group">-->
                                       <!--             <label class="mr-sm-2" for="">Texto</label>-->
                                       <!--            <textarea name="sessao6_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                       <!--         </div>-->
                                       <!--     </div>                                        -->
                                       <!-- </div>-->
                                       <!-- <div class="row">-->
                                           
                                       <!--    <div class="col-md-6">-->
                                       <!--        <div class="form-group">-->
                                       <!--        <label class="mr-sm-2" for="">Nome Botão</label>-->
                                       <!--            <input type="text" class="form-control" name="sessao6_nome_botao" >-->
                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--    <div class="col-md-6">-->
                                       <!--        <div class="form-group">-->
                                       <!--        <label class="mr-sm-2" for="">Link Botão</label>-->
                                       <!--            <input type="text" class="form-control" name="sessao6_link_botao" >-->
                                       <!--        </div>-->
                                       <!--    </div>-->
                                       <!--</div>-->
                                        <hr>
                                        
                                        <!-- FIM SESSAO 6 -->

                                        <!--<h4 class="card-title">Sessão Contato</h4>-->
                                        <!--<div class="row">-->
                                        <!--    <div class="col-md-6">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Título</label>-->
                                        <!--            <input type="text" class="form-control" name="contato_titulo" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-6">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Título 2</label>-->
                                        <!--            <input type="text" class="form-control" name="contato_titulo2" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                            <!-- <div class="col-md-6">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Foto</label>
                                                    <input type="file" class="form-control" name="contato_foto" >
                                                </div>
                                            </div>
                                         -->
                                        <!--    <div class="col-md-6">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Botão</label>-->
                                        <!--            <input type="text" class="form-control" name="contato_botao" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--<div class="row">-->
                                        <!--    <div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--            <label class="mr-sm-2" for="">Texto</label>-->
                                        <!--           <textarea name="contato_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                        <!--        </div>-->
                                        <!--    </div>                                        -->
                                        <!--</div>-->
                                        <!--<hr>-->

                                        <!--<h4 class="card-title">Sessão Extra</h4>-->
                                        <!--<div class="row">-->
                                            <!-- topico 1 -->
                                        <!--<div class="col-md-3">-->
                                        <!--<div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Foto</label>-->
                                        <!--            <input type="file" class="form-control" name="topico1_foto" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Título</label>-->
                                        <!--            <input type="text" class="form-control" name="topico1_titulo" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--            <label class="mr-sm-2" for="">Texto</label>-->
                                        <!--           <textarea name="topico1_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                        <!--        </div>-->
                                        <!--    </div> -->
                                            
                                        <!--</div>-->
                                        <!-- Topico 2 -->
                                        <!--<div class="col-md-3">-->
                                        <!--<div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Foto</label>-->
                                        <!--            <input type="file" class="form-control" name="topico2_foto" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Título</label>-->
                                        <!--            <input type="text" class="form-control" name="topico2_titulo" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--            <label class="mr-sm-2" for="">Texto</label>-->
                                        <!--           <textarea name="topico2_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                        <!--        </div>-->
                                        <!--    </div> -->
                                            
                                        <!--</div>-->
                                        <!-- topico 3 -->
                                        <!--<div class="col-md-3">-->
                                        <!--<div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Foto</label>-->
                                        <!--            <input type="file" class="form-control" name="topico3_foto" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Título</label>-->
                                        <!--            <input type="text" class="form-control" name="topico3_titulo" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--            <label class="mr-sm-2" for="">Texto</label>-->
                                        <!--           <textarea name="topico3_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                        <!--        </div>-->
                                        <!--    </div> -->
                                            
                                        <!--</div>-->
                                        <!-- Topico 4 -->
                                        <!--<div class="col-md-3">-->
                                        <!--<div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Foto</label>-->
                                        <!--            <input type="file" class="form-control" name="topico4_foto" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--        <label class="mr-sm-2" for="">Título</label>-->
                                        <!--            <input type="text" class="form-control" name="topico4_titulo" >-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--    <div class="col-md-12">-->
                                        <!--        <div class="form-group">-->
                                        <!--            <label class="mr-sm-2" for="">Texto</label>-->
                                        <!--           <textarea name="topico4_texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>-->
                                        <!--        </div>-->
                                        <!--    </div> -->
                                            
                                        <!--</div>-->
                                        <!--</div>-->
                                       
                                      <br>
                                        
                                        <h4 class="card-title">Metas Tags</h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Title</label>
                                                    <input type="text" class="form-control" name="meta_title" >
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Keywords</label>
                                                    <input type="text" class="form-control" name="meta_keywords" >
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Meta Description</label>
                                                   <textarea name="meta_description" class="form-control" id="" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">URL Amigavel</label>
                                                    <input type="text" class="form-control" name="url_amigavel" >
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
                                    <input type="hidden" name="acao" value="addServico">
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