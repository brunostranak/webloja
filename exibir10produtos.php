<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<style type="text/css">
#produtos{
	display:inline-block;
	
}

h1{
	text-align:center;
	
}

</style>

<?php
require "cnx.php";


$comando="SELECT * FROM tblProduto WHERE idProduto<=10;";

$retorno= mysqli_query(conexao(), $comando);



while($retorno3= mysqli_fetch_assoc($retorno)){
$produtos[]=$retorno3;
}

if(!empty($produtos)){

echo "<div id='produtos'";
foreach ($produtos as $linha):

echo "<br>";
echo "<a href='detalhes.php?id=$linha[idProduto]'>";
echo $linha["descricao"];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<img style='height:250px; width:250px' src='imagens/"."$linha[imagem]'";
echo "</a>";
echo"<br>";
echo"<br>";

echo $linha["preco"];
echo "<br>";
echo "<br>";
echo "<br>";

endforeach;
echo "</div>";
}

?>

</body>
</html>