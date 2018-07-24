<?php
require "../cnx.php";
$cnx=conexao();
if(empty($_GET["id"])){
	
	$comando = "DELETE FROM tblCategoria;";

mysqli_query($cnx, $comando);
header("location:listarCategoria.php");
}else{

$id = $_GET["id"];

$comando = "DELETE FROM tblCategoria WHERE idCategoria = $id";

$retorno = mysqli_query($cnx, $comando); 

if($retorno) {
	header("refresh:1; url=listarCategoria.php");
	echo "Foi excluido com sucesso!";
} else {
	echo "Errou!";
	echo mysqli_error($cnx);
}
}