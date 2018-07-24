<?php
	include("cabecalho.php");
	include("menu.php");
        
       ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	
	<?php
	if(isset($_SESSION["quantidade"])){
	echo "<a href='carrinho.php'>"."CARRINHO"."(".$_SESSION["quantidade"].") </a>";
	

	
	}
	?>
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
<h1> Animes </h1>

<?php
require "cnx.php";

$comando="SELECT * FROM tblProduto WHERE idCategoria=3;";

$retorno= mysqli_query(conexao(), $comando);



while($retorno2= mysqli_fetch_assoc($retorno)){
$produtos[]=$retorno2;
}



echo "<div id='produtos'";
foreach ($produtos as $linha):

echo "<br>";
echo "<a href='detalhes.php?id=$linha[idProduto]'>";
echo $linha["descricao"];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<img style='height:250px;width:250px' src='imagens/"."$linha[imagem]'";
echo "</a>";
echo"<br>";
echo"<br>";

echo $linha["preco"];
echo "<br>";
echo "<br>";
echo "<a href='addcarrinhoanimes.php?id=$linha[idProduto]'>JOGAR NO CARRINHO!</a>";

endforeach;
echo "</div>";

?>


</body>


</html>