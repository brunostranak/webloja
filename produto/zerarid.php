<?php

require "../cnx.php";



$comando = "DELETE FROM tblCategoria;";
$comando2 = "ALTER TABLE tblCategoria AUTO_INCREMENT =1;";
mysqli_query(conexao(), $comando);
mysqli_query(conexao(), $comando2);
header("location:listarCategoria.php");


?>