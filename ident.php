<?php

	include("cabecalho.php");
	include("menu.php");
	if(isset($_SESSION["quantidade"])){
	echo "<a href='carrinho.php'>"."CARRINHO"."(".$_SESSION["quantidade"].") </a>";
	

	
	}
	?>


<!DOCTYPE html>
<html>
<head>
	<title>	</title>
</head>
<body>


	
<h1> Identificação </h1>


<form method="post" action="ident2.php">

<label for="email"> Email:</label>
<br>
<input id="email" type="text" name="email">
<br>
<br>
<label for="senha"> Senha:</label>
<br>
<input id="senha" type="password" name="senha">
<br>
<br>
<input type="submit" value="ENTRAR">
<br>
<br>
</form>
<form method="post" action="cadastro.php">
<p>Caso não possua cadastro</p>

<button type="submit">CADASTRAR</button>
</form>






</body>
</html>												