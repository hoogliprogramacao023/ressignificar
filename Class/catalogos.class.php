<?php
@ session_start();
$CatalogosInstanciada = '';
if(empty($CatalogosInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Catalogos {
		
		private $pdo = null;  

		private static $Catalogos = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Catalogos)):    
				self::$Catalogos = new Catalogos($conexao);   
			endif;
			return self::$Catalogos;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $url_amigavel='', $destaque='', $ativo='', $categoria_id='') {
		
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
		
			if(!empty($url_amigavel)) {
				$sql .= " and url_amigavel = ?"; 
				$nCampos++;
				$campo[$nCampos] = $url_amigavel;
			}

			if(!empty($destaque)) {
				$sql .= " and destaque = ?"; 
				$nCampos++;
				$campo[$nCampos] = $destaque;
			}

			if(!empty($ativo)) {
				$sql .= " and ativo = ?"; 
				$nCampos++;
				$campo[$nCampos] = $ativo;
			}
			if(!empty($categoria_id)) {
				$sql .= " and categoria_id = ?"; 
				$nCampos++;
				$campo[$nCampos] = $id_categoria;
			}
			if(isset($_POST['id_cat']) && !empty($_POST['id_cat'])) {
				$sql .= " and id_categoria = '{$_POST['id_cat']}'"; 
			}

			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_catalogos where 1=1 $sql $sqlOrdem $sqlLimite";
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
		    
		    
		   
			if(isset($_POST['acao']) && $_POST['acao'] == 'addCatalogo') {

				
				$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
				$texto = $_POST['texto'];
		       $categoria_id =filter_input(INPUT_POST, 'categoria_id', FILTER_SANITIZE_STRING);
					try{

						if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
						
						$sql = "INSERT INTO tbl_catalogos (titulo, texto, foto, categoria_id) VALUES (?, ?, ?, ?)";   
						$stm = $this->pdo->prepare($sql);   
						$stm->bindValue(1, $titulo);   
						$stm->bindValue(2, $texto);   
						$stm->bindValue(3, upload('foto', $pastaArquivos, 'N'));   
						$stm->bindValue(4, $categoria_id); 
					
						$stm->execute(); 
						$idBanner = $this->pdo->lastInsertId();
						
						if($redireciona == '') {
							$redireciona = '.';
						}
						
						
					} catch(PDOException $erro){
						echo $erro->getMessage(); 
					}
					echo "	<script>
								window.location='catalogos.php';
								</script>";
								exit;
				
			}
		}
		
		function editar($redireciona='catalogos.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaCatalogo') {
				$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
				$texto = filter_input(INPUT_POST, 'texto', FILTER_SANITIZE_STRING);
				$categoria_id = filter_input(INPUT_POST, 'categoria_id', FILTER_SANITIZE_STRING);
				$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
		
				
				try { 

					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
				
					$sql = "UPDATE tbl_catalogos SET titulo=?, texto=?, foto=?,  categoria_id=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $titulo);   
					$stm->bindValue(2, $texto);   
					$stm->bindValue(3, upload('foto', $pastaArquivos, 'N'));   
			    	$stm->bindValue(4, $categoria_id);   
					$stm->bindValue(5, $id);   
					$stm->execute(); 
			
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
					var_dump($erro->getMessage());
				}

				echo "	<script>
							window.location='{$redireciona}';
							</script>";
							exit;
			}
		}
		function excluir() {
			if(isset($_GET['acao']) && $_GET['acao'] == 'excluirCatalogo') {
				
				try{   
					$sql = "DELETE FROM tbl_catalogos WHERE id=? ";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, $_GET['id']);   
					$stm->execute();
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				echo "	<script>
								window.location='catalogos.php';
								</script>";
								exit;

			}
		}
		
	public function catalogosCategoria()
	{
	    try{
	        $sql = "	SELECT A.id, A.titulo, A.texto, A.foto, B.nome FROM tbl_catalogos A INNER JOIN tbl_categoria B ON A.categoria_id = B.id";
	        $stm = $this->pdo->prepare($sql);
	        $stm->execute();
	        $rsCatalogosCategoria = $stm->fetchAll(PDO::FETCH_OBJ);
	        return $rsCatalogosCategoria; 
	    }catch(PDOException $erro){
					echo $erro->getMessage(); 
					
	    }
	}


	}
	
	
	
	$CatalogoInstanciada = 'S';
}