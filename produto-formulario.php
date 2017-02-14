<?php include("cabecalho.php"); 
	  include("banco-categoria.php");
	  include("conecta.php");

	  $categorias = listarCategorias($conexao);
?>

        <h1>Formulário de cadastro</h1>
        <form  action="adiciona-produto.php" method="post">
            Nome: <input class="form-control" type="text" name="nome" /><br/>
            Preço: <input class="form-control" type="number" name="preco" /><br/>
			Descrição: <input class="form-control" type="textarea" name="descricao"/><br/>
			Usado: <input type="checkbox" name="usado" value="true"> Sim

			<select name="categoria_id"> Categoria:
			<?php foreach ($categorias as $categoria):  ?>
				<option value="<?=$categoria['id']?>"> 
					<?=$categoria['nome']?>
				<?php endforeach; ?>
			</select> 







            <input type="submit" value="Cadastrar"/>
        </form>
        
<?php include("rodape.php"); ?>