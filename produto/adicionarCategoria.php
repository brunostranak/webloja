<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="adicionarCategoria.php" method="POST">

Categoria:<input type="text" name="categoria">
<button type="submit">ADD!</button>

<?php
require "../cnx.php";

if(!empty($_POST["categoria"])){
$categoria=$_POST["categoria"];


$comando="INSERT INTO tblCategoria(nomeCategoria) VALUES('$categoria');";

$retorno=mysqli_query(conexao(), $comando);
}



?>
	
</form>

<a href="listarCategoria.php">Voltar
</body>
</html>