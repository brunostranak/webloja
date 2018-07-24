<?php

require "../cnx.php";

$id = $_GET["id"];

$comando = "SELECT * FROM tblProduto WHERE id = $id";
$retorno = mysqli_query(conexao(), $comando);

$registro = mysqli_fetch_assoc($retorno);

echo "id: " . $registro["id"];
echo " descricao: " . $registro["descricao"];
echo " preco: " . $registro["preco"];
echo "<br>";

?>