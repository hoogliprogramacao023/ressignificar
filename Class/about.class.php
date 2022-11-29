<?php
@ session_start();
$AboutInstanciada = '';
if(empty($AboutInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class About {
		
		private $pdo = null;  

		private static $About = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$About)):    
				self::$About = new About($conexao);   
			endif;
			return self::$About;    
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
				$sql = "SELECT * FROM tbl_about where 1=1 $sql $sqlOrdem $sqlLimite";
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
			if(isset($_POST['acao']) && $_POST['acao'] == 'addAbout') {

                $maximo = 3000000;
                // Verificação
                if($_FILES["foto1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                if($_FILES["foto2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                if($_FILES["foto3"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto3"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                if($_FILES["foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }


                if($_FILES["paralax_1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["paralax_1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }


                if($_FILES["paralax_2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["paralax_2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                $titulo = filter_input(INPUT_POST, 'titulo');
                $subtitulo = filter_input(INPUT_POST, 'subtitulo');
                $subtitulo2 = filter_input(INPUT_POST, 'subtitulo2');
				$texto = filter_input(INPUT_POST, 'texto');
				$titulo1 = filter_input(INPUT_POST, 'titulo1');
                $texto1 = filter_input(INPUT_POST, 'texto1');
                $titulo2 = filter_input(INPUT_POST, 'titulo2');
                $texto2 = filter_input(INPUT_POST, 'texto2');
                $titulo3 = filter_input(INPUT_POST, 'titulo3');
                $item1 = filter_input(INPUT_POST, 'item1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$item3 = filter_input(INPUT_POST, 'item3');
                $item4 = filter_input(INPUT_POST, 'item4');
                $subtitulo3 = filter_input(INPUT_POST, 'subtitulo3');
                $titulo4 = filter_input(INPUT_POST, 'titulo4');
                $texto3 = filter_input(INPUT_POST, 'texto3');
                $nome1 = filter_input(INPUT_POST, 'nome1');
                $profissao1 = filter_input(INPUT_POST, 'profissao1');
                $nome2 = filter_input(INPUT_POST, 'nome2');
                $profissao2 = filter_input(INPUT_POST, 'profissao2');
                $nome3 = filter_input(INPUT_POST, 'nome3');
                $profissao3 = filter_input(INPUT_POST, 'profissao3');
                $titulo5 = filter_input(INPUT_POST, 'titulo5');
                $texto4 = filter_input(INPUT_POST, 'texto4');

					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_about (titulo, subtitulo, subtitulo2, texto, titulo1, texto1, titulo2, texto2, titulo3, item1, item2, item3, item4, subtitulo3, titulo4, texto3, nome1, profissao1, foto1, nome2, profissao2, foto2, nome3, profissao3, foto3, foto, titulo5, texto4, paralax_1, paralax_2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $titulo);
						$stm->bindValue(2, $subtitulo);
						$stm->bindValue(3, $subtitulo2);
						$stm->bindValue(4, $texto);
                        $stm->bindValue(5, $titulo1);
                        $stm->bindValue(6, $texto1);
                        $stm->bindValue(7, $titulo2);
                        $stm->bindValue(8, $texto2);
                        $stm->bindValue(9, $titulo3); 
						$stm->bindValue(10, $item1);   
                        $stm->bindValue(11, $item2);
                        $stm->bindValue(12, $item3);
                        $stm->bindValue(13, $item4);
                        $stm->bindValue(14, $subtitulo3);
                        $stm->bindValue(15, $titulo4);
                        $stm->bindValue(16, $texto3);
                        $stm->bindValue(17, $nome1);
                        $stm->bindValue(18, $profissao1);
                        $stm->bindValue(19, upload('foto1', $pastaArquivos, 'N')); 
                        $stm->bindValue(20, $nome2);
                        $stm->bindValue(21, $profissao2);
                        $stm->bindValue(22, upload('foto2', $pastaArquivos, 'N')); 
                        $stm->bindValue(23, $nome3);
                        $stm->bindValue(24, $profissao3);
                        $stm->bindValue(25, upload('foto3', $pastaArquivos, 'N')); 
                        $stm->bindValue(26, upload('foto', $pastaArquivos, 'N'));  
                        $stm->bindValue(27, $titulo5);  
                        $stm->bindValue(28, $texto4);  
                        $stm->bindValue(29, upload('paralax_1', $pastaArquivos, 'N'));  
                        $stm->bindValue(30, upload('paralax_2', $pastaArquivos, 'N'));  
						$stm->execute(); 
						$idAbout = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					echo "	<script>
								window.location='about.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='about.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaAbout') {
	
                $titulo = filter_input(INPUT_POST, 'titulo');
                $subtitulo = filter_input(INPUT_POST, 'subtitulo');
                $subtitulo2 = filter_input(INPUT_POST, 'subtitulo2');
				$texto = filter_input(INPUT_POST, 'texto');
				$titulo1 = filter_input(INPUT_POST, 'titulo1');
                $texto1 = filter_input(INPUT_POST, 'texto1');
                $titulo2 = filter_input(INPUT_POST, 'titulo2');
                $texto2 = filter_input(INPUT_POST, 'texto2');
                $titulo3 = filter_input(INPUT_POST, 'titulo3');
                $item1 = filter_input(INPUT_POST, 'item1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$item3 = filter_input(INPUT_POST, 'item3');
                $item4 = filter_input(INPUT_POST, 'item4');
                $subtitulo3 = filter_input(INPUT_POST, 'subtitulo3');
                $titulo4 = filter_input(INPUT_POST, 'titulo4');
                $texto3 = filter_input(INPUT_POST, 'texto3');
                $nome1 = filter_input(INPUT_POST, 'nome1');
                $profissao1 = filter_input(INPUT_POST, 'profissao1');
                $nome2 = filter_input(INPUT_POST, 'nome2');
                $profissao2 = filter_input(INPUT_POST, 'profissao2');
                $nome3 = filter_input(INPUT_POST, 'nome3');
                $profissao3 = filter_input(INPUT_POST, 'profissao3');
                $titulo5 = filter_input(INPUT_POST, 'titulo5');
                $texto4 = filter_input(INPUT_POST, 'texto4');
                $id = filter_input(INPUT_POST, 'id');

                $maximo = 3000000;
                // Verificação
                if($_FILES["foto1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                if($_FILES["foto2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                if($_FILES["foto3"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto3"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                if($_FILES["foto"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["foto"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }

                if($_FILES["paralax_1"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["paralax_1"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }


                if($_FILES["paralax_2"]["size"] > $maximo) {
                    echo "Erro! O arquivo enviado por você ultrapassa o ";
                    $valorKb = $maximo / 1000;
                    $tamanhoFoto = $_FILES["paralax_2"]["size"] /1000;
                    echo "<script>
                    alert('limite máximo de " . $valorKb . " KB! Envie outro arquivo. Sua imagem tem ".$tamanhoFoto." KB');
                    history.back();
                    </script>";
					exit;
                }
				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_about SET titulo=?, subtitulo=?, subtitulo2=?, texto=?, titulo1=?, texto1=?, titulo2=?, texto2=?, titulo3=?, item1=?, item2=?, item3=?, item4=?, subtitulo3=?, titulo4=?, texto3=?, nome1=?, profissao1=?, foto1=?, nome2=?, profissao2=?, foto2=?, nome3=?, profissao3=?, foto3=?, foto=?, titulo5=?, texto4=?, paralax_1=?, paralax_2=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
                    $stm->bindValue(1, $titulo);
                    $stm->bindValue(2, $subtitulo);
                    $stm->bindValue(3, $subtitulo2);
                    $stm->bindValue(4, $texto);
                    $stm->bindValue(5, $titulo1);
                    $stm->bindValue(6, $texto1);
                    $stm->bindValue(7, $titulo2);
                    $stm->bindValue(8, $texto2);
                    $stm->bindValue(9, $titulo3); 
                    $stm->bindValue(10, $item1);   
                    $stm->bindValue(11, $item2);
                    $stm->bindValue(12, $item3);
                    $stm->bindValue(13, $item4);
                    $stm->bindValue(14, $subtitulo3);
                    $stm->bindValue(15, $titulo4);
                    $stm->bindValue(16, $texto3);
                    $stm->bindValue(17, $nome1);
                    $stm->bindValue(18, $profissao1);
                    $stm->bindValue(19, upload('foto1', $pastaArquivos, 'N')); 
                    $stm->bindValue(20, $nome2);
                    $stm->bindValue(21, $profissao2);
                    $stm->bindValue(22, upload('foto2', $pastaArquivos, 'N')); 
                    $stm->bindValue(23, $nome3);
                    $stm->bindValue(24, $profissao3);
                    $stm->bindValue(25, upload('foto3', $pastaArquivos, 'N')); 
                    $stm->bindValue(26, upload('foto', $pastaArquivos, 'N'));  
                    $stm->bindValue(27, $titulo5);  
                    $stm->bindValue(28, $texto4); 
                    $stm->bindValue(29, upload('paralax_1', $pastaArquivos, 'N'));  
                    $stm->bindValue(30, upload('paralax_2', $pastaArquivos, 'N'));  
					$stm->bindValue(31, $id);   
					$stm->execute(); 
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
					exit;
				}

//var_dump($_POST);exit;
				echo "	<script>
							window.location='{$redireciona}';
							</script>";
							exit;
			}
		}
		
		function excluir() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirAbout') {
				
				try{   
					$sql = "DELETE FROM tbl_about WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				echo "	<script>
								window.location='about.php';
								</script>";
								exit;

			}
		}
	}
	
	$AboutInstanciada = 'S';
}