<?php
@ session_start();
$PsicologiaInstanciada = '';
if(empty($PsicologiaInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Psicologia {
		
		private $pdo = null;  

		private static $Psicologia = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Psicologia)):    
				self::$Psicologia = new Psicologia($conexao);   
			endif;
			return self::$Psicologia;    
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
				$sql = "SELECT * FROM tbl_psicologia where 1=1 $sql $sqlOrdem $sqlLimite";
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
			if(isset($_POST['acao']) && $_POST['acao'] == 'addPsicologia') {

                $maximo = 120000;
                // Verificação
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

				$titulo = filter_input(INPUT_POST, 'titulo');
                $item1 = filter_input(INPUT_POST, 'item1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$item3 = filter_input(INPUT_POST, 'item3');
                $item4 = filter_input(INPUT_POST, 'item4');
				$subtitulo = filter_input(INPUT_POST, 'subtitulo');
                $titulo2 = filter_input(INPUT_POST, 'titulo2');
				$texto = filter_input(INPUT_POST, 'texto');
                $titulo3 = filter_input(INPUT_POST, 'titulo3');
                $nome_botao = filter_input(INPUT_POST, 'nome_botao');
                $link_botao = filter_input(INPUT_POST, 'link_botao');

					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_psicologia (titulo, item1, item2, item3, item4, subtitulo, titulo2, texto, titulo3, nome_botao, link_botao, foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $titulo);   
						$stm->bindValue(2, $item1);
						$stm->bindValue(3, $item2);
						$stm->bindValue(4, $item3);
                        $stm->bindValue(5, $item4);
						$stm->bindValue(6, $subtitulo);   
                        $stm->bindValue(7, $titulo2);
						$stm->bindValue(8, $texto);
                        $stm->bindValue(9, $titulo3);
                        $stm->bindValue(10, $nome_botao);
                        $stm->bindValue(11, $link_botao);
                        $stm->bindValue(12, upload('foto', $pastaArquivos, 'N'));     
						$stm->execute(); 
						$idPsicologia = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					echo "	<script>
								window.location='psicologia.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='psicologia.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaPsicologia') {

                $maximo = 120000;
                // Verificação
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

                $titulo = filter_input(INPUT_POST, 'titulo');
                $item1 = filter_input(INPUT_POST, 'item1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$item3 = filter_input(INPUT_POST, 'item3');
                $item4 = filter_input(INPUT_POST, 'item4');
				$subtitulo = filter_input(INPUT_POST, 'subtitulo');
                $titulo2 = filter_input(INPUT_POST, 'titulo2');
				$texto = filter_input(INPUT_POST, 'texto');
                $titulo3 = filter_input(INPUT_POST, 'titulo3');
                $nome_botao = filter_input(INPUT_POST, 'nome_botao');
                $link_botao = filter_input(INPUT_POST, 'link_botao');
                $id = filter_input(INPUT_POST, 'id');
				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_psicologia SET titulo=?, item1=?, item2=?, item3=?, item4=?, subtitulo=?, titulo2=?, texto=?, titulo3=?, nome_botao=?, link_botao=?, foto=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
                    $stm->bindValue(1, $titulo);   
                    $stm->bindValue(2, $item1);
                    $stm->bindValue(3, $item2);
                    $stm->bindValue(4, $item3);
                    $stm->bindValue(5, $item4);
                    $stm->bindValue(6, $subtitulo);   
                    $stm->bindValue(7, $titulo2);
                    $stm->bindValue(8, $texto); 
                    $stm->bindValue(9, $titulo3);
                    $stm->bindValue(10, $nome_botao);
                    $stm->bindValue(11, $link_botao);
                    $stm->bindValue(12, upload('foto', $pastaArquivos, 'N'));  
					$stm->bindValue(13, $id);   
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
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirPsicologia') {
				
				try{   
					$sql = "DELETE FROM tbl_psicologia WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				echo "	<script>
								window.location='psicologia.php';
								</script>";
								exit;

			}
		}
	}
	
	$PsicologiaInstanciada = 'S';
}