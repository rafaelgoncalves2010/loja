<?php include("cabecalho.php"); 
	  include("banco-categoria.php");
	  include("conecta.php");
?>

        <h1>Formulário de cadastro</h1>
        <form  action="adiciona-produto.php" method="post">
            Nome: <input class="form-control" type="text" name="nome" /><br/>
            Preço: <input class="form-control" type="number" name="preco" /><br/>
			Descrição: <input class="form-control" type="textarea" name="descricao"/><br/>
			Categoria: 
			
			<?php 
				$categorias = listarCategorias($conexao);
				foreach ($categorias as $categoria):  ?>
					<input type="radio" name="categoria_id" value="<?=$categoria['id']?>"> <?=$categoria['name']?>
				
				<?php
				endforeach;

			?>








            <input type="submit" value="Cadastrar"/>
        </form>
        
<?php include("rodape.php"); ?>