<?php

	include("cabecalho.php");
	include("menu.php");
       ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
        <?php
	if(isset($_SESSION["quantidade"])){
	echo "<a href='carrinho.php'>"."CARRINHO"."(".$_SESSION["quantidade"].") </a>";
	echo"<br>";
	

	
	}
	?>

<?php

$id= $_GET["id"];



require("cnx.php");

$comando= "SELECT * FROM tblProduto WHERE idProduto='$id';";

$retorno= mysqli_query(conexao(),$comando);

$registro= mysqli_fetch_assoc($retorno);


echo "<h1>". $registro["descricao"]."</h1>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<img style='height:250px;width:250px' src='imagens/"."$registro[imagem]'";
echo "</a>";
echo"<br>";
echo"<br>";

echo "<h1>".$registro["preco"]."</h1>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
</body>


<h1>Sobre</h1>
<?php

echo "<p>".$registro["sobre"]."</p>";



?>
</html>