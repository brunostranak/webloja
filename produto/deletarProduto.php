<?php
require "../cnx.php";
$cnx=conexao();
$id = $_GET["id"];

$comando = "DELETE FROM tblProduto WHERE idProduto = $id";

$retorno = mysqli_query($cnx, $comando); 

if($retorno) {
	header("refresh:1; url=listarProduto.php");
	echo "Foi excluido com sucesso!";
} else {
	echo "Errou!";
	echo mysqli_error($cnx);
}
?>