<?php

$cidade= strip_tags($_POST["cidade"]);
$uf= strip_tags($_POST["uf"]);
$cep= strip_tags($_POST["cep"]);
$rua= strip_tags($_POST["rua"]);
$bairro= strip_tags($_POST["bai"]);
$ncasa= strip_tags($_POST["ncasa"]);
$cont=0;
//VALIDAÇÃO CIDADE


if (trim(strlen($cidade)<3) || $cidade = is_numeric($cidade)){
	
	$errors[] = "INFORME UMA CIDADE VÁLIDA";
$cont++;
	
}

//VALIDAÇÃO CEP

if (trim(strlen($cep)!=8) || $cep != is_numeric($cep)){
	
	$errors[] = "INFORME UM CEP VÁLIDO";
$cont++;
	
}

//VALIDAÇÃO RUA

if (trim(strlen($rua)==0) || $rua = is_numeric($rua)){
	
	$errors[] = "INFORME UMA RUA VÁLIDA";
$cont++;
	
}

//VALIDAÇÃO BAIRRO

if (trim(strlen($bairro)==0) || $bairro = is_numeric($bairro)){
	
	$errors[] = "INFORME UM BAIRRO VÁLIDO";
$cont++;
	
}


//VALIDAÇÃO DA N DA CASA

if (trim(strlen($ncasa)==0) || $ncasa != is_numeric($ncasa)){
	
	$errors[] = "INFORME UM NÚMERO RESIDENCIAL VÁLIDO";
$cont++;
	
}




//EXIBIR ERROS ou CONTINUAR

if ($cont==0){
	header("location:sucesso.php");
}else{
	echo "<h1>Informações corrompidas</h1>";
for ($i=0;$i<$cont;$i++){
	echo $errors[$i];
	echo "<br>";
	echo "<br>";
}
}



?>