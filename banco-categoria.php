<?php include("conecta.php");
	  

	function listarCategorias($conexao){

		$categorias = array();
		$query = "select*from categorias";
		$busca = mysqli_query($conexao,$query);
			while($categoria = mysqli_fetch_assoc($busca)){
				array_push($categorias, $categoria);
			}
	return $categorias;
	}

	?>