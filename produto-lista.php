<?php include("cabecalho.php"); 
	  include("conecta.php");
	  include("banco-produto.php");
	  include("banco-categoria.php"); 

	if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true"){ 
?>
	<p class="alert alert-success">Produto removido</p>
<?php
	}
 ?>	

<table class="table table-striped table-bordered">

<tr>
     <td> <p class="" >Nome</p> </td> 
     <td> <p class="">Preço</p> </td> 
     <td> <p class="">Descricao</p> </td> 
     <td> <p class="">Categoria</p> </td>
     <td> <p class="">Excluir</p> </td>
</tr> 


<?php
$produtos = listarProdutos($conexao);
foreach ($produtos as $produto) {
?>
	<tr>
     <td> <?=$produto['nome']?> </td> 
     <td> <?=$produto['preco']?> </td>
     <td> <?=substr($produto['descricao'], 0,15)?> </td>
      <td> <?=$produto['categoria_nome']?> </td>  
     <td> 


     <form action="remover-produto.php" method="post">
     	<input type="hidden" name="id" value="<?=$produto['id']?>">
     	<button type="submit" class="btn btn-danger"> Remover</button>
     </form>



       </td> 
    </tr> 

<?php

}

?>
</table>


<?php include("rodape.php"); ?>