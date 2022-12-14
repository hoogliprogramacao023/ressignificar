<?php include "verifica.php";
$puxaPsicologia = $psicologia->rsDados();
$psicologia->excluir();
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
    <title>Painel Hoogli - Psicologia</title>
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Psicologia</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="." class="text-muted">Psicologia</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>T??tulo</th>
                                                <th>Item 1</th>
                                                <th>Item 2</th>
                                                <th>Item 3</th>
                                                <th>Item 4</th>
                                                <th>Subt??tulo</th>
                                                <th>T??tulo 2</th>
                                                <th>Texto</th>
                                                <th>A????es</th>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            if(count($puxaPsicologia) > 0){
                                            foreach($puxaPsicologia as $psicologia){?>
                                            <tr>
                                                <td><?php echo $psicologia->titulo;?></td>
                                                <td><?php echo $psicologia->item1;?></td>
                                                <td><?php echo $psicologia->item2;?></td>
                                                <td><?php echo $psicologia->item3;?></td>
                                                <td><?php echo $psicologia->item4;?></td>
                                                <td><?php echo $psicologia->subtitulo;?></td>
                                                <td><?php echo $psicologia->titulo2;?></td>
                                                <td><?php echo $psicologia->texto;?></td>
                                                <td>
                                                    <a href="editar-psicologia.php?id=<?php echo $psicologia->id;?>" class="btn btn-success btn-circle"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="psicologia.php?id=<?php echo $psicologia->id;?>&acao=excluirPsicologia" class="btn btn-warning btn-circle"><i class="fa fa-times"></i></a>
                                                </td>
                                            </tr>
                                            <?php } }?>
                                        </tbody>
                                    </table>
                                </div>
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
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>
</html>