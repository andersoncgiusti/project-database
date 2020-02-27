<?php
	//Criei um banco de dados relacional de uma forma segura de uma forma que não comprometa nosso sistema de ataques maliciosos.
	date_default_timezone_set('America/Sao_Paulo');
	$pdo = new PDO('mysql:host=localhost;dbname=crud','root','');
	if(isset($_POST['acao'])){
		$codigo           = $_POST['codigo'];
		$nome             = $_POST['nome'];
		$momento_registro = date('Y-m-d H:i:s');

		$sql = $pdo->prepare("INSERT INTO `categoria` VALUES (null,?,?,?)");

		$sql->execute(array($codigo,$nome,$momento_registro));     
		echo 'Categoria cadastrada com sucesso!';
	}
?>
<section class="banner-secundario">
		<di class="overlay"></di><!--overlay-->
		<div class="center">
		<div class="clear"></div><!--clear-->
		</div><!--center-->
</section><!--banner-secundario-->
<section class="formulario-categoria">
		<div class="center">
			<form method="post">
				<h2>cadastrar categoria</h2> 
				<input type="text" name="codigo" placeholder="Código..." required />
				<div></div><!--div-cega-->
				<input type="text" name="nome" placeholder="Nome..." required />
				<div></div><!--div-cega-->
				<input type="Submit" name="acao" value="Cadastrar!">
			</form>
			<div class="clear"></div><!--clear-->
		</div><!--center-->
</section><!--formulario-categoria-->