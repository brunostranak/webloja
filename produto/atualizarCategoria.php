<?php

require "../cnx.php";

$categoria= $_POST["categoria"];
$id = $_POST["id"];

$comando = "UPDATE tblCategoria
SET nomeCategoria = '$categoria'
WHERE idCategoria='$id';";

$retorno = mysqli_query(conexao(), $comando);

if($retorno) {
	header("refresh:2; url=listarCategoria.php");
	echo "Foi ALTERADO com sucesso!";
} else {
	echo "Errou!";
}

?>