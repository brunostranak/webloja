<?php

require "../cnx.php";

$id = $_GET["id"];

$comando = "SELECT * FROM tblProduto WHERE idProduto = '$id'";
$retorno = mysqli_query(conexao(), $comando);


$registro = mysqli_fetch_assoc($retorno);
$id2= $registro["idCategoria"];
///
$comando2 = "SELECT * FROM tblcategoria WHERE idCategoria = '$id2'";
$retorno2 = mysqli_query(conexao(), $comando2);
$registro2= mysqli_fetch_assoc($retorno2);




$comando3= "SELECT * FROM tblCategoria";
$retorno3 = mysqli_query(conexao(), $comando3);


while($registro3 = mysqli_fetch_assoc($retorno3)){
	$todos[]=$registro3;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="atualizarProduto.php" method="POST" enctype="multipart/form-data">

	<input type="hidden" name="id" 
		value="<?php echo $registro["idProduto"]; ?>">

	Descricao: <input type="text" name="descricao" 
		value="<?php echo $registro["descricao"]; ?>">
	Preco: <input type="text" name="preco" 
		value="<?php echo $registro["preco"];?>">
	Categoria: <select name="categoria" value="">
		
		<?php
		
		
		
			
			foreach($todos as $linha):
			
			echo "<option value=$linha[idCategoria]> $linha[nomeCategoria] </option>";
			

			endforeach 
			
		
		
		?>
		</select>
		
	Imagem: <input type="file" name="imagem">
	
	
	Sobre:
	<input maxlength="500" type="text" name="sobre" value="<?=$registro['sobre'];?>">
	
	
	
	
	
	
	<input type="submit">
</form>


</body>
</html>