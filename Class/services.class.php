<?php
@ session_start();
$ServicesInstanciada = '';
if(empty($ServicesInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Services {
		
		private $pdo = null;  

		private static $Services = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Services)):    
				self::$Services = new Services($conexao);   
			endif;
			return self::$Services;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $destaque='', $categoria='') {
			
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
			if(!empty($destaque)) {
				$sql .= " and destaque = ?"; 
				$nCampos++;
				$campo[$nCampos] = $destaque;
			}
			if(!empty($categoria)) {
				$sql .= " and categoria = ?"; 
				$nCampos++;
				$campo[$nCampos] = $categoria;
			}
			
			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_services where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1) {
					return($rsDados[0]);
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}

		function add($redireciona='') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'addServices') {

				$maximo = 120000;
                // Verificação
                if($_FILES["imagem1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["imagem2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["imagem3"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem3"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["imagem4"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem4"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone3"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone3"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone4"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone4"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				$titulo = filter_input(INPUT_POST, 'titulo');
				$subtitulo = filter_input(INPUT_POST, 'subtitulo');
                $titulo1 = filter_input(INPUT_POST, 'titulo1');
				$subtitulo1 = filter_input(INPUT_POST, 'subtitulo1');
                $titulo2 = filter_input(INPUT_POST, 'titulo2');
				$subtitulo2 = filter_input(INPUT_POST, 'subtitulo2');
                $titulo3 = filter_input(INPUT_POST, 'titulo3');
				$subtitulo3 = filter_input(INPUT_POST, 'subtitulo3');
                $titulo4 = filter_input(INPUT_POST, 'titulo4');
				$subtitulo4 = filter_input(INPUT_POST, 'subtitulo4');
				$texto = filter_input(INPUT_POST, 'texto');
				$nome_botao = filter_input(INPUT_POST, 'nome_botao');
				$link_botao = filter_input(INPUT_POST, 'link_botao');
				$titulo5 = filter_input(INPUT_POST, 'titulo5');
				$subtitulo5 = filter_input(INPUT_POST, 'subtitulo5');
				$item1 = filter_input(INPUT_POST, 'item1');
				$texto1 = filter_input(INPUT_POST, 'texto1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$texto2 = filter_input(INPUT_POST, 'texto2');
				$item3 = filter_input(INPUT_POST, 'item3');
				$texto3 = filter_input(INPUT_POST, 'texto3');

					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_services (titulo, subtitulo, titulo1, subtitulo1, titulo2, subtitulo2, titulo3, subtitulo3, titulo4, subtitulo4, texto, nome_botao, link_botao, titulo5, subtitulo5, item1, texto1, item2, texto2, item3, texto3, imagem1, imagem2, imagem3, imagem4, icone1, icone2, icone3, icone4 ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $titulo);   
						$stm->bindValue(2, $subtitulo);   
                        $stm->bindValue(3, $titulo1);
                        $stm->bindValue(4, $subtitulo1);
                        $stm->bindValue(5, $titulo2);
                        $stm->bindValue(6, $subtitulo2);
                        $stm->bindValue(7, $titulo3);
                        $stm->bindValue(8, $subtitulo3);
                        $stm->bindValue(9, $titulo4);
                        $stm->bindValue(10, $subtitulo4);
						$stm->bindValue(11, $texto);   
						$stm->bindValue(12, $nome_botao);
						$stm->bindValue(13, $link_botao);
						$stm->bindValue(14, $titulo5);
                        $stm->bindValue(15, $subtitulo5);
						$stm->bindValue(16, $item1);
                        $stm->bindValue(17, $texto1);
						$stm->bindValue(18, $item2);
                        $stm->bindValue(19, $texto2);
						$stm->bindValue(20, $item3);
                        $stm->bindValue(21, $texto3);
						$stm->bindValue(22, upload('imagem1', $pastaArquivos, 'N'));   
						$stm->bindValue(23, upload('imagem2', $pastaArquivos, 'N'));  
						$stm->bindValue(24, upload('imagem3', $pastaArquivos, 'N'));  
						$stm->bindValue(25, upload('imagem4', $pastaArquivos, 'N'));  
						$stm->bindValue(26, upload('icone1', $pastaArquivos, 'N'));
						$stm->bindValue(27, upload('icone2', $pastaArquivos, 'N'));
						$stm->bindValue(28, upload('icone3', $pastaArquivos, 'N'));
						$stm->bindValue(29, upload('icone4', $pastaArquivos, 'N'));
						$stm->execute(); 
						$idServices = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					echo "	<script>
								window.location='services.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='services.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaServices') {


				$maximo = 120000;
                // Verificação
                if($_FILES["imagem1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["imagem2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["imagem3"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem3"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["imagem4"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["imagem4"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone3"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone3"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

				if($_FILES["icone4"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["icone4"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                $titulo = filter_input(INPUT_POST, 'titulo');
				$subtitulo = filter_input(INPUT_POST, 'subtitulo');
                $titulo1 = filter_input(INPUT_POST, 'titulo1');
				$subtitulo1 = filter_input(INPUT_POST, 'subtitulo1');
                $titulo2 = filter_input(INPUT_POST, 'titulo2');
				$subtitulo2 = filter_input(INPUT_POST, 'subtitulo2');
                $titulo3 = filter_input(INPUT_POST, 'titulo3');
				$subtitulo3 = filter_input(INPUT_POST, 'subtitulo3');
                $titulo4 = filter_input(INPUT_POST, 'titulo4');
				$subtitulo4 = filter_input(INPUT_POST, 'subtitulo4');
				$texto = filter_input(INPUT_POST, 'texto');
				$nome_botao = filter_input(INPUT_POST, 'nome_botao');
				$link_botao = filter_input(INPUT_POST, 'link_botao');
				$titulo5 = filter_input(INPUT_POST, 'titulo5');
				$subtitulo5 = filter_input(INPUT_POST, 'subtitulo5');
				$item1 = filter_input(INPUT_POST, 'item1');
				$texto1 = filter_input(INPUT_POST, 'texto1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$texto2 = filter_input(INPUT_POST, 'texto2');
				$item3 = filter_input(INPUT_POST, 'item3');
				$texto3 = filter_input(INPUT_POST, 'texto3');
                $id = filter_input(INPUT_POST, 'id');
				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_services SET titulo=?, subtitulo=?, titulo1=?, subtitulo1=?, titulo2=?, subtitulo2=?, titulo3=?, subtitulo3=?, titulo4=?, subtitulo4=?, texto=?, nome_botao=?, link_botao=?, titulo5=?, subtitulo5=?, item1=?, texto1=?, item2=?, texto2=?, item3=?, texto3=?, imagem1=?, imagem2=?, imagem3=?, imagem4=?, icone1=?, icone2=?, icone3=?, icone4=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
                    $stm->bindValue(1, $titulo);   
                    $stm->bindValue(2, $subtitulo);   
                    $stm->bindValue(3, $titulo1);
                    $stm->bindValue(4, $subtitulo1);
                    $stm->bindValue(5, $titulo2);
                    $stm->bindValue(6, $subtitulo2);
                    $stm->bindValue(7, $titulo3);
                    $stm->bindValue(8, $subtitulo3);
                    $stm->bindValue(9, $titulo4);
                    $stm->bindValue(10, $subtitulo4);
                    $stm->bindValue(11, $texto);   
                    $stm->bindValue(12, $nome_botao);
                    $stm->bindValue(13, $link_botao);
					$stm->bindValue(14, $titulo5);
					$stm->bindValue(15, $subtitulo5);
					$stm->bindValue(16, $item1);
					$stm->bindValue(17, $texto1);
					$stm->bindValue(18, $item2);
					$stm->bindValue(19, $texto2);
					$stm->bindValue(20, $item3);
					$stm->bindValue(21, $texto3);
					$stm->bindValue(22, upload('imagem1', $pastaArquivos, 'N'));   
					$stm->bindValue(23, upload('imagem2', $pastaArquivos, 'N'));  
					$stm->bindValue(24, upload('imagem3', $pastaArquivos, 'N'));  
					$stm->bindValue(25, upload('imagem4', $pastaArquivos, 'N'));  
					$stm->bindValue(26, upload('icone1', $pastaArquivos, 'N'));
					$stm->bindValue(27, upload('icone2', $pastaArquivos, 'N'));
					$stm->bindValue(28, upload('icone3', $pastaArquivos, 'N'));
					$stm->bindValue(29, upload('icone4', $pastaArquivos, 'N'));
					$stm->bindValue(30, $id);   
					$stm->execute(); 
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}

//var_dump($_POST);exit;
				echo "	<script>
							window.location='{$redireciona}';
							</script>";
							exit;
			}
		}
		
		function excluir() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirServices') {
				
				try{   
					$sql = "DELETE FROM tbl_services WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				echo "	<script>
								window.location='services.php';
								</script>";
								exit;

			}
		}
	}
	
	$ServicesInstanciada = 'S';
}