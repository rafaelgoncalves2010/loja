<?php include("conecta.php");
?>

<?php 
	function listarProdutos($conexao){
	$produtos = array();
	$busca = mysqli_query($conexao, "select p.*, c.nome  as categoria_nome from produtos as p join categorias as c on c.id=p.categoria_id");
		while($produto = mysqli_fetch_assoc($busca)){
			 array_push($produtos, $produto);
		}
		return $produtos;

	}

	function buscarProdutos($conexao, $id){
		$query = "select * from produtos where id={$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}


	function adicionaproduto($nome,$preco,$descricao,$categoria_id,$usado,$conexao){
		$query = "insert into produtos (nome,preco,descricao,categoria_id,usado) values ('{$nome}',{$preco},'{$descricao}',{$categoria_id},'{$usado}')";
		return mysqli_query($conexao, $query);
	}

	function removerproduto($conexao, $id){
		$query = "delete from produtos where id={$id}";
		return mysqli_query($conexao, $query);
	}


?>