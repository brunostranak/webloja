<?php

include("cabecalho.php");
if(isset($_SESSION["quantidade"])){
	echo "<a href='carrinho.php'>"."CARRINHO"."(".$_SESSION["quantidade"].") </a>";
}
?>


<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	  
	<title>	</title>
</head>
<body>


<form action="busca.php" method="post">


  <input list="pesquisa" name="busca" size="50" placeholder ="O que procura?">
 
  <input type="submit" value="BUSCAR">
</form>

<?php

include("menu.php");
include("exibir10produtos.php");

?>








</body>
</html>		