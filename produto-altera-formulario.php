<?php include("cabecalho.php"); 
	  include("banco-categoria.php");
	  include("conecta.php");
	  include("banco-produto.php");


	  $id = $_GET['id'];
	  $produtos = buscarProdutos($conexao, $id);
	  $categorias = listarCategorias($conexao);
	  $usado = $produtos['usado'] ? "checked=checked" : "";
?>

        <h1>Alterando Produto</h1>
        <form  action="altera-produto.php" method="post">
            Nome: <input class="form-control" type="text" name="nome" value="<?=$produtos['nome']?>" /><br/>
            Preço: <input class="form-control" type="number" name="preco" value="<?=$produtos['preco']?>" /><br/>
			Descrição: <input class="form-control" type="textarea" name="descricao" value="<?=$produtos['descricao']?>"/><br/>
			Usado: <input type="checkbox" name="usado" <?=$usado?> value="true"> Sim

			<select name="categoria_id"> Categoria:
			<?php foreach ($categorias as $categoria):  ?>
				<option value="<?=$categoria['id']?>"> 
					<?=$categoria['nome']?>
				<?php endforeach; ?>
			</select> 







            <input type="submit" value="Alterar"/>
        </form>
        
<?php include("rodape.php"); ?>