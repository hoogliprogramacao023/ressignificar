<?php
@ session_start();
$ProcedimentosInstanciada = '';
if(empty($ProcedimentosInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Procedimentos {
		
		private $pdo = null;  

		private static $Procedimentos = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Procedimentos)):    
				self::$Procedimentos = new Procedimentos($conexao);   
			endif;
			return self::$Procedimentos;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $idCat='', $idDiferente='', $url_amigavel='', $destaque='') {
			
			/// FILTROS
			$nCampos = 0;
			$sql = '';
			$sqlOrdem = ''; 
			$sqlLimite = '';
			if(!empty($id)) {
				$sql .= " and id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id;
			}
			if(!empty($idCat)) {
				$sql .= " and id_cat = ?"; 
				$nCampos++;
				$campo[$nCampos] = $idCat;
			}
			
			if(!empty($destaque)) {
				$sql .= " and destaque = ?"; 
				$nCampos++;
				$campo[$nCampos] = $destaque;
			}
			
			if(!empty($idDiferente)) {
				$sql .= " and id != ?"; 
				$nCampos++;
				$campo[$nCampos] = $idDiferente;
			}
			if(!empty($url_amigavel)) {
				$sql .= " and url_amigavel = ?"; 
				$nCampos++;
				$campo[$nCampos] = $url_amigavel;
			}
		
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit {$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_procedimentos where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1 or $url_amigavel <> '') {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}

		function add($redireciona='') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addProcedimento') {
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
					$titulo = $_POST['titulo'];
				}else{
					$titulo = '';	
				}
				if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
					$descricao = $_POST['descricao'];
				}else{
					$descricao = '';	
				}
			
				if(isset($_POST['sessao1_titulo']) && !empty($_POST['sessao1_titulo'])){
					$sessao1_titulo = $_POST['sessao1_titulo'];
				}else{
					$sessao1_titulo = '';	
				}
				if(isset($_POST['sessao1_texto']) && !empty($_POST['sessao1_texto'])){
					$sessao1_texto = $_POST['sessao1_texto'];
				}else{
					$sessao1_texto = '';	
				}
				if(isset($_POST['sessao1_nome_botao']) && !empty($_POST['sessao1_nome_botao'])){
					$sessao1_nome_botao = $_POST['sessao1_nome_botao'];
				}else{
					$sessao1_nome_botao = '';	
				}
				if(isset($_POST['sessao1_link_botao']) && !empty($_POST['sessao1_link_botao'])){
					$sessao1_link_botao = $_POST['sessao1_link_botao'];
				}else{
					$sessao1_link_botao = '';	
				}


				if(isset($_POST['sessao2_titulo']) && !empty($_POST['sessao2_titulo'])){
					$sessao2_titulo = $_POST['sessao2_titulo'];
				}else{
					$sessao2_titulo = '';	
				}
				if(isset($_POST['sessao2_texto']) && !empty($_POST['sessao2_texto'])){
					$sessao2_texto = $_POST['sessao2_texto'];
				}else{
					$sessao2_texto = '';	
				}
				if(isset($_POST['sessao2_nome_botao']) && !empty($_POST['sessao2_nome_botao'])){
					$sessao2_nome_botao = $_POST['sessao2_nome_botao'];
				}else{
					$sessao2_nome_botao = '';	
				}
				if(isset($_POST['sessao2_link_botao']) && !empty($_POST['sessao2_link_botao'])){
					$sessao2_link_botao = $_POST['sessao2_link_botao'];
				}else{
					$sessao2_link_botao = '';	
				}
			
				$sessao2_botao2 = filter_input(INPUT_POST, 'sessao2_botao2');
				if(isset($_POST['sessao3_titulo']) && !empty($_POST['sessao3_titulo'])){
					$sessao3_titulo = $_POST['sessao3_titulo'];
				}else{
					$sessao3_titulo = '';	
				}
				if(isset($_POST['sessao3_texto']) && !empty($_POST['sessao3_texto'])){
					$sessao3_texto = $_POST['sessao3_texto'];
				}else{
					$sessao3_texto = '';	
				}
				if(isset($_POST['sessao3_nome_botao']) && !empty($_POST['sessao3_nome_botao'])){
					$sessao3_nome_botao = $_POST['sessao3_nome_botao'];
				}else{
					$sessao3_nome_botao = '';	
				}
				if(isset($_POST['sessao3_link_botao']) && !empty($_POST['sessao3_link_botao'])){
					$sessao3_link_botao = $_POST['sessao3_link_botao'];
				}else{
					$sessao3_link_botao = '';	
				}
				if(isset($_POST['sessao4_titulo']) && !empty($_POST['sessao4_titulo'])){
					$sessao4_titulo = $_POST['sessao4_titulo'];
				}else{
					$sessao4_titulo = '';	
				}
			
				if(isset($_POST['sessao4_texto']) && !empty($_POST['sessao4_texto'])){
					$sessao4_texto = $_POST['sessao4_texto'];
				}else{
					$sessao4_texto = '';	
				}
			
				if(isset($_POST['contato_titulo']) && !empty($_POST['contato_titulo'])){
					$contato_titulo = $_POST['contato_titulo'];
				}else{
					$contato_titulo = '';	
				}
				if(isset($_POST['contato_titulo2']) && !empty($_POST['contato_titulo2'])){
					$contato_titulo2 = $_POST['contato_titulo2'];
				}else{
					$contato_titulo2 = '';	
				}
				if(isset($_POST['contato_botao']) && !empty($_POST['contato_botao'])){
					$contato_botao = $_POST['contato_botao'];
				}else{
					$contato_botao = '';	
				}
				
				$contato_texto = $_POST['contato_texto'];
				if(isset($_POST['contato_texto']) && !empty($_POST['contato_texto'])){
					$contato_texto = $_POST['contato_texto'];
				}else{
					$contato_texto = '';	
				}
				if(isset($_POST['sessao2_titulo2']) && !empty($_POST['sessao2_titulo2'])){
					$sessao2_titulo2 = $_POST['sessao2_titulo2'];
				}else{
					$sessao2_titulo2 = '';	
				}
				if(isset($_POST['sessao4_titulo2']) && !empty($_POST['sessao4_titulo2'])){
					$sessao4_titulo2 = $_POST['sessao4_titulo2'];
				}else{
					$sessao4_titulo2 = '';	
				}
				if(isset($_POST['sessao4_nome_botao']) && !empty($_POST['sessao4_nome_botao'])){
					$sessao4_nome_botao = $_POST['sessao4_nome_botao'];
				}else{
					$sessao4_nome_botao = '';	
				}
				if(isset($_POST['sessao4_link_botao']) && !empty($_POST['sessao4_link_botao'])){
					$sessao4_link_botao = $_POST['sessao4_link_botao'];
				}else{
					$sessao4_link_botao = '';	
				}
				if(isset($_POST['titulo_porcen']) && !empty($_POST['titulo_porcen'])){
					$titulo_porcen = $_POST['titulo_porcen'];
				}else{
					$titulo_porcen = '';	
				}
				if(isset($_POST['titulo2_porcen']) && !empty($_POST['titulo2_porcen'])){
					$titulo2_porcen = $_POST['titulo2_porcen'];
				}else{
					$titulo2_porcen = '';	
				}
				if(isset($_POST['titulo3_porcen']) && !empty($_POST['titulo3_porcen'])){
					$titulo3_porcen = $_POST['titulo3_porcen'];
				}else{
					$titulo3_porcen = '';	
				}
				if(isset($_POST['titulo4_porcen']) && !empty($_POST['titulo4_porcen'])){
					$titulo4_porcen = $_POST['titulo4_porcen'];
				}else{
					$titulo4_porcen = '';	
				}
				if(isset($_POST['titulo5_porcen']) && !empty($_POST['titulo5_porcen'])){
					$titulo5_porcen = $_POST['titulo5_porcen'];
				}else{
					$titulo5_porcen = '';	
				}
				if(isset($_POST['titulo6_porcen']) && !empty($_POST['titulo6_porcen'])){
					$titulo6_porcen = $_POST['titulo6_porcen'];
				}else{
					$titulo6_porcen = '';	
				}
				if(isset($_POST['topico3_titulo']) && !empty($_POST['topico3_titulo'])){
					$topico3_titulo = $_POST['topico3_titulo'];
				}else{
					$topico3_titulo = '';	
				}
				if(isset($_POST['topico3_texto']) && !empty($_POST['topico3_texto'])){
					$topico3_texto = $_POST['topico3_texto'];
				}else{
					$topico3_texto = '';	
				}
				if(isset($_POST['topico2_foto']) && !empty($_POST['topico2_foto'])){
					$topico2_foto = $_POST['topico2_foto'];
				}else{
					$topico2_foto = '';	
				}
				if(isset($_POST['topico2_titulo']) && !empty($_POST['topico2_titulo'])){
					$topico2_titulo = $_POST['topico2_titulo'];
				}else{
					$topico2_titulo = '';	
				}
				if(isset($_POST['topico2_texto']) && !empty($_POST['topico2_texto'])){
					$topico2_texto = $_POST['topico2_texto'];
				}else{
					$topico2_texto = '';	
				}
				if(isset($_POST['topico3_foto']) && !empty($_POST['topico3_foto'])){
					$topico3_foto = $_POST['topico3_foto'];
				}else{
					$topico3_foto = '';	
				}
				if(isset($_POST['topico1_texto']) && !empty($_POST['topico1_texto'])){
					$topico1_texto = $_POST['topico1_texto'];
				}else{
					$topico1_texto = '';	
				}
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$id_cat = filter_input(INPUT_POST, 'id_cat');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				if(isset($_POST['url_amigavel']) && !empty($_POST['url_amigavel'])){
				    $urlAmigavel = $_POST['url_amigavel'];
				}else{
				   $urlAmigavel = gerarTituloSEO($titulo); 
				}
                
                
                $destaque = filter_input(INPUT_POST, 'destaque');
                
				$maximo = 150000;
                // Verificação
               
				if($_FILES["sessao1_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao1_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                if($_FILES["foto_projeto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto_projeto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["sessao2_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao2_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["sessao3_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao3_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo Icone. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
   

				// if($_FILES["contato_foto"]["size"] > $maximo) {
                //     echo "Erro! O arquivo enviado por você ultrapassa o ";
                //     $valorKb = $maximo / 1000;
                //     $tamanhoFoto = $_FILES["contato_foto"]["size"] /1000;
                //     echo "<script>
                //     alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo contato foto. Sua imagem tem ".$tamanhoFoto." KB');
                //     history.back();
                //     </script>";
				// 	exit;
                // }

					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_procedimentos (titulo, descricao, meta_title, meta_keywords, meta_description, url_amigavel, sessao1_foto, sessao2_foto, sessao3_foto, sessao1_titulo, sessao1_texto, sessao2_titulo, sessao2_texto, sessao3_titulo, sessao3_texto, sessao4_titulo, sessao4_texto, sessao1_nome_botao, sessao1_link_botao, sessao2_nome_botao, sessao2_link_botao, sessao3_nome_botao, sessao3_link_botao, icone, sessao1_paralax, sessao2_paralax, sessao3_paralax, contato_titulo, contato_titulo2, contato_foto, contato_botao, contato_texto, sessao2_titulo2, sessao4_titulo2, sessao4_nome_botao, sessao4_link_botao, sessao4_foto, destaque, topico1_foto, foto_projeto, foto_desc_projeto, titulo_porcen, titulo2_porcen, titulo3_porcen, titulo4_porcen, titulo5_porcen, titulo6_porcen, topico3_titulo, topico3_texto, topico2_foto, topico2_titulo, topico2_texto, topico3_foto, topico1_texto, id_cat) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $titulo);   
						$stm->bindValue(2, $descricao);
						$stm->bindValue(3, $meta_title);   
						$stm->bindValue(4, $meta_keywords);   
						$stm->bindValue(5, $meta_description); 
						$stm->bindValue(6, $urlAmigavel);
						$stm->bindValue(7, upload('sessao1_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(8, upload('sessao2_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(9, upload('sessao3_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(10, $sessao1_titulo);
						$stm->bindValue(11, $sessao1_texto);
						$stm->bindValue(12, $sessao2_titulo);
						$stm->bindValue(13, $sessao2_texto);
						$stm->bindValue(14, $sessao3_titulo);
						$stm->bindValue(15, $sessao3_texto);
						$stm->bindValue(16, $sessao4_titulo);
						$stm->bindValue(17, $sessao4_texto);
						$stm->bindValue(18, $sessao1_nome_botao);
						$stm->bindValue(19, $sessao1_link_botao);
						$stm->bindValue(20, $sessao2_nome_botao);
						$stm->bindValue(21, $sessao2_link_botao);
						$stm->bindValue(22, $sessao3_nome_botao);
						$stm->bindValue(23, $sessao3_link_botao);
						$stm->bindValue(24, upload('icone', $pastaArquivos, 'N')); 
						$stm->bindValue(25, upload('sessao1_paralax', $pastaArquivos, 'N')); 
						$stm->bindValue(26, upload('sessao2_paralax', $pastaArquivos, 'N')); 
						$stm->bindValue(27, upload('sessao3_paralax', $pastaArquivos, 'N')); 
						$stm->bindValue(28, $contato_titulo);
						$stm->bindValue(29, $contato_titulo2);
						$stm->bindValue(30, upload('contato_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(31, $contato_botao);
						$stm->bindValue(32, $contato_texto);
						$stm->bindValue(33, $sessao2_titulo2);
						$stm->bindValue(34, $sessao4_titulo2);
						$stm->bindValue(35, $sessao4_nome_botao);
						$stm->bindValue(36, $sessao4_link_botao);
						$stm->bindValue(37, upload('sessao4_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(38, $destaque);	
						$stm->bindValue(39, upload('topico1_foto', $pastaArquivos, 'N')); 
						$stm->bindValue(40, upload('foto_projeto', $pastaArquivos, 'N'));
						$stm->bindValue(41, upload('foto_desc_projeto', $pastaArquivos, 'N'));
						$stm->bindValue(42, $titulo_porcen);
    					$stm->bindValue(43, $titulo2_porcen);
    					$stm->bindValue(44, $titulo3_porcen);
    					$stm->bindValue(45, $titulo4_porcen);
    					$stm->bindValue(46, $titulo5_porcen);
    					$stm->bindValue(47, $titulo6_porcen);
    					$stm->bindValue(48, $topico3_titulo);
    					$stm->bindValue(49, $topico3_texto);
    					$stm->bindValue(50, $topico2_foto);
    					$stm->bindValue(51, $topico2_titulo);
    					$stm->bindValue(52, $topico2_texto);
    					$stm->bindValue(53, $topico3_foto);
    					$stm->bindValue(54, $topico1_texto);
    					$stm->bindValue(55, $id_cat);

						$stm->execute(); 
						$idServico = $this->pdo->lastInsertId();
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					
					if($redireciona == '') {
						$redireciona = '.';
					}
				
				// 	exit;
					
					echo "	<script>
								window.location='procedimentos.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='procedimentos.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaProcedimento') {			
				$id = filter_input(INPUT_POST, 'id');
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
					$titulo = $_POST['titulo'];
				}else{
					$titulo = '';	
				}
				if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
					$descricao = $_POST['descricao'];
				}else{
					$descricao = '';	
				}
				if(isset($_POST['titulo_porcen']) && !empty($_POST['titulo_porcen'])){
					$titulo_porcen = $_POST['titulo_porcen'];
				}else{
					$titulo_porcen = '';	
				}
				if(isset($_POST['titulo2_porcen']) && !empty($_POST['titulo2_porcen'])){
					$titulo2_porcen = $_POST['titulo2_porcen'];
				}else{
					$titulo2_porcen = '';	
				}
				if(isset($_POST['titulo3_porcen']) && !empty($_POST['titulo3_porcen'])){
					$titulo3_porcen = $_POST['titulo3_porcen'];
				}else{
					$titulo3_porcen = '';	
				}
				if(isset($_POST['titulo4_porcen']) && !empty($_POST['titulo4_porcen'])){
					$titulo4_porcen = $_POST['titulo4_porcen'];
				}else{
					$titulo4_porcen = '';	
				}
				if(isset($_POST['titulo5_porcen']) && !empty($_POST['titulo5_porcen'])){
					$titulo5_porcen = $_POST['titulo5_porcen'];
				}else{
					$titulo5_porcen = '';	
				}
				if(isset($_POST['titulo6_porcen']) && !empty($_POST['titulo6_porcen'])){
					$titulo6_porcen = $_POST['titulo6_porcen'];
				}else{
					$titulo6_porcen = '';	
				}
			
				if(isset($_POST['sessao1_titulo']) && !empty($_POST['sessao1_titulo'])){
					$sessao1_titulo = $_POST['sessao1_titulo'];
				}else{
					$sessao1_titulo = '';	
				}
				if(isset($_POST['sessao1_texto']) && !empty($_POST['sessao1_texto'])){
					$sessao1_texto = $_POST['sessao1_texto'];
				}else{
					$sessao1_texto = '';	
				}
				if(isset($_POST['topico2_texto']) && !empty($_POST['topico2_texto'])){
					$topico2_texto = $_POST['topico2_texto'];
				}else{
					$topico2_texto = '';	
				}
				if(isset($_POST['sessao1_nome_botao']) && !empty($_POST['sessao1_nome_botao'])){
					$sessao1_nome_botao = $_POST['sessao1_nome_botao'];
				}else{
					$sessao1_nome_botao = '';	
				}
				if(isset($_POST['topico2_titulo']) && !empty($_POST['topico2_titulo'])){
					$topico2_titulo = $_POST['topico2_titulo'];
				}else{
					$topico2_titulo = '';	
				}
				if(isset($_POST['topico3_foto']) && !empty($_POST['topico3_foto'])){
					$topico3_foto = $_POST['topico3_foto'];
				}else{
					$topico3_foto = '';	
				}
				if(isset($_POST['sessao1_link_botao']) && !empty($_POST['sessao1_link_botao'])){
					$sessao1_link_botao = $_POST['sessao1_link_botao'];
				}else{
					$sessao1_link_botao = '';	
				}
				if(isset($_POST['topico3_texto']) && !empty($_POST['topico3_texto'])){
					$topico3_texto = $_POST['topico3_texto'];
				}else{
					$topico3_texto = '';	
				}
				if(isset($_POST['topico2_foto']) && !empty($_POST['topico2_foto'])){
					$topico2_foto = $_POST['topico2_foto'];
				}else{
					$topico2_foto = '';	
				}


				if(isset($_POST['sessao2_titulo']) && !empty($_POST['sessao2_titulo'])){
					$sessao2_titulo = $_POST['sessao2_titulo'];
				}else{
					$sessao2_titulo = '';	
				}
				if(isset($_POST['sessao2_texto']) && !empty($_POST['sessao2_texto'])){
					$sessao2_texto = $_POST['sessao2_texto'];
				}else{
					$sessao2_texto = '';	
				}
				if(isset($_POST['sessao2_nome_botao']) && !empty($_POST['sessao2_nome_botao'])){
					$sessao2_nome_botao = $_POST['sessao2_nome_botao'];
				}else{
					$sessao2_nome_botao = '';	
				}
				if(isset($_POST['sessao2_link_botao']) && !empty($_POST['sessao2_link_botao'])){
					$sessao2_link_botao = $_POST['sessao2_link_botao'];
				}else{
					$sessao2_link_botao = '';	
				}
			
				$sessao2_botao2 = filter_input(INPUT_POST, 'sessao2_botao2');
				if(isset($_POST['sessao3_titulo']) && !empty($_POST['sessao3_titulo'])){
					$sessao3_titulo = $_POST['sessao3_titulo'];
				}else{
					$sessao3_titulo = '';	
				}
				if(isset($_POST['sessao3_texto']) && !empty($_POST['sessao3_texto'])){
					$sessao3_texto = $_POST['sessao3_texto'];
				}else{
					$sessao3_texto = '';	
				}
				if(isset($_POST['sessao3_nome_botao']) && !empty($_POST['sessao3_nome_botao'])){
					$sessao3_nome_botao = $_POST['sessao3_nome_botao'];
				}else{
					$sessao3_nome_botao = '';	
				}
				if(isset($_POST['sessao3_link_botao']) && !empty($_POST['sessao3_link_botao'])){
					$sessao3_link_botao = $_POST['sessao3_link_botao'];
				}else{
					$sessao3_link_botao = '';	
				}
				if(isset($_POST['sessao4_titulo']) && !empty($_POST['sessao4_titulo'])){
					$sessao4_titulo = $_POST['sessao4_titulo'];
				}else{
					$sessao4_titulo = '';	
				}
			
				if(isset($_POST['sessao4_texto']) && !empty($_POST['sessao4_texto'])){
					$sessao4_texto = $_POST['sessao4_texto'];
				}else{
					$sessao4_texto = '';	
				}
			
				if(isset($_POST['contato_titulo']) && !empty($_POST['contato_titulo'])){
					$contato_titulo = $_POST['contato_titulo'];
				}else{
					$contato_titulo = '';	
				}
				if(isset($_POST['contato_titulo2']) && !empty($_POST['contato_titulo2'])){
					$contato_titulo2 = $_POST['contato_titulo2'];
				}else{
					$contato_titulo2 = '';	
				}
				if(isset($_POST['contato_botao']) && !empty($_POST['contato_botao'])){
					$contato_botao = $_POST['contato_botao'];
				}else{
					$contato_botao = '';	
				}
				$contato_texto = $_POST['contato_texto'];
				if(isset($_POST['contato_texto']) && !empty($_POST['contato_texto'])){
					$contato_texto = $_POST['contato_texto'];
				}else{
					$contato_texto = '';	
				}
				if(isset($_POST['sessao2_titulo2']) && !empty($_POST['sessao2_titulo2'])){
					$sessao2_titulo2 = $_POST['sessao2_titulo2'];
				}else{
					$sessao2_titulo2 = '';	
				}
				if(isset($_POST['sessao4_titulo2']) && !empty($_POST['sessao4_titulo2'])){
					$sessao4_titulo2 = $_POST['sessao4_titulo2'];
				}else{
					$sessao4_titulo2 = '';	
				}
				if(isset($_POST['sessao4_nome_botao']) && !empty($_POST['sessao4_nome_botao'])){
					$sessao4_nome_botao = $_POST['sessao4_nome_botao'];
				}else{
					$sessao4_nome_botao = '';	
				}
				if(isset($_POST['sessao4_link_botao']) && !empty($_POST['sessao4_link_botao'])){
					$sessao4_link_botao = $_POST['sessao4_link_botao'];
				}else{
					$sessao4_link_botao = '';	
				}
				if(isset($_POST['topico3_titulo']) && !empty($_POST['topico3_titulo'])){
					$topico3_titulo = $_POST['topico3_titulo'];
				}else{
					$topico3_titulo = '';	
				}
				if(isset($_POST['topico1_texto']) && !empty($_POST['topico1_texto'])){
					$topico1_texto = $_POST['topico1_texto'];
				}else{
					$topico1_texto = '';	
				}
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				if(isset($_POST['url_amigavel']) && !empty($_POST['url_amigavel'])){
				    $urlAmigavel = $_POST['url_amigavel'];
				}else{
				   $urlAmigavel = gerarTituloSEO($titulo); 
				}

				$maximo = 150000;
                // Verificação
               
				if($_FILES["sessao1_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao1_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
                
                if($_FILES["foto_projeto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto_projeto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 1. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
  

				if($_FILES["sessao2_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao2_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["sessao3_foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["sessao3_foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo sessao 2. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo Icone. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				// if($_FILES["contato_foto"]["size"] > $maximo) {
                //     echo "Erro! O arquivo enviado por você ultrapassa o ";
                //     $valorKb = $maximo / 1000;
                //     $tamanhoFoto = $_FILES["contato_foto"]["size"] /1000;
                //     echo "<script>
                //     alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo contato foto. Sua imagem tem ".$tamanhoFoto." KB');
                //     history.back();
                //     </script>";
				// 	exit;
                // }

				$destaque = filter_input(INPUT_POST, 'destaque');
				$id_cat = filter_input(INPUT_POST, 'id_cat');
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_procedimentos SET titulo=?, descricao=?, meta_title=?, meta_keywords=?, meta_description=?, url_amigavel=?, sessao1_foto=?, sessao2_foto=?, sessao3_foto=?, sessao1_titulo=?, sessao1_texto=?, sessao2_titulo=?, sessao2_texto=?, sessao3_titulo=?, sessao3_texto=?, sessao4_titulo=?, sessao4_texto=?, sessao1_nome_botao=?, sessao1_link_botao=?, sessao2_nome_botao=?, sessao2_link_botao=?, sessao3_nome_botao=?, sessao3_link_botao=?, icone=?, sessao1_paralax=?, sessao2_paralax=?, sessao3_paralax=?, contato_titulo=?, contato_titulo2=?, contato_foto=?, contato_botao=?, contato_texto=?, sessao2_titulo2=?, sessao4_titulo2=?, sessao4_nome_botao=?, sessao4_link_botao=?, sessao4_foto=?, destaque=?, topico1_foto=?, foto_projeto=?, foto_desc_projeto=?, titulo_porcen=?, titulo2_porcen=?, titulo3_porcen=?, titulo4_porcen=?, titulo5_porcen=?, titulo6_porcen=?, topico3_titulo=?, topico3_texto=?, topico2_foto=?, topico2_titulo=?, topico2_texto=?, topico3_foto=?, topico1_texto=?, id_cat=? WHERE id=?";
					$stm = $this->pdo->prepare($sql);
					$stm->bindValue(1, $titulo);   
					$stm->bindValue(2, $descricao);
					$stm->bindValue(3, $meta_title);   
					$stm->bindValue(4, $meta_keywords);   
					$stm->bindValue(5, $meta_description); 
					$stm->bindValue(6, $urlAmigavel);
					$stm->bindValue(7, upload('sessao1_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(8, upload('sessao2_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(9, upload('sessao3_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(10, $sessao1_titulo);
					$stm->bindValue(11, $sessao1_texto);
					$stm->bindValue(12, $sessao2_titulo);
					$stm->bindValue(13, $sessao2_texto);
					$stm->bindValue(14, $sessao3_titulo);
					$stm->bindValue(15, $sessao3_texto);
					$stm->bindValue(16, $sessao4_titulo);
					$stm->bindValue(17, $sessao4_texto);
					$stm->bindValue(18, $sessao1_nome_botao);
					$stm->bindValue(19, $sessao1_link_botao);
					$stm->bindValue(20, $sessao2_nome_botao);
					$stm->bindValue(21, $sessao2_link_botao);
					$stm->bindValue(22, $sessao3_nome_botao);
					$stm->bindValue(23, $sessao3_link_botao);
					$stm->bindValue(24, upload('icone', $pastaArquivos, 'N')); 
					$stm->bindValue(25, upload('sessao1_paralax', $pastaArquivos, 'N')); 
					$stm->bindValue(26, upload('sessao2_paralax', $pastaArquivos, 'N')); 
					$stm->bindValue(27, upload('sessao3_paralax', $pastaArquivos, 'N')); 
					$stm->bindValue(28, $contato_titulo);
					$stm->bindValue(29, $contato_titulo2);
					$stm->bindValue(30, upload('contato_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(31, $contato_botao);
					$stm->bindValue(32, $contato_texto);
					$stm->bindValue(33, $sessao2_titulo2);
					$stm->bindValue(34, $sessao4_titulo2);
					$stm->bindValue(35, $sessao4_nome_botao);
					$stm->bindValue(36, $sessao4_link_botao);
					$stm->bindValue(37, upload('sessao4_foto', $pastaArquivos, 'N')); 
					$stm->bindValue(38, $destaque);
                    $stm->bindValue(39, upload('topico1_foto', $pastaArquivos, 'N')); 
                    $stm->bindValue(40, upload('foto_projeto', $pastaArquivos, 'N'));
                    $stm->bindValue(41, upload('foto_desc_projeto', $pastaArquivos, 'N'));
                    $stm->bindValue(42, $titulo_porcen);
					$stm->bindValue(43, $titulo2_porcen);
					$stm->bindValue(44, $titulo3_porcen);
					$stm->bindValue(45, $titulo4_porcen);
					$stm->bindValue(46, $titulo5_porcen);
					$stm->bindValue(47, $titulo6_porcen);
					$stm->bindValue(48, $topico3_titulo);
					$stm->bindValue(49, $topico3_texto);
					$stm->bindValue(50, $topico2_foto);
					$stm->bindValue(51, $topico2_titulo);
					$stm->bindValue(52, $topico2_texto);
					$stm->bindValue(53, $topico3_foto);
					$stm->bindValue(54, $topico1_texto);
					$stm->bindValue(55, $id_cat);
					$stm->bindValue(56, $id);
					
					
					
					$stm->execute(); 
				
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				// exit;
				echo "	<script>
							window.location='{$redireciona}';
							</script>";
							exit;
			}
		}
		
		function excluir() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirProcedimento') {
				
				try{   
					$sql = "DELETE FROM tbl_procedimentos WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

				echo "	<script>
								window.location='procedimentos.php';
								</script>";
								exit;
			}
		}
	}
	$ProcedimentosInstanciada = 'S';
}