<?php
	//Criei um banco de dados relacional de uma forma segura de uma forma que não comprometa nosso sistema de ataques maliciosos.
	date_default_timezone_set('America/Sao_Paulo');
	$pdo = new PDO('mysql:host=localhost;dbname=crud','root','');
	if(isset($_POST['acao'])){
		$nome             = $_POST['nome'];
		$sku              = $_POST['sku'];
		$preco            = $_POST['preco'];
		$descricao        = $_POST['descricao'];
		$quantidade       = $_POST['quantidade'];
		$categoria 		  = $_POST['categoria'];
		$anexo            = $_POST['anexo'];
		$momento_registro = date('Y-m-d H:i:s');
		$sql = $pdo->prepare("INSERT INTO `cadastro` VALUES (null,?,?,?,?,?,?,?,?)");
		$sql->execute(array($nome,$sku,$preco,$descricao,$quantidade,$categoria,$anexo,$momento_registro));     
		echo 'Produto cadastrado com sucesso!';
	}
?>
	<section class="banner-principal">
		<di class="overlay"></di><!--overlay-->
		<div class="clear"></div><!--clear-->
	</section><!--banner-principal-->
	<section class="formulario-produto">
		<div class="center">
			<form method="post">
				<h2>cadastrar produto</h2> 
				<input type="text" name="nome" placeholder="Nome..." required />
				<div></div><!--div-cega-->
				<input type="text" name="sku" placeholder="SKU (Código)..." required />
				<div></div><!--div-cega-->
				<input type="text" name="preco" placeholder="Preço..." required />
				<div></div><!--div-cega-->
				<input type="text" name="descricao" placeholder="Descrição..." required />
				<div></div><!--div-cega-->
				<input type="text" name="quantidade" placeholder="Quantidade..." required />
				<div></div><!--div-cega-->
				<input type="text" name="categoria" placeholder="Categoria..." required />
				<div></div><!--div-cega-->
				<input type="file" name="anexo" required />
				<div></div><!--div-cega-->
				<input type="Submit" name="acao" value="Cadastrar!">
			</form>
			<div class="clear"></div><!--clear-->
		</div><!--center-->
	</section><!--formulario-produto-->