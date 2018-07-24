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
	
<h1> Cadastro </h1>


<form method="post" action="valcad.php">

<label for="nome"> Nome:</label>
<br>
<input id="nome" type="text" name="nome">
<br>
<br>


<label for="email"> Email:</label>
<br>
<input id="email" type="text" name="email">
<br>
<br>


<label for="senha"> Senha:</label>
<br>
<input id="senha" type="password" name="senha" >
<br>
<br>

<label for="confsenha"> Confirme sua senha:</label>
<br>
<input id="confsenha" type="password" name="confsenha">
<br>
<br>

Data de nascimento:
<br>
<select name="dia">
<option>DIA</option>
<?php

for ($i=1;$i<=31;$i++){
	echo"<option>$i</option>";
}

?>

</select>

<select name="mes">
	<option value="0">MÊS</option>
	<option value="1">Janeiro</option>
	<option value="2">Fevereiro</option>
	<option value="3">Março</option>
	<option value="4">Abril</option>
	<option value="5">Maio</option>
	<option value="6">Junho</option>
	<option value="7">Julho</option>
	<option value="8">Agosto</option>
	<option value="9">Setembro</option>
	<option value="10">Outubro</option>
	<option value="11">Novembro</option>
	<option value="12">Dezembro</option>


</select>

<select name="ano">
<option>ANO</option>
<?php
$parametro= date("Y") - 18;
for ($i=1902;$i<=$parametro;$i++){
	echo"<option>$i</option>";
}

?>

</select>

<br>
<br>


<input type="submit" value="CONTINUAR">
<br>
<br>
</form>



</body>
</html>												