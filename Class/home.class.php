<?php
@ session_start();
$HomeInstanciada = '';
if(empty($HomeInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Home {
		
		private $pdo = null;  

		private static $Home = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Home)):    
				self::$Home = new Home($conexao);   
			endif;
			return self::$Home;    
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
				$sql = "SELECT * FROM tbl_home where 1=1 $sql $sqlOrdem $sqlLimite";
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
			if(isset($_POST['acao']) && $_POST['acao'] == 'addHome') {

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

				if($_FILES["banner"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner"]["size"] /1000;
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

				$titulo = filter_input(INPUT_POST, 'titulo');
				$subtitulo = filter_input(INPUT_POST, 'subtitulo');
				$nome_botao = filter_input(INPUT_POST, 'nome_botao');
				$link_botao = filter_input(INPUT_POST, 'link_botao');
				$topico1 = filter_input(INPUT_POST, 'topico1');
                $topico2 = filter_input(INPUT_POST, 'topico2');
                $topico3 = filter_input(INPUT_POST, 'topico3');
				$qtd_anos= filter_input(INPUT_POST, 'qtd_anos');
				$cat_anos= filter_input(INPUT_POST, 'cat_anos');
				$subtitulo1 = filter_input(INPUT_POST, 'subtitulo1');
				$titulo1 = filter_input(INPUT_POST, 'titulo1');
				$texto1 = filter_input(INPUT_POST, 'texto1');
				$item1 = filter_input(INPUT_POST, 'item1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$item3 = filter_input(INPUT_POST, 'item3');
				$item4 = filter_input(INPUT_POST, 'item4');
				
					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_home (titulo, subtitulo, nome_botao, link_botao, topico1, topico2, topico3, icone1, icone2, icone3, imagem1, imagem2, qtd_anos, cat_anos, subtitulo1, titulo1, texto1, item1, item2, item3, item4, banner) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $titulo);   
						$stm->bindValue(2, $subtitulo);   
						$stm->bindValue(3, $nome_botao);   
						$stm->bindValue(4, $link_botao);
						$stm->bindValue(5, $topico1);
                        $stm->bindValue(6, $topico2);
                        $stm->bindValue(7, $topico3);
						$stm->bindValue(8, upload('icone1', $pastaArquivos, 'N'));
						$stm->bindValue(9, upload('icone2', $pastaArquivos, 'N'));
						$stm->bindValue(10, upload('icone3', $pastaArquivos, 'N'));
						$stm->bindValue(11, upload('imagem1', $pastaArquivos, 'N'));   
						$stm->bindValue(12, upload('imagem2', $pastaArquivos, 'N'));  
						$stm->bindValue(13, $qtd_anos); 
						$stm->bindValue(14, $cat_anos); 
						$stm->bindValue(15, $subtitulo1);
						$stm->bindValue(16, $titulo1);
						$stm->bindValue(17, $texto1);
						$stm->bindValue(18, $item1); 
						$stm->bindValue(19, $item2);
						$stm->bindValue(20, $item3);
						$stm->bindValue(21, $item4);   
						$stm->bindValue(22, upload('banner', $pastaArquivos, 'N'));
						$stm->execute(); 
						$idHome = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					echo "	<script>
								window.location='home.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='home.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaHome') {

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

				$maximo = 120000;
                // Verificação
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

				if($_FILES["banner"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				if($_FILES["banner"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["banner"]["size"] /1000;
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

				$titulo = filter_input(INPUT_POST, 'titulo');
				$subtitulo = filter_input(INPUT_POST, 'subtitulo');
				$nome_botao = filter_input(INPUT_POST, 'nome_botao');
				$link_botao = filter_input(INPUT_POST, 'link_botao');
				$topico1 = filter_input(INPUT_POST, 'topico1');
                $topico2 = filter_input(INPUT_POST, 'topico2');
                $topico3 = filter_input(INPUT_POST, 'topico3');
				$qtd_anos= filter_input(INPUT_POST, 'qtd_anos');
				$cat_anos= filter_input(INPUT_POST, 'cat_anos');
				$subtitulo1 = filter_input(INPUT_POST, 'subtitulo1');
				$titulo1 = filter_input(INPUT_POST, 'titulo1');
				$texto1 = filter_input(INPUT_POST, 'texto1');
				$item1 = filter_input(INPUT_POST, 'item1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$item3 = filter_input(INPUT_POST, 'item3');
				$item4 = filter_input(INPUT_POST, 'item4');
                $id = filter_input(INPUT_POST, 'id');
				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_home SET titulo=?, subtitulo=?, nome_botao=?, link_botao=?, topico1=?, topico2=?, topico3=?, icone1=?, icone2=?, icone3=?, imagem1=?, imagem2=?, qtd_anos=?, cat_anos=?, subtitulo1=?, titulo1=?, texto1=?, item1=?, item2=?, item3=?, item4=?, banner=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $titulo);   
					$stm->bindValue(2, $subtitulo);   
					$stm->bindValue(3, $nome_botao);   
					$stm->bindValue(4, $link_botao);
					$stm->bindValue(5, $topico1);
					$stm->bindValue(6, $topico2);
					$stm->bindValue(7, $topico3);
					$stm->bindValue(8, upload('icone1', $pastaArquivos, 'N'));
					$stm->bindValue(9, upload('icone2', $pastaArquivos, 'N'));
					$stm->bindValue(10, upload('icone3', $pastaArquivos, 'N'));
					$stm->bindValue(11, upload('imagem1', $pastaArquivos, 'N'));   
					$stm->bindValue(12, upload('imagem2', $pastaArquivos, 'N'));  
					$stm->bindValue(13, $qtd_anos); 
					$stm->bindValue(14, $cat_anos); 
					$stm->bindValue(15, $subtitulo1);
					$stm->bindValue(16, $titulo1);
					$stm->bindValue(17, $texto1);
					$stm->bindValue(18, $item1); 
					$stm->bindValue(19, $item2);
					$stm->bindValue(20, $item3);
					$stm->bindValue(21, $item4);   
					$stm->bindValue(22, upload('banner', $pastaArquivos, 'N'));
					$stm->bindValue(23, $id);   
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
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirHome') {
				
				try{   
					$sql = "DELETE FROM tbl_home WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				echo "	<script>
								window.location='home.php';
								</script>";
								exit;

			}
		}
	}
	
	$HomeInstanciada = 'S';
}