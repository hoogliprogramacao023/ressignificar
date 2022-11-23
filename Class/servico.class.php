<?php
@ session_start();
$ServicoInstanciada = '';
if(empty($ServicoInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Servico {
		
		private $pdo = null;  

		private static $Servico = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Servico)):    
				self::$Servico = new Servico($conexao);   
			endif;
			return self::$Servico;    
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
				$sql = "SELECT * FROM tbl_servico where 1=1 $sql $sqlOrdem $sqlLimite";
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
			if(isset($_POST['acao']) && $_POST['acao'] == 'addServico') {

                $maximo = 3000000;
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

                $titulo = filter_input(INPUT_POST, 'titulo');
                $subtitulo = filter_input(INPUT_POST, 'subtitulo');
                $titulo2 = filter_input(INPUT_POST, 'titulo2');
				$texto = filter_input(INPUT_POST, 'texto');
                $servico1 = filter_input(INPUT_POST, 'servico1');
                $servico2 = filter_input(INPUT_POST, 'servico2');
                $servico3 = filter_input(INPUT_POST, 'servico3');
                $servico4 = filter_input(INPUT_POST, 'servico4');
                $servico5 = filter_input(INPUT_POST, 'servico5');
                $servico1_link = filter_input(INPUT_POST, 'servico1_link');
                $servico2_link = filter_input(INPUT_POST, 'servico2_link');
                $servico3_link = filter_input(INPUT_POST, 'servico3_link');
                $servico4_link = filter_input(INPUT_POST, 'servico4_link');
                $servico5_link = filter_input(INPUT_POST, 'servico5_link');
                $cta_pergunta = filter_input(INPUT_POST, 'cta_pergunta');
                $cta_botao = filter_input(INPUT_POST, 'cta_botao');
                $texto2 = filter_input(INPUT_POST, 'texto2');
                $item1 = filter_input(INPUT_POST, 'item1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$item3 = filter_input(INPUT_POST, 'item3');
                $item4 = filter_input(INPUT_POST, 'item4');
                $item5 = filter_input(INPUT_POST, 'item5');
                $item6 = filter_input(INPUT_POST, 'item6');
                $item7 = filter_input(INPUT_POST, 'item7');
                $texto3 = filter_input(INPUT_POST, 'texto3');
                $nome_botao = filter_input(INPUT_POST, 'nome_botao');
                $link_botao = filter_input(INPUT_POST, 'link_botao');
                $titulo3 = filter_input(INPUT_POST, 'titulo3');
                $texto4 = filter_input(INPUT_POST, 'texto4');
				$titulo4 = filter_input(INPUT_POST, 'titulo4');
                $texto5 = filter_input(INPUT_POST, 'texto5');
                $titulo5 = filter_input(INPUT_POST, 'titulo5');
                $texto6 = filter_input(INPUT_POST, 'texto6');
                $item8 = filter_input(INPUT_POST, 'item8');
                $item9 = filter_input(INPUT_POST, 'item9');
                $item10 = filter_input(INPUT_POST, 'item10');
                $pergunta1 = filter_input(INPUT_POST, 'pergunta1');
                $resposta1 = filter_input(INPUT_POST, 'resposta1');
                $pergunta2 = filter_input(INPUT_POST, 'pergunta2');
                $resposta2 = filter_input(INPUT_POST, 'resposta2');
                $pergunta3 = filter_input(INPUT_POST, 'pergunta3');
                $resposta3 = filter_input(INPUT_POST, 'resposta3');
                $pergunta4 = filter_input(INPUT_POST, 'pergunta4');
                $resposta4 = filter_input(INPUT_POST, 'resposta4');
                $item11 = filter_input(INPUT_POST, 'item11');
                $item12 = filter_input(INPUT_POST, 'item12');
                $item13 = filter_input(INPUT_POST, 'item13');
                $item14 = filter_input(INPUT_POST, 'item14');
                $name_url = filter_input(INPUT_POST, 'name_url');

					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_servico (titulo, subtitulo, titulo2, texto, servico1, servico2, servico3, servico4, servico5, servico1_link, servico2_link, servico3_link, servico4_link, servico5_link, cta_pergunta, cta_botao, texto2, item1, item2, item3, item4, item5, item6, item7, texto3, nome_botao, link_botao, titulo3, texto4, titulo4, texto5, foto, titulo5, texto6, item8, item9, item10, pergunta1, resposta1, pergunta2, resposta2, pergunta3, resposta3, pergunta4, resposta4, item11, item12, item13, item14, name_url, foto1) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $titulo);
						$stm->bindValue(2, $subtitulo);
						$stm->bindValue(3, $titulo2);
						$stm->bindValue(4, $texto);
                        $stm->bindValue(5, $servico1);
                        $stm->bindValue(6, $servico2);
                        $stm->bindValue(7, $servico3);
                        $stm->bindValue(8, $servico4);
                        $stm->bindValue(9, $servico5); 
						$stm->bindValue(10, $servico1_link);   
                        $stm->bindValue(11, $servico2_link);
                        $stm->bindValue(12, $servico3_link);
                        $stm->bindValue(13, $servico4_link);
                        $stm->bindValue(14, $servico5_link);
                        $stm->bindValue(15, $cta_pergunta);
                        $stm->bindValue(16, $cta_botao);
                        $stm->bindValue(17, $texto2);
                        $stm->bindValue(18, $item1);
                        $stm->bindValue(19, $item2);
                        $stm->bindValue(20, $item3);
                        $stm->bindValue(21, $item4);
                        $stm->bindValue(22, $item5);
                        $stm->bindValue(23, $item6);
                        $stm->bindValue(24, $item7);
                        $stm->bindValue(25, $texto3);
                        $stm->bindValue(26, $nome_botao);
                        $stm->bindValue(27, $link_botao);
                        $stm->bindValue(28, $titulo3);
                        $stm->bindValue(29, $texto4);
                        $stm->bindValue(30, $titulo4);
                        $stm->bindValue(31, $texto5);
                        $stm->bindValue(32, upload('foto', $pastaArquivos, 'N')); 
                        $stm->bindValue(33, $titulo5);
                        $stm->bindValue(34, $texto6);
                        $stm->bindValue(35, $item8);
                        $stm->bindValue(36, $item9);
                        $stm->bindValue(37, $item10);
                        $stm->bindValue(38, $pergunta1);
                        $stm->bindValue(39, $resposta1);
                        $stm->bindValue(40, $pergunta2);
                        $stm->bindValue(41, $resposta2);
                        $stm->bindValue(42, $pergunta3);
                        $stm->bindValue(43, $resposta3);
                        $stm->bindValue(44, $pergunta4);
                        $stm->bindValue(45, $resposta4);
                        $stm->bindValue(46, $item11);
                        $stm->bindValue(47, $item12);
                        $stm->bindValue(48, $item13);
                        $stm->bindValue(49, $item14);
                        $stm->bindValue(50, $name_url);
                        $stm->bindValue(51, upload('foto1', $pastaArquivos, 'N')); 

						$stm->execute(); 
						$idServico = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					echo "	<script>
								window.location='servico.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='servico.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaServico') {
	
                $maximo = 3000000;
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
                $subtitulo = filter_input(INPUT_POST, 'subtitulo');
                $titulo2 = filter_input(INPUT_POST, 'titulo2');
				$texto = filter_input(INPUT_POST, 'texto');
                $servico1 = filter_input(INPUT_POST, 'servico1');
                $servico2 = filter_input(INPUT_POST, 'servico2');
                $servico3 = filter_input(INPUT_POST, 'servico3');
                $servico4 = filter_input(INPUT_POST, 'servico4');
                $servico5 = filter_input(INPUT_POST, 'servico5');
                $servico1_link = filter_input(INPUT_POST, 'servico1_link');
                $servico2_link = filter_input(INPUT_POST, 'servico2_link');
                $servico3_link = filter_input(INPUT_POST, 'servico3_link');
                $servico4_link = filter_input(INPUT_POST, 'servico4_link');
                $servico5_link = filter_input(INPUT_POST, 'servico5_link');
                $cta_pergunta = filter_input(INPUT_POST, 'cta_pergunta');
                $cta_botao = filter_input(INPUT_POST, 'cta_botao');
                $texto2 = filter_input(INPUT_POST, 'texto2');
                $item1 = filter_input(INPUT_POST, 'item1');
				$item2 = filter_input(INPUT_POST, 'item2');
				$item3 = filter_input(INPUT_POST, 'item3');
                $item4 = filter_input(INPUT_POST, 'item4');
                $item5 = filter_input(INPUT_POST, 'item5');
                $item6 = filter_input(INPUT_POST, 'item6');
                $item7 = filter_input(INPUT_POST, 'item7');
                $texto3 = filter_input(INPUT_POST, 'texto3');
                $nome_botao = filter_input(INPUT_POST, 'nome_botao');
                $link_botao = filter_input(INPUT_POST, 'link_botao');
                $titulo3 = filter_input(INPUT_POST, 'titulo3');
                $texto4 = filter_input(INPUT_POST, 'texto4');
				$titulo4 = filter_input(INPUT_POST, 'titulo4');
                $texto5 = filter_input(INPUT_POST, 'texto5');
                $titulo5 = filter_input(INPUT_POST, 'titulo5');
                $texto6 = filter_input(INPUT_POST, 'texto6');
                $item8 = filter_input(INPUT_POST, 'item8');
                $item9 = filter_input(INPUT_POST, 'item9');
                $item10 = filter_input(INPUT_POST, 'item10');
                $pergunta1 = filter_input(INPUT_POST, 'pergunta1');
                $resposta1 = filter_input(INPUT_POST, 'resposta1');
                $pergunta2 = filter_input(INPUT_POST, 'pergunta2');
                $resposta2 = filter_input(INPUT_POST, 'resposta2');
                $pergunta3 = filter_input(INPUT_POST, 'pergunta3');
                $resposta3 = filter_input(INPUT_POST, 'resposta3');
                $pergunta4 = filter_input(INPUT_POST, 'pergunta4');
                $resposta4 = filter_input(INPUT_POST, 'resposta4');
                $id = filter_input(INPUT_POST, 'id');
                $item11 = filter_input(INPUT_POST, 'item11');
                $item12 = filter_input(INPUT_POST, 'item12');
                $item13 = filter_input(INPUT_POST, 'item13');
                $item14 = filter_input(INPUT_POST, 'item14');
                $name_url = filter_input(INPUT_POST, 'name_url');

				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_servico SET titulo=?, subtitulo=?, titulo2=?, texto=?, servico1=?, servico2=?, servico3=?, servico4=?, servico5=?, servico1_link=?, servico2_link=?, servico3_link=?, servico4_link=?, servico5_link=?, cta_pergunta=?, cta_botao=?, texto2=?, item1=?, item2=?, item3=?, item4=?, item5=?, item6=?, item7=?, texto3=?, nome_botao=?, link_botao=?, titulo3=?, texto4=?, titulo4=?, texto5=?, foto=?, titulo5=?, texto6=?, item8=?, item9=?, item10=?, pergunta1=?, resposta1=?, pergunta2=?, resposta2=?, pergunta3=?, resposta3=?, pergunta4=?, resposta4=?, item11=?, item12=?, item13=?, item14=?, name_url=?, foto1=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
                    $stm->bindValue(1, $titulo);
                    $stm->bindValue(2, $subtitulo);
                    $stm->bindValue(3, $titulo2);
                    $stm->bindValue(4, $texto);
                    $stm->bindValue(5, $servico1);
                    $stm->bindValue(6, $servico2);
                    $stm->bindValue(7, $servico3);
                    $stm->bindValue(8, $servico4);
                    $stm->bindValue(9, $servico5); 
                    $stm->bindValue(10, $servico1_link);   
                    $stm->bindValue(11, $servico2_link);
                    $stm->bindValue(12, $servico3_link);
                    $stm->bindValue(13, $servico4_link);
                    $stm->bindValue(14, $servico5_link);
                    $stm->bindValue(15, $cta_pergunta);
                    $stm->bindValue(16, $cta_botao);
                    $stm->bindValue(17, $texto2);
                    $stm->bindValue(18, $item1);
                    $stm->bindValue(19, $item2);
                    $stm->bindValue(20, $item3);
                    $stm->bindValue(21, $item4);
                    $stm->bindValue(22, $item5);
                    $stm->bindValue(23, $item6);
                    $stm->bindValue(24, $item7);
                    $stm->bindValue(25, $texto3);
                    $stm->bindValue(26, $nome_botao);
                    $stm->bindValue(27, $link_botao);
                    $stm->bindValue(28, $titulo3);
                    $stm->bindValue(29, $texto4);
                    $stm->bindValue(30, $titulo4);
                    $stm->bindValue(31, $texto5);
                    $stm->bindValue(32, upload('foto', $pastaArquivos, 'N')); 
                    $stm->bindValue(33, $titulo5);
                    $stm->bindValue(34, $texto6);
                    $stm->bindValue(35, $item8);
                    $stm->bindValue(36, $item9);
                    $stm->bindValue(37, $item10);
                    $stm->bindValue(38, $pergunta1);
                    $stm->bindValue(39, $resposta1);
                    $stm->bindValue(40, $pergunta2);
                    $stm->bindValue(41, $resposta2);
                    $stm->bindValue(42, $pergunta3);
                    $stm->bindValue(43, $resposta3);
                    $stm->bindValue(44, $pergunta4);
                    $stm->bindValue(45, $resposta4);
                    $stm->bindValue(46, $item11);
                    $stm->bindValue(47, $item12);
                    $stm->bindValue(48, $item13);
                    $stm->bindValue(49, $item14);
                    $stm->bindValue(50, $name_url);
                    $stm->bindValue(51, upload('foto1', $pastaArquivos, 'N')); 
					$stm->bindValue(52, $id);   
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
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirServico') {
				
				try{   
					$sql = "DELETE FROM tbl_servico WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				echo "	<script>
								window.location='servico.php';
								</script>";
								exit;

			}
		}
	}
	
	$ServicoInstanciada = 'S';
}