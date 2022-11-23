<?php include "verifica.php";
$servico->add();
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
                                                    <input type="text" class="form-control" name="titulo" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome URL</label>
                                                    <input type="text" class="form-control" name="name_url" >
                                                </div>
                                            </div>   
                                            
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 2</label>
                                                    <input type="text" class="form-control" name="titulo2" >
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Texto</label>
                                                <textarea name="texto" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                </div>
                                            </div>                                        

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 1</label>
                                                    <input type="text" class="form-control" name="servico1" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 1 Link</label>
                                                    <input type="text" class="form-control" name="servico1_link" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 2</label>
                                                    <input type="text" class="form-control" name="servico2"  >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 2 Link</label>
                                                    <input type="text" class="form-control" name="servico2_link"  >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 3</label>
                                                    <input type="text" class="form-control" name="servico3" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 3 Link</label>
                                                    <input type="text" class="form-control" name="servico3_link" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 4</label>
                                                    <input type="text" class="form-control" name="servico4"  >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 4 Link</label>
                                                    <input type="text" class="form-control" name="servico4_link" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 5</label>
                                                    <input type="text" class="form-control" name="servico5"  >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Serviço 5 Link</label>
                                                    <input type="text" class="form-control" name="servico5_link" >
                                                </div>
                                            </div>
                                       
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">CTA pergunta</label>
                                                    <input type="text" class="form-control" name="cta_pergunta"  >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">CTA Botão</label>
                                                    <input type="text" class="form-control" name="cta_botao"  >
                                                </div>
                                            </div>   
                                        </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-12"><h4>Seção 2</h4></div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto 2</label>
                                                    <textarea name="texto2" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div>                                        
                                            

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Item 1</label>
                                                    <input type="text" class="form-control" name="item1"  >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Item 2</label>
                                                    <input type="text" class="form-control" name="item2"  >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Item 3</label>
                                                    <input type="text" class="form-control" name="item3" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Item 4</label>
                                                    <input type="text" class="form-control" name="item4"  >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Item 5</label>
                                                    <input type="text" class="form-control" name="item5"  >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Item 6</label>
                                                    <input type="text" class="form-control" name="item6"  >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Item 7</label>
                                                    <input type="text" class="form-control" name="item7"  >
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-12"><h4>Seção 3</h4></div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto 3</label>
                                                    <textarea name="texto3" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div>                                        
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">
                                        <div class="col-12"><h4>Seção 4</h4></div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Nome Botão</label>
                                                    <input type="text" class="form-control" name="nome_botao" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Link Botão</label>
                                                    <input type="text" class="form-control" name="link_botao" >
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Título 3</label>
                                                    <input type="text" class="form-control" name="titulo3" >
                                                </div>
                                            </div>
                                        
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto 4</label>
                                                    <textarea name="texto4" class="ckeditor" id="ckeditor" cols="30" rows="4"></textarea>
                                                    </div>
                                                </div>                                        
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="">Título 4</label>
                                                    <input type="text" class="form-control" name="titulo4" >
                                                </div>
                                            </div>

                                            <div class="row">
                                            <div class="col-12"><h4>Seção 5</h4></div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto 5</label>
                                                    <textarea name="texto5" class="ckeditor" id="ckeditor" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>                                        
                                            </div> 

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Foto</label>
                                                    <input type="file" class="form-control" name="foto" >
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Foto 1</label>
                                                    <input type="file" class="form-control" name="foto1" >
                                                </div>
                                            </div>      
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                            <label class="mr-sm-2" for="">Título 5</label>
                                                <input type="text" class="form-control" name="titulo5" >
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-12"><h4>Seção 6</h4></div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="">Texto 6</label>
                                                    <textarea name="texto6" class="ckeditor" id="ckeditor" cols="30" rows="5"></textarea>
                                                    </div>
                                                </div>                                        
                                            </div> 

                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Item 8</label>
                                                    <input type="text" class="form-control" name="item8" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Item 9</label>
                                                    <input type="text" class="form-control" name="item9" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Item 10</label>
                                                    <input type="text" class="form-control" name="item10" >
                                                </div>
                                            </div>
                                        </div>

                                        <hr>
                                        
                                        <div class="row">
                                        <div class="col-12"><h4>Seção 7</h4></div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Pergunta 1</label>
                                                    <input type="text" class="form-control" name="pergunta1" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Resposta 1</label>
                                                    <input type="text" class="form-control" name="resposta1" >
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Pergunta 2</label>
                                                    <input type="text" class="form-control" name="pergunta2" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Resposta 2</label>
                                                    <input type="text" class="form-control" name="resposta2" >
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Pergunta 3</label>
                                                    <input type="text" class="form-control" name="pergunta3"  >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Resposta 3</label>
                                                    <input type="text" class="form-control" name="resposta3" >
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Pergunta 4</label>
                                                    <input type="text" class="form-control" name="pergunta4" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <div class="form-group">
                                                <label class="mr-sm-2" for="">Resposta 4</label>
                                                    <input type="text" class="form-control" name="resposta4" >
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