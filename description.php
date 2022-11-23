<meta name="theme-color" content="#91d8f7">
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){?>
<title><?php if(isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)){echo $metastags->meta_title_principal;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_principal) && !empty($metastags->meta_description_principal)){echo $metastags->meta_description_principal;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_principal) && !empty($metastags->meta_keywords_principal)){echo $metastags->meta_keywords_principal;}?>">

		<meta name="twitter:card" content="<?php if(isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)){echo $metastags->meta_title_principal;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_principal) && !empty($metastags->meta_title_principal)){echo $metastags->meta_title_principal;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	
<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'contato.php'){?>
<title><?php if(isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)){echo $metastags->meta_title_contato;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_contato) && !empty($metastags->meta_description_contato)){echo $metastags->meta_description_principal;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_contato) && !empty($metastags->meta_keywords_contato)){echo $metastags->meta_keywords_contato;}?>">
	<meta name="twitter:card" content="<?php if(isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)){echo $metastags->meta_title_contato;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_contato) && !empty($metastags->meta_title_contato)){echo $metastags->meta_title_contato;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	
<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'sucesso.php'){?>
<title><?php if(isset($metastags->meta_title_sucesso) && !empty($metastags->meta_title_sucesso)){echo $metastags->meta_title_sucesso;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_sucesso) && !empty($metastags->meta_description_sucesso)){echo $metastags->meta_description_sucesso;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_sucesso) && !empty($metastags->meta_keywords_sucesso)){echo $metastags->meta_keywords_sucesso;}?>">
	<meta name="twitter:card" content="<?php if(isset($metastags->meta_title_sucesso) && !empty($metastags->meta_title_sucesso)){echo $metastags->meta_title_sucesso;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_sucesso) && !empty($metastags->meta_title_sucesso)){echo $metastags->meta_title_sucesso;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	
<?php }?>



<?php if(basename($_SERVER['SCRIPT_NAME']) == 'sobre.php'){?>
<title><?php if(isset($metastags->meta_title_sobre) && !empty($metastags->meta_title_sobre)){echo $metastags->meta_title_sobre;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_sobre) && !empty($metastags->meta_description_sobre)){echo $metastags->meta_description_sobre;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_sobre) && !empty($metastags->meta_keywords_sobre)){echo $metastags->meta_keywords_sobre;}?>">
	<meta name="twitter:card" content="<?php if(isset($metastags->meta_title_sobre) && !empty($metastags->meta_title_sobre)){echo $metastags->meta_title_sobre;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_sobre) && !empty($metastags->meta_title_sobre)){echo $metastags->meta_title_sobre;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />

<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'especialidades.php'){?>
<title><?php if(isset($metastags->meta_title_produtos) && !empty($metastags->meta_title_produtos)){echo $metastags->meta_title_produtos;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_produtos) && !empty($metastags->meta_description_produtos)){echo $metastags->meta_description_produtos;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_produtos) && !empty($metastags->meta_keywords_produtos)){echo $metastags->meta_keywords_produtos;}?>">
	<meta name="twitter:card" content="<?php if(isset($metastags->meta_title_produtos) && !empty($metastags->meta_title_produtos)){echo $metastags->meta_title_produtos;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_produtos) && !empty($metastags->meta_title_produtos)){echo $metastags->meta_title_produtos;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	
<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'blog.php'){?>
<title><?php if(isset($metastags->meta_title_blog) && !empty($metastags->meta_title_blog)){echo $metastags->meta_title_blog;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_blog) && !empty($metastags->meta_description_blog)){echo $metastags->meta_description_blog;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_blog) && !empty($metastags->meta_keywords_blog)){echo $metastags->meta_keywords_blog;}?>">
	<meta name="twitter:card" content="<?php if(isset($metastags->meta_title_blog) && !empty($metastags->meta_title_blog)){echo $metastags->meta_title_blog;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_blog) && !empty($metastags->meta_title_blog)){echo $metastags->meta_title_blog;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />

<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'servicos.php'){?>
<title><?php if(isset($metastags->meta_title_servico) && !empty($metastags->meta_title_servico)){echo $metastags->meta_title_servico;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_servico) && !empty($metastags->meta_description_servico)){echo $metastags->meta_description_servico;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_servico) && !empty($metastags->meta_keywords_servico)){echo $metastags->meta_keywords_servico;}?>">
	<meta name="twitter:card" content="<?php if(isset($metastags->meta_title_servico) && !empty($metastags->meta_title_servico)){echo $metastags->meta_title_servico;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_servico) && !empty($metastags->meta_title_servico)){echo $metastags->meta_title_servico;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
		
<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'projetos.php'){?>
<title><?php if(isset($metastags->meta_title_espaco) && !empty($metastags->meta_title_espaco)){echo $metastags->meta_title_espaco;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_espaco) && !empty($metastags->meta_description_espaco)){echo $metastags->meta_description_espaco;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_espaco) && !empty($metastags->meta_keywords_espaco)){echo $metastags->meta_keywords_espaco;}?>">
	<meta name="twitter:card" content="<?php if(isset($metastags->meta_title_espaco) && !empty($metastags->meta_title_espaco)){echo $metastags->meta_title_espaco;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_espaco) && !empty($metastags->meta_title_espaco)){echo $metastags->meta_title_espaco;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
		
<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'especialistas.php'){?>
<title><?php if(isset($metastags->meta_title_equipe) && !empty($metastags->meta_title_equipe)){echo $metastags->meta_title_equipe;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_equipe) && !empty($metastags->meta_description_equipe)){echo $metastags->meta_description_equipe;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_equipe) && !empty($metastags->meta_keywords_equipe)){echo $metastags->meta_keywords_equipe;}?>">
	<meta name="twitter:card" content="<?php if(isset($metastags->meta_title_equipe) && !empty($metastags->meta_title_equipe)){echo $metastags->meta_title_equipe;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_equipe) && !empty($metastags->meta_title_equipe)){echo $metastags->meta_title_equipe;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />

<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'convenios.php'){?>
<title><?php if(isset($metastags->meta_title_convenio) && !empty($metastags->meta_title_convenio)){echo $metastags->meta_title_convenio;}?></title>
    <meta name="description" content="<?php if(isset($metastags->meta_description_convenio) && !empty($metastags->meta_description_convenio)){echo $metastags->meta_description_convenio;}?>"/>
	<meta name="keywords" content="<?php if(isset($metastags->meta_keywords_convenio) && !empty($metastags->meta_keywords_convenio)){echo $metastags->meta_keywords_convenio;}?>">
	<meta name="twitter:card" content="<?php if(isset($metastags->meta_title_convenio) && !empty($metastags->meta_title_convenio)){echo $metastags->meta_title_convenio;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($metastags->meta_title_convenio) && !empty($metastags->meta_title_convenio)){echo $metastags->meta_title_convenio;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->logo_principal;?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	
<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'desc-blog.php'){?>
<title><?php if(isset($descBlog->meta_title) && !empty($descBlog->meta_title)){echo $descBlog->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($descBlog->meta_description) && !empty($descBlog->meta_description)){echo $descBlog->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($descBlog->meta_keywords) && !empty($descBlog->meta_keywords)){echo $descBlog->meta_keywords;}?>">
	<meta name="twitter:card" content="<?php if(isset($descBlog->meta_title) && !empty($descBlog->meta_title)){echo $descBlog->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($descBlog->meta_title) && !empty($descBlog->meta_title)){echo $descBlog->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $descBlog->foto?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />

<?php }?>
<?php if(basename($_SERVER['SCRIPT_NAME']) == 'desc-servico.php'){?>
<title><?php if(isset($descServico->meta_title) && !empty($descServico->meta_title)){echo $descServico->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($descServico->meta_description) && !empty($descServico->meta_description)){echo $descServico->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($descServico->meta_keywords) && !empty($descServico->meta_keywords)){echo $descServico->meta_keywords;}?>">
	<meta name="twitter:card" content="<?php if(isset($descServico->meta_title) && !empty($descServico->meta_title)){echo $descServico->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($descServico->meta_title) && !empty($descServico->meta_title)){echo $descServico->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $descServico->foto_principal?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />

<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'desc-exames.php'){?>
<title><?php if(isset($descServico->meta_title) && !empty($descServico->meta_title)){echo $descServico->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($descServico->meta_description) && !empty($descServico->meta_description)){echo $descServico->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($descServico->meta_keywords) && !empty($descServico->meta_keywords)){echo $descServico->meta_keywords;}?>">
	<meta name="twitter:card" content="<?php if(isset($descServico->meta_title) && !empty($descServico->meta_title)){echo $descServico->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($descServico->meta_title) && !empty($descServico->meta_title)){echo $descServico->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $descServico->foto_principal?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />

<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'desc-especialidade.php'){?>
<title><?php if(isset($descEspecialidade->meta_title) && !empty($descEspecialidade->meta_title)){echo $descEspecialidade->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($descEspecialidade->meta_description) && !empty($descEspecialidade->meta_description)){echo $descEspecialidade->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($descEspecialidade->meta_keywords) && !empty($descEspecialidade->meta_keywords)){echo $descEspecialidade->meta_keywords;}?>">
	<meta name="twitter:card" content="<?php if(isset($descEspecialidade->meta_title) && !empty($descEspecialidade->meta_title)){echo $descEspecialidade->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($descEspecialidade->meta_title) && !empty($descEspecialidade->meta_title)){echo $descEspecialidade->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $descEspecialidade->foto_principal?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />
	
<?php }?>

<?php if(basename($_SERVER['SCRIPT_NAME']) == 'desc-projetos.php'){?>
<title><?php if(isset($descProcedimentos->meta_title) && !empty($descProcedimentos->meta_title)){echo $descProcedimentos->meta_title;}?></title>
    <meta name="description" content="<?php if(isset($descProcedimentos->meta_description) && !empty($descProcedimentos->meta_description)){echo $descProcedimentos->meta_description;}?>"/>
	<meta name="keywords" content="<?php if(isset($descProcedimentos->meta_keywords) && !empty($descProcedimentos->meta_keywords)){echo $descProcedimentos->meta_keywords;}?>">
	<meta name="twitter:card" content="<?php if(isset($descProcedimentos->meta_title) && !empty($descProcedimentos->meta_title)){echo $descProcedimentos->meta_title;}?>" />
		<meta name="twitter:site" content="<?php echo SITE_URL;?>" />
		<meta name="twitter:creator" content="Hoogli" />
		<meta property="og:title" content="<?php if(isset($descProcedimentos->meta_title) && !empty($descProcedimentos->meta_title)){echo $descProcedimentos->meta_title;}?>" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="<?php echo SITE_URL;?>" />
		<meta property="og:image:type" content="image/png" />
		<meta property="og:image" content="<?php echo SITE_URL;?>/img/<?php echo $descProcedimentos->foto_principal?>" />
		<meta property="og:image:width" content="400" />
		<meta property="og:image:height" content="300" />

<?php }?>

<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<meta name="author" content="Hoogli">
<link rel="shortcut icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
<link rel="icon" href="<?php echo SITE_URL;?>/img/<?php echo $infoSistema->favicon;?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<?php if(isset($infoSistema->link_fonte_titulo) && !empty($infoSistema->link_fonte_titulo)){?>
<link href="<?php echo $infoSistema->link_fonte_titulo;?>" rel="stylesheet">
<?php }?>
<?php if(isset($infoSistema->link_fonte_texto_apoio) && !empty($infoSistema->link_fonte_texto_apoio)){?>
<link href="<?php echo $infoSistema->link_fonte_texto_apoio;?>" rel="stylesheet">
<?php }?>
<style>
	:root{
		--font-family-titulo:<?php echo $infoSistema->font_family_titulo;?>;
		--font-weight-titulo:<?php echo $infoSistema->font_weight_titulo;?>;
		--font-family-texto-apoio:<?php echo $infoSistema->font_family_texto_apoio;?>;
		--font-weight-texto-apoio:<?php echo $infoSistema->font_weight_texto_apoio;?>;
		--cor-primaria:<?php echo $infoSistema->cor_primaria;?>;
		--cor-secundaria:<?php echo $infoSistema->cor_secundaria;?>;
		--cor-titulo:<?php echo $infoSistema->cor_titulo;?>;
		--cor-background:<?php echo $infoSistema->cor_background;?>;
		--cor-botao:<?php echo $infoSistema->cor_botao;?>;
		--cor-botao-hover:<?php echo $infoSistema->cor_botao_hover;?>;
		--cor-menu:<?php echo $infoSistema->cor_menu;?>;
	}
</style>	

   <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/ambed-icons/style.css">
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/css/ambed.css" />
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/css/ambed-responsive.css" />

    <!-- modes css -->
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/assets/css/ambed-light.css">