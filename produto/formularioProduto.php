 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="adicionarProduto.php" method="POST" enctype="multipart/form-data">
	Descricao: <input type="text" name="descricao">
	Preco: <input type="text" name="preco">
	Categoria: <select name="categoria">
		<?php
		
		require "../cnx.php";
		
		$comando="SELECT * FROM tblCategoria";
		$retorno = mysqli_query(conexao(), $comando);
		$categorias = array();
		while($registro = mysqli_fetch_assoc($retorno)) {
	$categorias[] = $registro;
	
}

foreach ($categorias as $categoria) :
echo "<option value=$categoria[idCategoria]>".$categoria["nomeCategoria"]."</option>";
endforeach;
		?>
		
		</select>
Imagem: <input type="file" name="imagem">

Sobre: <textarea input type="text" name="sobre"> </textarea>
	<br>
	<button type="submit">vai!</button>
</form>
</body>
</html>