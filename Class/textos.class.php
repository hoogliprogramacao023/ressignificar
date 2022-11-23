<?php
@session_start();
$TextosInstanciada = '';
if(empty($TextosInstanciada)) {
	if(file_exists('Connection/conexao.php')) {
		require_once('Connection/con-pdo.php');
		require_once('Class/funcoes.php');
	} else {
		require_once('../Connection/con-pdo.php');
		require_once('../Class/funcoes.php');
	}
	
	class Textos {
		
		private $pdo = null;  

		private static $Textos = null; 

		private function __construct($conexao){  
			$this->pdo = $conexao;  
		}
	  
		public static function getInstance($conexao){   
			if (!isset(self::$Textos)):    
				self::$Textos = new Textos($conexao);   
			endif;
			return self::$Textos;    
		}
		
	
		function rsDados($id='', $orderBy='', $limite='', $pagina_individual='', $ativo='') {
			
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
			if(!empty($pagina_individual)) {
				$sql .= " and pagina_individual = ?"; 
				$nCampos++;
				$campo[$nCampos] = $pagina_individual;
			}
			if(!empty($ativo)) {
				$sql .= " and ativo = ?"; 
				$nCampos++;
				$campo[$nCampos] = $ativo;
			}

			/// ORDEM		
			if(!empty($orderBy)) {
				$sqlOrdem = " order by {$orderBy}";
			}
			
			if(!empty($limite)) {
				$sqlLimite = " limit 0,{$limite}";
			}
			
			try{   
				$sql = "SELECT * FROM tbl_textos where 1=1 $sql $sqlOrdem $sqlLimite";
				$stm = $this->pdo->prepare($sql);
				
				for($i=1; $i<=$nCampos; $i++) {
					$stm->bindValue($i, $campo[$i]);
				}
				
				$stm->execute();
				$rsDados = $stm->fetchAll(PDO::FETCH_OBJ);
				//print_r($rsDados);
				if($id <> '' or $limite == 1) {
					
					if(isset($rsDados[0]) && !empty($rsDados[0])){
						return($rsDados[0]);
					}
				
				} else {
					return($rsDados);
				}
			} catch(PDOException $erro){   
				echo $erro->getMessage(); 
			}
		}
		
		function editar($redireciona='textos.php') {
			if(isset($_POST['acao']) && $_POST['acao'] == 'editaTexto') {
				if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
					$titulo = $_POST['titulo'];
				}else{
					$titulo = '';	
				}
				if(isset($_POST['titulo2']) && !empty($_POST['titulo2'])){
					$titulo2 = $_POST['titulo2'];
				}else{
					$titulo2 = '';	
				}
				if(isset($_POST['titulo3']) && !empty($_POST['titulo3'])){
					$titulo3 = $_POST['titulo3'];
				}else{
					$titulo3 = '';	
				}
				if(isset($_POST['titulo4']) && !empty($_POST['titulo4'])){
					$titulo4 = $_POST['titulo4'];
				}else{
					$titulo4 = '';	
				}
				if(isset($_POST['titulo5']) && !empty($_POST['titulo5'])){
					$titulo5 = $_POST['titulo5'];
				}else{
					$titulo5 = '';	
				}
				if(isset($_POST['titulo6']) && !empty($_POST['titulo6'])){
					$titulo6 = $_POST['titulo6'];
				}else{
					$titulo6 = '';	
				}
				if(isset($_POST['titulo7']) && !empty($_POST['titulo7'])){
					$titulo7 = $_POST['titulo7'];
				}else{
					$titulo7 = '';	
				}
				if(isset($_POST['titulo8']) && !empty($_POST['titulo8'])){
					$titulo8 = $_POST['titulo8'];
				}else{
					$titulo8 = '';	
				}
				if(isset($_POST['descricao']) && !empty($_POST['descricao'])){
					$descricao = $_POST['descricao'];
				}else{
					$descricao = '';	
				}
				if(isset($_POST['descricao2']) && !empty($_POST['descricao2'])){
					$descricao2 = $_POST['descricao2'];
				}else{
					$descricao2 = '';	
				}
			
				if(isset($_POST['tem_descricao3']) && !empty($_POST['tem_descricao3'])){
					$tem_descricao3 = $_POST['tem_descricao3'];
				}else{
					$tem_descricao3 = '';	
				}
					if(isset($_POST['descricao3']) && !empty($_POST['descricao3'])){
					$descricao3 = $_POST['descricao3'];
				}else{
					$descricao3 = '';	
				}
				
				if(isset($_POST['descricao4']) && !empty($_POST['descricao4'])){
					$descricao4 = $_POST['descricao4'];
				}else{
					$descricao4 = '';	
				}
				if(isset($_POST['tem_descricao4']) && !empty($_POST['tem_descricao4'])){
					$tem_descricao4 = $_POST['tem_descricao4'];
				}else{
					$tem_descricao4 = '';	
				}
				if(isset($_POST['titulo_img']) && !empty($_POST['titulo_img'])){
					$titulo_img = $_POST['titulo_img'];
				}else{
					$titulo_img = '';	
				}
				if(isset($_POST['titulo4_sessao1']) && !empty($_POST['titulo4_sessao1'])){
					$titulo4_sessao1 = $_POST['titulo4_sessao1'];
				}else{
					$titulo4_sessao1 = '';	
				}
				if(isset($_POST['titulo5_sessao1']) && !empty($_POST['titulo5_sessao1'])){
					$titulo5_sessao1 = $_POST['titulo5_sessao1'];
				}else{
					$titulo5_sessao1 = '';	
				}
				if(isset($_POST['titulo6_sessao1']) && !empty($_POST['titulo6_sessao1'])){
					$titulo6_sessao1 = $_POST['titulo6_sessao1'];
				}else{
					$titulo6_sessao1 = '';	
				}
				if(isset($_POST['titulo7_sessao1']) && !empty($_POST['titulo7_sessao1'])){
					$titulo7_sessao1 = $_POST['titulo7_sessao1'];
				}else{
					$titulo7_sessao1 = '';	
				}
				if(isset($_POST['titulo8_sessao1']) && !empty($_POST['titulo8_sessao1'])){
					$titulo8_sessao1 = $_POST['titulo8_sessao1'];
				}else{
					$titulo8_sessao1 = '';	
				}
				if(isset($_POST['titulo9_sessao1']) && !empty($_POST['titulo9_sessao1'])){
					$titulo9_sessao1 = $_POST['titulo9_sessao1'];
				}else{
					$titulo9_sessao1 = '';	
				}
				if(isset($_POST['titulo10_sessao1']) && !empty($_POST['titulo10_sessao1'])){
					$titulo10_sessao1 = $_POST['titulo10_sessao1'];
				}else{
					$titulo10_sessao11 = '';	
				}
				if(isset($_POST['titulo11_sessao1']) && !empty($_POST['titulo11_sessao1'])){
					$titulo11_sessao1 = $_POST['titulo11_sessao1'];
				}else{
					$titulo11_sessao1 = '';	
				}
				if(isset($_POST['titulo12_sessao1']) && !empty($_POST['titulo12_sessao1'])){
					$titulo12_sessao1 = $_POST['titulo12_sessao1'];
				}else{
					$titulo12_sessao1 = '';	
				}
				if(isset($_POST['titulo13_sessao1']) && !empty($_POST['titulo13_sessao1'])){
					$titulo13_sessao1 = $_POST['titulo13_sessao1'];
				}else{
					$titulo13_sessao1 = '';	
				}
				if(isset($_POST['titulo14_sessao1']) && !empty($_POST['titulo14_sessao1'])){
					$titulo14_sessao1 = $_POST['titulo14_sessao1'];
				}else{
					$titulo14_sessao1 = '';	
				}
				if(isset($_POST['titulo15_sessao1']) && !empty($_POST['titulo15_sessao1'])){
					$titulo15_sessao1 = $_POST['titulo15_sessao1'];
				}else{
					$titulo15_sessao1 = '';	
				}
				if(isset($_POST['titulo16_sessao1']) && !empty($_POST['titulo16_sessao1'])){
					$titulo16_sessao1 = $_POST['titulo16_sessao1'];
				}else{
					$titulo16_sessao1 = '';	
				}
				if(isset($_POST['titulo17_sessao1']) && !empty($_POST['titulo17_sessao1'])){
					$titulo17_sessao1 = $_POST['titulo17_sessao1'];
				}else{
					$titulo17_sessao1 = '';	
				}
				
				if(isset($_POST['titulo19_sessao1']) && !empty($_POST['titulo19_sessao1'])){
					$titulo19_sessao1 = $_POST['titulo19_sessao1'];
				}else{
					$titulo19_sessao1 = '';	
				}
				if(isset($_POST['titulo20_sessao1']) && !empty($_POST['titulo20_sessao1'])){
					$titulo20_sessao1 = $_POST['titulo20_sessao1'];
				}else{
					$titulo20_sessao1 = '';	
				}
				if(isset($_POST['titulo21_sessao1']) && !empty($_POST['titulo21_sessao1'])){
					$titulo21_sessao1 = $_POST['titulo21_sessao1'];
				}else{
					$titulo21_sessao1 = '';	
				}
				if(isset($_POST['titulo22_sessao1']) && !empty($_POST['titulo22_sessao1'])){
					$titulo22_sessao1 = $_POST['titulo22_sessao1'];
				}else{
					$titulo22_sessao1 = '';	
				}
				if(isset($_POST['titulo23_sessao1']) && !empty($_POST['titulo23_sessao1'])){
					$titulo23_sessao1 = $_POST['titulo23_sessao1'];
				}else{
					$titulo23_sessao1 = '';	
				}
				if(isset($_POST['titulo24_sessao1']) && !empty($_POST['titulo24_sessao1'])){
					$titulo24_sessao1 = $_POST['titulo24_sessao1'];
				}else{
					$titulo24_sessao1 = '';	
				}
				if(isset($_POST['titulo25_sessao1']) && !empty($_POST['titulo25_sessao1'])){
					$titulo25_sessao1 = $_POST['titulo25_sessao1'];
				}else{
					$titulo25_sessao1 = '';	
				}
				if(isset($_POST['breve_sobre']) && !empty($_POST['breve_sobre'])){
					$breve_sobre = $_POST['breve_sobre'];
				}else{
					$breve_sobre = '';	
				}
				if(isset($_POST['breve_sobre2']) && !empty($_POST['breve_sobre2'])){
					$breve_sobre2 = $_POST['breve_sobre2'];
				}else{
					$breve_sobre2 = '';	
				}
				if(isset($_POST['titulo_sessao_sobre']) && !empty($_POST['titulo_sessao_sobre'])){
					$titulo_sessao_sobre = $_POST['titulo_sessao_sobre'];
				}else{
					$titulo_sessao_sobre = '';	
				}
				
			
				$titulo_1_alinhamento = filter_input(INPUT_POST, 'titulo_1_alinhamento');
				$titulo_2_alinhamento = filter_input(INPUT_POST, 'titulo_2_alinhamento');
				$titulo_3_alinhamento = filter_input(INPUT_POST, 'titulo_3_alinhamento');
				$titulo_4_alinhamento = filter_input(INPUT_POST, 'titulo_4_alinhamento');
				$titulo_5_alinhamento = filter_input(INPUT_POST, 'titulo_5_alinhamento');
				$titulo_6_alinhamento = filter_input(INPUT_POST, 'titulo_6_alinhamento');
				$titulo_7_alinhamento = filter_input(INPUT_POST, 'titulo_7_alinhamento');
				$titulo_8_alinhamento = filter_input(INPUT_POST, 'titulo_8_alinhamento');

				//$texto = htmlentities(filter_input(INPUT_POST, 'texto'));
				if(isset($_POST['texto']) && !empty($_POST['texto'])){
					$texto = $_POST['texto'];
				}else{
					$texto = '';	
				}
				if(isset($_POST['texto_2']) && !empty($_POST['texto_2'])){
					$texto_2 = $_POST['texto_2'];
				}else{
					$texto_2 = '';	
				}
				if(isset($_POST['texto_3']) && !empty($_POST['texto_3'])){
					$texto_3 = $_POST['texto_3'];
				}else{
					$texto_3 = '';	
				}
				if(isset($_POST['texto_4']) && !empty($_POST['texto_4'])){
					$texto_4 = $_POST['texto_4'];
				}else{
					$texto_4 = '';	
				}
				if(isset($_POST['texto_5']) && !empty($_POST['texto_5'])){
					$texto_5 = $_POST['texto_5'];
				}else{
					$texto_5 = '';	
				}
				if(isset($_POST['texto_6']) && !empty($_POST['texto_6'])){
					$texto_6 = $_POST['texto_6'];
				}else{
					$texto_6 = '';	
				}
				if(isset($_POST['texto_7']) && !empty($_POST['texto_7'])){
					$texto_7 = $_POST['texto_7'];
				}else{
					$texto_7 = '';	
				}
				if(isset($_POST['texto_8']) && !empty($_POST['texto_8'])){
					$texto_8 = $_POST['texto_8'];
				}else{
					$texto_8 = '';	
				}
				if(isset($_POST['tem_breve_sobre']) && !empty($_POST['tem_breve_sobre'])){
					$tem_breve_sobre = $_POST['tem_breve_sobre'];
				}else{
					$tem_breve_sobre = '';	
				}
				if(isset($_POST['nome_botao_1']) && !empty($_POST['nome_botao_1'])){
					$nome_botao_1 = $_POST['nome_botao_1'];
				}else{
					$nome_botao_1 = '';	
				}
				if(isset($_POST['nome_botao_2']) && !empty($_POST['nome_botao_2'])){
					$nome_botao_2 = $_POST['nome_botao_2'];
				}else{
					$nome_botao_2 = '';	
				}
				if(isset($_POST['nome_botao_3']) && !empty($_POST['nome_botao_3'])){
					$nome_botao_3 = $_POST['nome_botao_3'];
				}else{
					$nome_botao_3 = '';	
				}
				if(isset($_POST['nome_botao_4']) && !empty($_POST['nome_botao_4'])){
					$nome_botao_4 = $_POST['nome_botao_4'];
				}else{
					$nome_botao_4 = '';	
				}
				if(isset($_POST['nome_botao_5']) && !empty($_POST['nome_botao_5'])){
					$nome_botao_5 = $_POST['nome_botao_5'];
				}else{
					$nome_botao_5 = '';	
				}
				if(isset($_POST['nome_botao_6']) && !empty($_POST['nome_botao_6'])){
					$nome_botao_6 = $_POST['nome_botao_6'];
				}else{
					$nome_botao_6 = '';	
				}
				if(isset($_POST['nome_botao_7']) && !empty($_POST['nome_botao_7'])){
					$nome_botao_7 = $_POST['nome_botao_7'];
				}else{
					$nome_botao_7 = '';	
				}
				if(isset($_POST['nome_botao_8']) && !empty($_POST['nome_botao_8'])){
					$nome_botao_8 = $_POST['nome_botao_8'];
				}else{
					$nome_botao_8 = '';	
				}
				$link_botao_1 = filter_input(INPUT_POST, 'link_botao_1');
				$link_botao_2 = filter_input(INPUT_POST, 'link_botao_2');
				$link_botao_3 = filter_input(INPUT_POST, 'link_botao_3');
				$link_botao_4 = filter_input(INPUT_POST, 'link_botao_4');
				$link_botao_5 = filter_input(INPUT_POST, 'link_botao_5');
				$link_botao_6 = filter_input(INPUT_POST, 'link_botao_6');
				$link_botao_7 = filter_input(INPUT_POST, 'link_botao_7');
				$link_botao_8 = filter_input(INPUT_POST, 'link_botao_8');
				$meta_title = filter_input(INPUT_POST, 'meta_title');
				$meta_keywords = filter_input(INPUT_POST, 'meta_keywords');
				$meta_description = filter_input(INPUT_POST, 'meta_description');
				$id = filter_input(INPUT_POST, 'id');
				$embed = filter_input(INPUT_POST, 'embed');
				$pagina_individual = filter_input(INPUT_POST, 'pagina_individual');
				$ativo = filter_input(INPUT_POST, 'ativo');
				
				try { 
					if(file_exists('Connection/conexao.php')) {
							$pastaArquivos = 'img';
						} else {
							$pastaArquivos = '../img';
						}
					$sql = "UPDATE tbl_textos SET foto=?, foto_2=?, foto_3=?, foto_4=?, foto_5=?, foto_6=?, foto_7=?, foto_8=?, titulo=?, titulo2=?, titulo3=?, titulo4=?, titulo5=?, titulo6=?, titulo7=?, titulo8=?, descricao=?, texto=?, texto_2=?, texto_3=?, texto_4=?, texto_5=?, texto_6=?, texto_7=?, texto_8=?, meta_title=?, meta_keywords=?, meta_description=?, embed=?, titulo_1_alinhamento=?, titulo_2_alinhamento=?, titulo_3_alinhamento=?, titulo_4_alinhamento=?, titulo_5_alinhamento=?, titulo_6_alinhamento=?, titulo_7_alinhamento=?, titulo_8_alinhamento=?, nome_botao_1=?, nome_botao_2=?, nome_botao_3=?, nome_botao_4=?, nome_botao_5=?, nome_botao_6=?, nome_botao_7=?, nome_botao_8=?, link_botao_1=?, link_botao_2=?, link_botao_3=?, link_botao_4=?, link_botao_5=?, link_botao_6=?, link_botao_7=?, link_botao_8=?, paralax_1=?, paralax_2=?, paralax_3=?, paralax_4=?, paralax_5=?, paralax_6=?, paralax_7=?, paralax_8=?, ativo=?, descricao2=?, tem_descricao2=?, descricao3=?, tem_descricao3=?, descricao4=?, tem_descricao4=?, titulo_img=?, titulo4_sessao1=?, titulo5_sessao1=?, titulo6_sessao1=?, titulo7_sessao1=?, titulo8_sessao1=?, foto10_sessao1=?, foto11_sessao1=?, titulo9_sessao1=?, titulo10_sessao1=?, titulo11_sessao1=?, titulo12_sessao1=?, titulo13_sessao1=?, titulo14_sessao1=?, titulo15_sessao1=?, titulo16_sessao1=?, titulo17_sessao1=?, titulo18_sessao1=?, titulo19_sessao1=?, titulo20_sessao1=?, titulo21_sessao1=?, titulo22_sessao1=?, titulo23_sessao1=?, titulo24_sessao1=?, titulo25_sessao1=?, paralax_testemunho=?, tem_titulo5_sessao1=?, breve_sobre=?, breve_sobre2=?, titulo_sessao_sobre=?, tem_breve_sobre2=? WHERE id=?";   
					$stm = $this->pdo->prepare($sql);   
					$stm->bindValue(1, upload('foto', $pastaArquivos, 'N'));
					$stm->bindValue(2, upload('foto_2', $pastaArquivos, 'N'));
					$stm->bindValue(3, upload('foto_3', $pastaArquivos, 'N'));
					$stm->bindValue(4, upload('foto_4', $pastaArquivos, 'N'));
					$stm->bindValue(5, upload('foto_5', $pastaArquivos, 'N'));
					$stm->bindValue(6, upload('foto_6', $pastaArquivos, 'N'));
					$stm->bindValue(7, upload('foto_7', $pastaArquivos, 'N'));
					$stm->bindValue(8, upload('foto_8', $pastaArquivos, 'N'));   
					$stm->bindValue(9, $titulo);
					$stm->bindValue(10, $titulo2);
					$stm->bindValue(11, $titulo3);
					$stm->bindValue(12, $titulo4);
					$stm->bindValue(13, $titulo5);
					$stm->bindValue(14, $titulo6);
					$stm->bindValue(15, $titulo7);
					$stm->bindValue(16, $titulo8);   
					$stm->bindValue(17, $descricao);
					$stm->bindValue(18, $texto);
					$stm->bindValue(19, $texto_2);
					$stm->bindValue(20, $texto_3);
					$stm->bindValue(21, $texto_4);
					$stm->bindValue(22, $texto_5);
					$stm->bindValue(23, $texto_6);
					$stm->bindValue(24, $texto_7);
					$stm->bindValue(25, $texto_8);
					$stm->bindValue(26, $meta_title);
					$stm->bindValue(27, $meta_keywords);
					$stm->bindValue(28, $meta_description);
					$stm->bindValue(29, $embed);
					$stm->bindValue(30, $titulo_1_alinhamento); 
					$stm->bindValue(31, $titulo_2_alinhamento); 
					$stm->bindValue(32, $titulo_3_alinhamento); 
					$stm->bindValue(33, $titulo_4_alinhamento); 
					$stm->bindValue(34, $titulo_5_alinhamento); 
					$stm->bindValue(35, $titulo_6_alinhamento); 
					$stm->bindValue(36, $titulo_7_alinhamento); 
					$stm->bindValue(37, $titulo_8_alinhamento);
					$stm->bindValue(38, $nome_botao_1);
					$stm->bindValue(39, $nome_botao_2);
					$stm->bindValue(40, $nome_botao_3);
					$stm->bindValue(41, $nome_botao_4);
					$stm->bindValue(42, $nome_botao_5);
					$stm->bindValue(43, $nome_botao_6);
					$stm->bindValue(44, $nome_botao_7);
					$stm->bindValue(45, $nome_botao_8); 
					$stm->bindValue(46, $link_botao_1);
					$stm->bindValue(47, $link_botao_2);
					$stm->bindValue(48, $link_botao_3);
					$stm->bindValue(49, $link_botao_4);
					$stm->bindValue(50, $link_botao_5);
					$stm->bindValue(51, $link_botao_6);
					$stm->bindValue(52, $link_botao_7);
					$stm->bindValue(53, $link_botao_8);
					$stm->bindValue(54, upload('paralax_1', $pastaArquivos, 'N'));
					$stm->bindValue(55, upload('paralax_2', $pastaArquivos, 'N'));
					$stm->bindValue(56, upload('paralax_3', $pastaArquivos, 'N'));
					$stm->bindValue(57, upload('paralax_4', $pastaArquivos, 'N'));
					$stm->bindValue(58, upload('paralax_5', $pastaArquivos, 'N'));
					$stm->bindValue(59, upload('paralax_6', $pastaArquivos, 'N'));
					$stm->bindValue(60, upload('paralax_7', $pastaArquivos, 'N')); 
					$stm->bindValue(61, upload('paralax_8', $pastaArquivos, 'N'));
					$stm->bindValue(62, $ativo); 
					$stm->bindValue(63, $descricao2);
					$stm->bindValue(64, $tem_descricao2);
					$stm->bindValue(65, $descricao3);
					$stm->bindValue(66, $tem_descricao3);
					$stm->bindValue(67, $descricao4);
					$stm->bindValue(68, $tem_descricao4);
					$stm->bindValue(69, $titulo_img);
					$stm->bindValue(70, $titulo4_sessao1);
					$stm->bindValue(71, $titulo5_sessao1);
					$stm->bindValue(72, $titulo6_sessao1);
					$stm->bindValue(73, $titulo7_sessao1);
					$stm->bindValue(74, $titulo8_sessao1);
					$stm->bindValue(75, upload('foto10_sessao1', $pastaArquivos, 'N'));
					$stm->bindValue(76, upload('foto11_sessao1', $pastaArquivos, 'N'));
					$stm->bindValue(77, $titulo9_sessao1);
					$stm->bindValue(78, $titulo10_sessao1);
					$stm->bindValue(79, $titulo11_sessao1);
					$stm->bindValue(80, $titulo12_sessao1);
					$stm->bindValue(81, $titulo13_sessao1);
					$stm->bindValue(82, $titulo14_sessao1);
					$stm->bindValue(83, $titulo15_sessao1);
					$stm->bindValue(84, $titulo16_sessao1);
					$stm->bindValue(85, $titulo17_sessao1);
					$stm->bindValue(86, upload('titulo18_sessao1', $pastaArquivos, 'N'));
					$stm->bindValue(87, $titulo19_sessao1);
					$stm->bindValue(88, $titulo20_sessao1);
					$stm->bindValue(89, $titulo21_sessao1);
					$stm->bindValue(90, $titulo22_sessao1);
					$stm->bindValue(91, $titulo23_sessao1);
					$stm->bindValue(92, $titulo24_sessao1);
					$stm->bindValue(93, $titulo25_sessao1);
					$stm->bindValue(94, upload('paralax_testemunho', $pastaArquivos, 'N'));
					$stm->bindValue(95, $tem_titulo5_sessao1);
					$stm->bindValue(96, $breve_sobre);
					$stm->bindValue(97, $breve_sobre2);
					$stm->bindValue(98, $titulo_sessao_sobre);
					$stm->bindValue(99, $tem_breve_sobre2);
					$stm->bindValue(100, $id);   
					$stm->execute(); 
				} catch(PDOException $erro){
					echo $erro->getMessage(); 
				}
				//exit;
				if($pagina_individual == 'S'){
					echo "	<script>
							alert('Modificado com sucesso!');
							window.location='editar-texto.php?pi=S&id=$id';
						</script>";
						exit;
				}else{
				echo "	<script>
							window.location='{$redireciona}';
						</script>";
						exit;
				}
			}
		}
		
	
	}
	
	$TextosInstanciada = 'S';
}