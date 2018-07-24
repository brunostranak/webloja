<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>




<?php
require("cnx.php");
$busca= $_POST["busca"];

$comando= "SELECT * FROM tblProduto WHERE descricao LIKE '%$busca%'";


$retorno=mysqli_query(conexao(),$comando);





while($registro= mysqli_fetch_assoc($retorno)){


	$produtos[]=$registro;
}

if(empty($produtos)){

	echo "Sem produtos correspondentes!";
	header("refresh:2;inicio.php");
}else{





foreach($produtos as $produto):
echo "<a href='detalhes.php?id=$produto[idProduto]'>";
echo $produto["descricao"];
echo"<br>";
echo "<img style='height:250px;width:250px' src='imagens/"."$produto[imagem]'";
echo "<br>";
echo "<br>";
echo $produto["preco"];
echo "</a>";
echo "<br>";
echo "<br>";

endforeach;
}
?>









</body>
</html>		