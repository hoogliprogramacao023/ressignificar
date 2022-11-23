<?php
@ session_start();
$AtendimentoInstanciada = '';
if(empty($AtendimentoInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Atendimento {
		
		private $pdo = null;  

		private static $Atendimento = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Atendimento)):    
				self::$Atendimento = new Atendimento($conexao);   
			endif;
			return self::$Atendimento;    
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
				$sql = "SELECT * FROM tbl_atendimento where 1=1 $sql $sqlOrdem $sqlLimite";
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
			if(isset($_POST['acao']) && $_POST['acao'] == 'addAtendimento') {


				$titulo = filter_input(INPUT_POST, 'titulo');
				$subtitulo = filter_input(INPUT_POST, 'subtitulo');
				$texto = filter_input(INPUT_POST, 'texto');
				$item1 = filter_input(INPUT_POST, 'item1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$pergunta1 = filter_input(INPUT_POST, 'pergunta1');
				$resposta1 = filter_input(INPUT_POST, 'resposta1');
                $pergunta2 = filter_input(INPUT_POST, 'pergunta2');
				$resposta2 = filter_input(INPUT_POST, 'resposta2');
                $pergunta3 = filter_input(INPUT_POST, 'pergunta3');
				$resposta3 = filter_input(INPUT_POST, 'resposta3');
                $pergunta4 = filter_input(INPUT_POST, 'pergunta4');
				$resposta4 = filter_input(INPUT_POST, 'resposta4');
				$titulo2 = filter_input(INPUT_POST, 'titulo2');
				$subtitulo2 = filter_input(INPUT_POST, 'subtitulo2');
				
					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_atendimento (titulo, subtitulo, texto, item1, item2, pergunta1, resposta1, pergunta2, resposta2, pergunta3, resposta3, pergunta4, resposta4, titulo2, subtitulo2) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $titulo);   
						$stm->bindValue(2, $subtitulo);   
						$stm->bindValue(3, $texto);   
						$stm->bindValue(4, $item1);
						$stm->bindValue(5, $item2);
                        $stm->bindValue(6, $pergunta1);
                        $stm->bindValue(7, $resposta1);
                        $stm->bindValue(8, $pergunta2);
                        $stm->bindValue(9, $resposta2);
                        $stm->bindValue(10, $pergunta3);
                        $stm->bindValue(11, $resposta3);
                        $stm->bindValue(12, $pergunta4);
                        $stm->bindValue(13, $resposta4);
						$stm->bindValue(14, $titulo2);
						$stm->bindValue(15, $subtitulo2);
						$stm->execute(); 
						$idAtendimento = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					echo "	<script>
								window.location='atendimento.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='atendimento.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaAtendimento') {


                $titulo = filter_input(INPUT_POST, 'titulo');
				$subtitulo = filter_input(INPUT_POST, 'subtitulo');
				$texto = filter_input(INPUT_POST, 'texto');
				$item1 = filter_input(INPUT_POST, 'item1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$pergunta1 = filter_input(INPUT_POST, 'pergunta1');
				$resposta1 = filter_input(INPUT_POST, 'resposta1');
                $pergunta2 = filter_input(INPUT_POST, 'pergunta2');
				$resposta2 = filter_input(INPUT_POST, 'resposta2');
                $pergunta3 = filter_input(INPUT_POST, 'pergunta3');
				$resposta3 = filter_input(INPUT_POST, 'resposta3');
                $pergunta4 = filter_input(INPUT_POST, 'pergunta4');
				$resposta4 = filter_input(INPUT_POST, 'resposta4');
				$titulo2 = filter_input(INPUT_POST, 'titulo2');
				$subtitulo2 = filter_input(INPUT_POST, 'subtitulo2');
                $id = filter_input(INPUT_POST, 'id');
				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_atendimento SET titulo=?, subtitulo=?, texto=?, item1=?, item2=?, pergunta1=?, resposta1=?, pergunta2=?, resposta2=?, pergunta3=?, resposta3=?, pergunta4=?, resposta4=?, titulo2=?, subtitulo2=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
                    $stm->bindValue(1, $titulo);   
                    $stm->bindValue(2, $subtitulo);   
                    $stm->bindValue(3, $texto);   
                    $stm->bindValue(4, $item1);
                    $stm->bindValue(5, $item2);
                    $stm->bindValue(6, $pergunta1);
                    $stm->bindValue(7, $resposta1);
                    $stm->bindValue(8, $pergunta2);
                    $stm->bindValue(9, $resposta2);
                    $stm->bindValue(10, $pergunta3);
                    $stm->bindValue(11, $resposta3);
                    $stm->bindValue(12, $pergunta4);
                    $stm->bindValue(13, $resposta4);
                    $stm->bindValue(14, $titulo2);
                    $stm->bindValue(15, $subtitulo2);
					$stm->bindValue(16, $id);   
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
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirAtendimento') {
				
				try{   
					$sql = "DELETE FROM tbl_atendimento WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				echo "	<script>
								window.location='atendimento.php';
								</script>";
								exit;

			}
		}
	}
	
	$AtendimentoInstanciada = 'S';
}