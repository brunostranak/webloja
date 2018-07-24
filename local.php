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


	
<h1> Entrega </h1>
<form method="post" action="vallocal.php">

<label for="cidade"> Cidade:</label>
<br>
<input id="cidade" type="text" name="cidade">
<br>
<br>
<label for="uf"> UF:</label>
<select name="uf">
	<option value="AC">AC</option>
	<option value="AL">AL</option>
	<option value="AP">AP</option>
	<option value="AM">AM</option>
	<option value="BA">BA</option>
	<option value="CE">CE</option>
	<option value="DF">DE</option>
	<option value="ES">ES</option>
	<option value="GO">GO</option>
	<option value="MA">MA</option>
	<option value="MT">MT</option>
	<option value="MS">MS</option>
	<option value="MG">MG</option>
	<option value="PA">PA</option>
	<option value="PB">PB</option>
	<option value="PR">PR</option>
	<option value="PE">PE</option>
	<option value="PI">PI</option>
	<option value="RJ">RJ</option>
	<option value="RJ">RJ</option>
	<option value="RS">RS</option>
	<option value="RO">RO</option>
	<option value="RR">RR</option>
	<option value="SC">SC</option>
	<option value="SP">SP</option>
	<option value="SE">SE</option>
	<option value="TO">TO</option>
</select>
<br>
<br>

<label for="cep"> CEP:</label>
<br>
<input id="cep" type="text" name="cep" maxlength="8">

<br>
<br>

<label for="rua"> Rua:</label>
<br>
<input id="rua" type="text" name="rua">

<br>
<br>

<label for="bai"> Bairro:</label>
<br>
<input id="bai" type="text" name="bai">

<br>
<br>

<label for="ncasa"> Nº Residencial:</label>
<br>
<input id="ncasa" type="text" name="ncasa">

<br>
<br>


<input type="submit" value="CONTINUAR">
<br>
<br>
</form>





</body>
</html>