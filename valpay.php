<?php

$ncart= strip_tags($_POST["ncart"]);
$cdseg= strip_tags($_POST["cdseg"]);
$mes= strip_tags($_POST["mes"]);
$ano= strip_tags($_POST["ano"]);
$parce= strip_tags($_POST["parce"]);
$nome= strip_tags($_POST["nome"]);
$cont=0;
//VALIDAÇÃO NUMERO CARTAO


if (trim(strlen($ncart)!=16) || $ncart != is_numeric($ncart)){
	
	$errors[] = "NÚMERO DO CARTÃO INVÁLIDO";
$cont++;
	
}

//VALIDAÇÃO CODIGO SEGURANÇA

if (trim(strlen($cdseg)!=3) || $cdseg != is_numeric($cdseg)){
	
	$errors[] = "CÓDIGO DE SEGURANÇA INVÁLIDO";
$cont++;
	
}

//VALIDAÇÃO DATA VENCIMENTO

if ($mes==0){
$errors[] = "INFORME O MÊS DE VALIDADE";
$cont++;
}

if ($ano=="ANO"){
$errors[] = "INFORME O ANO DE VALIDADE";
$cont++;
}

//VALIDAÇÃO PARCELAS

if ($parce=="Selecione as Parcelas"){
	$errors[] = "INFORME A QUANTIDADE DE PARCELAS";
$cont++;
}


//VALIDAÇÃO DO NOME



if ((strlen(trim($nome)) == 0) || (strlen(trim($nome)) < 3) ) {
$errors[] = "INFORME UM NOME VÁLIDO";
$cont++;
}


//EXIBIR ERROS ou CONTINUAR

if ($cont==0){
	header("location:local.php");
}else{
	echo "<h1>Informações corrompidas</h1>";
for ($i=0;$i<$cont;$i++){
	echo $errors[$i];
	echo "<br>";
	echo "<br>";
}
}



?>