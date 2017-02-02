<?php include("conecta.php");
?>

<?php 
	function listarProdutos($conexao){
	$produtos = array();
	$busca = mysqli_query($conexao, "select*from produtos");
		while($produto = mysqli_fetch_assoc($busca)){
			 array_push($produtos, $produto);
		}
		return $produtos;

	}

	function adicionaproduto($nome,$preco,$descricao,$conexao){
		$query = "insert into produtos (nome,preco,descricao) values ('{$nome}',{$preco},'{$descricao}')";
		return mysqli_query($conexao, $query);
	}

	function removerproduto($conexao, $id){
		$query = "delete from produtos where id={$id}";
		return mysqli_query($conexao, $query);
	}


?>