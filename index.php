<?php include('config.php'); ?>
<!DOCTYPE html>
<!--Criei uma página simples para cadastro de produto e categoria, com menu e responsivo-->
<html>
	<head>
		<title>Teste WebJump Back-end</title>
		<meta charset="utf-8" />
		<script rel="js/all.min.js"></script> 
		<link href="<?php echo INCLUDE_PATH; ?>css/all.min.css" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
		<link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
		<link rel="icon" href="images/favicon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
<body>
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url) {
			case 'produto':
				echo '<target target="produto" />';
				break;

			case 'categoria':
				echo '<target target="categoria" />';
				break;
		}
	?>
	<header>
		<div class="center">
			<div class="logo left"><img src="images/go-logo.png"></a></div><!--logo-->
				<nav class="desktop right">
					<ul>
						<li><a href="<?php echo INCLUDE_PATH; ?>">home</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>produto">produto</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>categoria">categoria</a></li>
					</ul>
				</nav>
				<nav class="mobile right">
					<div class="botao-menu-mobile">
						<i class="fas fa-bars"></i>
					</div>
					<ul>
						<li><a href="<?php echo INCLUDE_PATH; ?>">home</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>produto">produto</a></li>
						<li><a href="<?php echo INCLUDE_PATH; ?>categoria">categoria</a></li>
					</ul>
				</nav>
				<div class="clear"></div><!--clear-->
		</div><!--center-->
	</header>
	<?php
		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			if($url != 'produto' && $url != 'categoria'){
				$pagina404 = true;
				include('pages/404.php');
			}else{
				include('pages/home.php');
			}
		}
	?>
	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Teste Back-end Anderson Carvalho Giusti</p>
		<div class="clear"></div><!--clear-->
	 	</div><!--center-->	 	
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</html>