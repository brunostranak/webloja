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





<h1> Pagamento </h1>

<form method="post" action="valpay.php" >
<label for="ncart" > Número do Cartão:</label> 
<br>
<input id="ncart" type="text" name="ncart" maxlength="16">
<br>
<br>
<label for="cdseg" > Código de Segurança:</label><br>
<input id="cdseg" type="text" name="cdseg" maxlength="3">
<br>
<br>

Validade:
<br>
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
	$anoatual= date("Y");
	$parametro=$anoatual+10;
	for($i=$anoatual;$i<=$parametro;$i++){
		echo "<option>$i</option>";
		
		
		
	}
	
	
	?>
	

	
	
</select>

<br>
<br>

<label for="parce"> Pagar em:</label><br>
<select name="parce">
	<option>Selecione as Parcelas</option>
	<option>1x sem juros</option>
	<option>2x sem juros</option>
	<option>3x sem juros</option>
	<option>4x sem juros</option>
	<option>5x sem juros</option>
	
	
</select>

<br>
<br>

<label for="nome"> Nome como exibido no cartão:</label><br>
<input id="nome" type="text" name="nome">

<br>
<br>
<button type="submit">CONTINUAR</button>



</form>






</body>
</html>