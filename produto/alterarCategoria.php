<?php

require "../cnx.php";

$id = $_GET["id"];

$comando = "SELECT * FROM tblCategoria WHERE idCategoria = $id";
$retorno = mysqli_query(conexao(), $comando);

$registro = mysqli_fetch_assoc($retorno);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="atualizarCategoria.php" method="POST">

	<input type="hidden" name="id" 
		value="<?php echo $registro["idCategoria"]; ?>">

	Categoria: <input type="text" name="categoria" 
		value="<?php echo $registro["nomeCategoria"]; ?>">
	
	<button type="submit">vai!</button>
</form>


</body>
</html>