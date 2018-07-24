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
<h1>SEU CARRINHO </h1>
        <?php
	if(isset($_SESSION["quantidade"])){
	echo "<a href='carrinho.php'>"."CARRINHO"."(".$_SESSION["quantidade"].") </a>";
	echo "<br>";
	

	
	}
	?>
	
<?php


require "cnx.php";

$total=0;


	


for($i=0;$i<count($_SESSION["carrinho"]);$i++){
	
	$id=$_SESSION["carrinho"][$i];
	$comando = "SELECT * FROM tblProduto WHERE idProduto='$id';";
$retorno = mysqli_query(conexao(),$comando);
$retorno2 = mysqli_fetch_assoc($retorno);
echo $retorno2["descricao"];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<img style='height:250px;width:250px' src='imagens/"."$retorno2[imagem]'";
echo "<br>";
echo "<br>";
echo $retorno2["preco"];
$total+= $retorno2["preco"];
echo "<br>";
echo "<br>";

}



echo "<h1>Valor da compra:</h1>";
echo "<br>";
echo "<h1>"."R$ ".$total."</h1>";
echo "<br>";







?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        window.location="pay.php";
    });
});
</script>

<button>PAGAMENTO</button>


</body>
</html>