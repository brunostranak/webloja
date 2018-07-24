<?php

require "../cnx.php";



$comando = "DELETE FROM tblProduto;";
$comando2 = "ALTER TABLE tblProduto AUTO_INCREMENT =1;";
mysqli_query(conexao(), $comando);
mysqli_query(conexao(), $comando2);
header("location:listarProduto.php");


?>