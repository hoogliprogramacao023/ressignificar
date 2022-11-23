 <?php
$destinatario = $infoSistema->email_recebimento;
$remetente = $infoSistema->email_recebimento;
$destinatario      = 'luiz@hoogli.com.br';
$remetente         = 'luiz@hoogli.com.br';
$assunto = 'Contato pelo site';
$redirecionar_para = SITE_URL.'/sucesso';


if(isset($_POST['acaoEnvio1']) && $_POST['acaoEnvio1'] == "Enviar") {
   
 
    $erros = [];
    if (empty($_POST['Nome'])) {
        $erros[] = 'Nome não preenchido';
    }
  
  if (!$erros) {
    $ip = $_SERVER['REMOTE_ADDR'];
    $reverso = gethostbyaddr($ip);
    if ($reverso == $ip)
      $origem = $ip;
    else
      $origem = "$ip ($reverso)";
    $de = $_POST['Nome']." - ".$_POST['Email'];
    
    date_default_timezone_set('America/Sao_Paulo');
    $DataEHora = date('d-m-Y ', time());


    $corpo = '<div style="text-align: -webkit-center; background:transparent;">
    <div style="width:600px; text-align: -webkit-left;">
         <div style="background: #c11042; padding: 20px;">
            <img width="120px" src="https://hoogli.dev.br/afp-moveis/img/1661537975.5126-logo_rodape-N.png">
            <div style="text-align: center; color:#faf7f7; ">
                <h1 style="font-weight: 100;">Solicitação de contato via site</h1>
            </div>
        </div>
        <div style=" padding: 20px; background-color: #faf7f7;">
            <div style="padding: 0 50px;">
                <h4>Data da Solicitação : '. $DataEHora .'</h4>

                <p style="color: rgb(85, 85, 85); font-size: 14px;"> Você tem uma nova solicitação pelo site do cliente</p>
                <p style="color: rgb(85, 85, 85); font-size: 14px;"> Nome: '. $_POST['Nome'] .'</p>
                <p style="color: rgb(85, 85, 85); font-size: 14px;"> Email: '. $_POST['Email'] .'</p>
                <p style="color: rgb(85, 85, 85); font-size: 14px;"> Telefone: '. $_POST['Telefone'] .'</p>
                 <p style="color: rgb(85, 85, 85); font-size: 14px;"> Assunto: '. $_POST['Assunto'] .'</p>
                 <p style="color: rgb(85, 85, 85); font-size: 14px;"> Mensagem: '. $_POST['Mensagem'] .'</p>
               
            </div>
        </div>


        <div style="background: #c10042; text-align: center; padding: 20px;">
            
                <br>
                <br>
                <img width="150px" src="https://hoogli.dev.br/afp-moveis/img/1661537975.5126-logo_rodape-N.png" alt="logo">


        

        </div>
    </div>
</div>';

    $headers  = "From: $remetente\n";
    $headers .= "Reply-To: $de";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\n";

    if (mail($destinatario, $assunto, $corpo, $headers, "-f$remetente")) {
     header("Location: $redirecionar_para");
      exit;
    } else {
      $erros[] = 'Erro ao mandar seu e-mail, por favor tente novamente mais tarde';
    }
  }
}
?>