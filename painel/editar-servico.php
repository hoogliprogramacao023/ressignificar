<?php include "verifica.php";
$id = '';
if(isset($_GET['id'])){
    if(empty($_GET['id'])){
        header('Location: servico.php');
    }else{
        $id = $_GET['id'];        
    }
}
$servico->editar();
$editaServico = $servico->rsDados($id);
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
    <title>Painel Hoogli - Editar Serviço</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Editar Serviço</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page"><a href="servico.php" class="text-muted">Serviços</a></li>
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
                                        <h4 class="card-title">Serviço</h4>

                                        <hr>

                                        <h4>Seção 1</h4>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título</label>
                                                    <input type="text" class="form-control" name="titulo" value="<?php if(isset($editaServico->titulo) && !empty($editaServico->titulo)){ echo $editaServico->titulo;}?>" >
                                                </div>
                                            </div>  
                                            
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 2</label>
                                                    <input type="text" class="form-control" name="titulo2" value="<?php if(isset($editaServico->titulo2) && !empty($editaServico->titulo2)){ echo $editaServico->titulo2;}?>" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título na URL</label>
                                                    <input type="text" class="form-control" name="name_url" value="<?php if(isset($editaServico->name_url) && !empty($editaServico->name_url)){ echo $editaServico->name_url;}?>" >
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                <textarea name="texto" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->texto) && !empty($editaServico->texto)){ echo $editaServico->texto;}?></textarea>
                                                </div>
                                            </div>                                        

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 1</label>
                                                    <input type="text" class="form-control" name="servico1" value="<?php if(isset($editaServico->servico1) && !empty($editaServico->servico1)){ echo $editaServico->servico1;}?>" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 1 Link</label>
                                                    <input type="text" class="form-control" name="servico1_link" value="<?php if(isset($editaServico->servico1_link) && !empty($editaServico->servico1_link)){ echo $editaServico->servico1_link;}?>" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 2</label>
                                                    <input type="text" class="form-control" name="servico2" value="<?php if(isset($editaServico->servico2) && !empty($editaServico->servico2)){ echo $editaServico->servico2;}?>" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 2 Link</label>
                                                    <input type="text" class="form-control" name="servico2_link" value="<?php if(isset($editaServico->servico2_link) && !empty($editaServico->servico2_link)){ echo $editaServico->servico2_link;}?>" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 3</label>
                                                    <input type="text" class="form-control" name="servico3" value="<?php if(isset($editaServico->servico3) && !empty($editaServico->servico3)){ echo $editaServico->servico3;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 3 Link</label>
                                                    <input type="text" class="form-control" name="servico3_link" value="<?php if(isset($editaServico->servico3_link) && !empty($editaServico->servico3_link)){ echo $editaServico->servico3_link;}?>" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 4</label>
                                                    <input type="text" class="form-control" name="servico4" value="<?php if(isset($editaServico->servico4) && !empty($editaServico->servico4)){ echo $editaServico->servico4;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 4 Link</label>
                                                    <input type="text" class="form-control" name="servico4_link" value="<?php if(isset($editaServico->servico4_link) && !empty($editaServico->servico4_link)){ echo $editaServico->servico4_link;}?>" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 5</label>
                                                    <input type="text" class="form-control" name="servico5" value="<?php if(isset($editaServico->servico5) && !empty($editaServico->servico5)){ echo $editaServico->servico5;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 5 Link</label>
                                                    <input type="text" class="form-control" name="servico5_link" value="<?php if(isset($editaServico->servico5_link) && !empty($editaServico->servico5_link)){ echo $editaServico->servico5_link;}?>" >
                                                </div>
                                            </div>
                                       
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">CTA pergunta</label>
                                                    <input type="text" class="form-control" name="cta_pergunta" value="<?php if(isset($editaServico->cta_pergunta) && !empty($editaServico->cta_pergunta)){ echo $editaServico->cta_pergunta;}?>" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">CTA Botão</label>
                                                    <input type="text" class="form-control" name="cta_botao" value="<?php if(isset($editaServico->cta_botao) && !empty($editaServico->cta_botao)){ echo $editaServico->cta_botao;}?>" >
                                                </div>
                                            </div>   
                                        </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-12">
                                                    <h4>Seção 2</h4>
                                                </div>
                                                <?php if(isset($editaServico->texto2) && !empty($editaServico->texto2)){?>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto 2</label>
                                                    <textarea name="texto2" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->texto2) && !empty($editaServico->texto2)){ echo $editaServico->texto2;}?></textarea>
                                                    </div>
                                                </div>   
                                                <?php } ?>                                     
                                            
                                            <?php if(isset($editaServico->item1) && !empty($editaServico->item1)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 1</label>
                                                        <input type="text" class="form-control" name="item1" value="<?php if(isset($editaServico->item1) && !empty($editaServico->item1)){ echo $editaServico->item1;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item2) && !empty($editaServico->item2)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 2</label>
                                                        <input type="text" class="form-control" name="item2" value="<?php if(isset($editaServico->item2) && !empty($editaServico->item2)){ echo $editaServico->item2;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item3) && !empty($editaServico->item3)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 3</label>
                                                        <input type="text" class="form-control" name="item3" value="<?php if(isset($editaServico->item3) && !empty($editaServico->item3)){ echo $editaServico->item3;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item4) && !empty($editaServico->item4)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 4</label>
                                                        <input type="text" class="form-control" name="item4" value="<?php if(isset($editaServico->item4) && !empty($editaServico->item4)){ echo $editaServico->item4;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item5) && !empty($editaServico->item5)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 5</label>
                                                        <input type="text" class="form-control" name="item5" value="<?php if(isset($editaServico->item5) && !empty($editaServico->item5)){ echo $editaServico->item5;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item6) && !empty($editaServico->item6)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 6</label>
                                                        <input type="text" class="form-control" name="item6" value="<?php if(isset($editaServico->item6) && !empty($editaServico->item6)){ echo $editaServico->item6;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item7) && !empty($editaServico->item7)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 7</label>
                                                        <input type="text" class="form-control" name="item7" value="<?php if(isset($editaServico->item7) && !empty($editaServico->item7)){ echo $editaServico->item7;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item8) && !empty($editaServico->item8)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 8</label>
                                                        <input type="text" class="form-control" name="item8" value="<?php if(isset($editaServico->item8) && !empty($editaServico->item8)){ echo $editaServico->item8;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item9) && !empty($editaServico->item9)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 9</label>
                                                        <input type="text" class="form-control" name="item9" value="<?php if(isset($editaServico->item9) && !empty($editaServico->item9)){ echo $editaServico->item9;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item10) && !empty($editaServico->item10)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 10</label>
                                                        <input type="text" class="form-control" name="item10" value="<?php if(isset($editaServico->item10) && !empty($editaServico->item10)){ echo $editaServico->item10;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item11) && !empty($editaServico->item11)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 11</label>
                                                        <input type="text" class="form-control" name="item11" value="<?php if(isset($editaServico->item11) && !empty($editaServico->item11)){ echo $editaServico->item11;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item12) && !empty($editaServico->item12)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 12</label>
                                                        <input type="text" class="form-control" name="item12" value="<?php if(isset($editaServico->item12) && !empty($editaServico->item12)){ echo $editaServico->item12;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item13) && !empty($editaServico->item13)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 13</label>
                                                        <input type="text" class="form-control" name="item13" value="<?php if(isset($editaServico->item13) && !empty($editaServico->item13)){ echo $editaServico->item13;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>
                                            <?php if(isset($editaServico->item14) && !empty($editaServico->item14)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Item 14</label>
                                                        <input type="text" class="form-control" name="item14" value="<?php if(isset($editaServico->item14) && !empty($editaServico->item14)){ echo $editaServico->item14;}?>" >
                                                    </div>
                                                </div>
                                            <?php }?>

                                            <div class="row">
                                            <div class="col-12"><h4>Seção 3</h4></div>
                                                <?php if(isset($editaServico->texto3) && !empty($editaServico->texto3)){?>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Texto 3</label>
                                                        <textarea name="texto3" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->texto3) && !empty($editaServico->texto3)){ echo $editaServico->texto3;}?></textarea>
                                                        </div>
                                                    </div>   
                                                <?php } ?>                                       
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                        <div class="col-12"><h4>Seção 4</h4></div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="nome_botao" value="<?php if(isset($editaServico->nome_botao) && !empty($editaServico->nome_botao)){ echo $editaServico->nome_botao;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="link_botao" value="<?php if(isset($editaServico->link_botao) && !empty($editaServico->link_botao)){ echo $editaServico->link_botao;}?>" >
                                                </div>
                                            </div>

                                            <?php if(isset($editaServico->titulo3) && !empty($editaServico->titulo3)){?>
                                                <div class="col-md-6 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Título 3</label>
                                                        <input type="text" class="form-control" name="titulo3" value="<?php if(isset($editaServico->titulo3) && !empty($editaServico->titulo3)){ echo $editaServico->titulo3;}?>" >
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        
                                            <div class="row">
                                            <?php if(isset($editaServico->texto4) && !empty($editaServico->texto4)){?>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto 4</label>
                                                    <textarea name="texto4" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->texto4) && !empty($editaServico->texto4)){ echo $editaServico->texto4;}?></textarea>
                                                    </div>
                                                </div>   
                                                <?php } ?>                                     
                                            </div>

                                            <?php if(isset($editaServico->titulo4) && !empty($editaServico->titulo4)){?>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título 4</label>
                                                    <input type="text" class="form-control" name="titulo4" value="<?php if(isset($editaServico->titulo4) && !empty($editaServico->titulo4)){ echo $editaServico->titulo4;}?>" >
                                                </div>
                                            </div>
                                            <?php } ?>

                                            <div class="row">
                                            <div class="col-12"><h4>Seção 5</h4></div>
                                            <?php if(isset($editaServico->texto5) && !empty($editaServico->texto5)){?>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto 5</label>
                                                    <textarea name="texto5" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->texto5) && !empty($editaServico->texto5)){ echo $editaServico->texto5;}?></textarea>
                                                    </div>
                                                </div>   
                                                <?php } ?>                                     
                                            </div> 

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Foto</label>
                                                    <input type="file" class="form-control" name="foto" >
                                                </div>
                                            </div>
                                             <?php if(isset($editaServico->foto) && !empty($editaServico->foto)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                <img src="../img/<?php echo $editaServico->foto;?>" width="150" alt="">
                                                    </div>
                                                </div>
                                            <?php }?>  

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Foto 1</label>
                                                    <input type="file" class="form-control" name="foto1" >
                                                </div>
                                            </div>
                                             <?php if(isset($editaServico->foto1) && !empty($editaServico->foto1)){ ?>
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                <img src="../img/<?php echo $editaServico->foto1;?>" width="150" alt="">
                                                    </div>
                                                </div>
                                            <?php }?>  
                                        </div>

                                        <?php if(isset($editaServico->titulo5) && !empty($editaServico->titulo5)){?>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                            <label class="mr-sm-2" for="">Título 5</label>
                                                <input type="text" class="form-control" name="titulo5" value="<?php if(isset($editaServico->titulo5) && !empty($editaServico->titulo5)){ echo $editaServico->titulo5;}?>" >
                                            </div>
                                        </div>
                                        <?php } ?>

                                        <div class="row">
                                        <div class="col-12"><h4>Seção 6</h4></div>
                                            <?php if(isset($editaServico->texto6) && !empty($editaServico->texto6)){?>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="mr-sm-2" for="">Texto 6</label>
                                                        <textarea name="texto6" class="ckeditor" id="ckeditor" cols="30" rows="4"><?php if(isset($editaServico->texto6) && !empty($editaServico->texto6)){ echo $editaServico->texto6;}?></textarea>
                                                        </div>
                                                    </div>   
                                            <?php } ?>                                      
                                        </div> 
                                        </div>

                                        <hr>
                                        
                                        <div class="row">
                                        <div class="col-12"><h4>Seção 7</h4></div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Pergunta 1</label>
                                                    <input type="text" class="form-control" name="pergunta1" value="<?php if(isset($editaServico->pergunta1) && !empty($editaServico->pergunta1)){ echo $editaServico->pergunta1;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Resposta 1</label>
                                                    <input type="text" class="form-control" name="resposta1" value="<?php if(isset($editaServico->resposta1) && !empty($editaServico->resposta1)){ echo $editaServico->resposta1;}?>" >
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Pergunta 2</label>
                                                    <input type="text" class="form-control" name="pergunta2" value="<?php if(isset($editaServico->pergunta2) && !empty($editaServico->pergunta2)){ echo $editaServico->pergunta2;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Resposta 2</label>
                                                    <input type="text" class="form-control" name="resposta2" value="<?php if(isset($editaServico->resposta2) && !empty($editaServico->resposta2)){ echo $editaServico->resposta2;}?>" >
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Pergunta 3</label>
                                                    <input type="text" class="form-control" name="pergunta3" value="<?php if(isset($editaServico->pergunta3) && !empty($editaServico->pergunta3)){ echo $editaServico->pergunta3;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Resposta 3</label>
                                                    <input type="text" class="form-control" name="resposta3" value="<?php if(isset($editaServico->resposta3) && !empty($editaServico->resposta3)){ echo $editaServico->resposta3;}?>" >
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Pergunta 4</label>
                                                    <input type="text" class="form-control" name="pergunta4" value="<?php if(isset($editaServico->pergunta4) && !empty($editaServico->pergunta4)){ echo $editaServico->pergunta4;}?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Resposta 4</label>
                                                    <input type="text" class="form-control" name="resposta4" value="<?php if(isset($editaServico->resposta4) && !empty($editaServico->resposta4)){ echo $editaServico->resposta4;}?>" >
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
                                    <input type="hidden" name="foto_Atual" value="<?php if(isset($editaServico->foto) && !empty($editaServico->foto)){ echo $editaServico->foto;}?>">

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