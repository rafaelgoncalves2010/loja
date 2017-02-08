<?php include("cabecalho.php"); 
	  include("conecta.php");
	  include("banco-produto.php");
	  


	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria_id = $_POST['categoria_id']; 
	


	if(adicionaproduto($nome,$preco,$descricao,$categoria_id,$conexao)){

		?> <div class="container"> <p class="alert-success"> Produto adicionado </p> </div><?php

	}else{
		
		$msg = mysqli_error($conexao);

		?>

		<div class="container"> 
		<p class="alert-danger"> Produto não adicionado </p> 
		<p> Erro ocorrido:</p>  <?= $msg?>
        </div> <?php
	}
 ?>

 <?php include("rodape.php"); ?>

