<?php
require "cnx.php";


$cont=0;

$nome=strip_tags($_POST["nome"]);
$email= strip_tags($_POST["email"]);
$senha=strip_tags($_POST["senha"]);
$confsenha=strip_tags($_POST["confsenha"]);
$dia=strip_tags($_POST["dia"]);
$mes=strip_tags($_POST["mes"]);
$ano=strip_tags($_POST["ano"]);





//VALIDAÇÃO NOME



if ((strlen(trim($nome)) == 0) || (strlen(trim($nome)) < 3) ) {
$errors[] = "INSIRA UM NOME COM NO MÍNIMO 3 DÍGITOS";
$cont++;
}









//VALIDAÇÃO EMAIL

if (strlen(trim($_POST["email"])) == 0 || (!((filter_var($email,FILTER_VALIDATE_EMAIL))))) {
	
$errors[] = "INSIRA UM EMAIL VÁLIDO";
$cont++;
}


//VALIDAÇÃO SENHA

if ((strlen(trim($senha) ) <8)){
$errors[] = "INSIRA AO MENOS 8 DÍGITOS NA SENHA";
$cont++;

}

if ((strlen(trim($senha) ) >16)){
$errors[] = "SUA SENHA DEVE SER MENOR DO QUE 16 DÍGITOS";
$cont++;

}

if ((preg_match("/^[a-zA-Z'-0123456789]+$/",$senha))){
	$errors[] = "SUA SENHA DEVE CONTER CARACTERES ESPECIAIS";
$cont++;
	
}

if(preg_match('#^[A-Z]+[a-z]#', $senha)){
	
	$errors[] = "SUA SENHA DEVE CONTER MAIÚSCULAS E MINÚSCULAS";
$cont++;
	
	
}
//VALIDAÇÃO CONF SENHA

if ($confsenha!=$senha) {
$errors[] = "SENHA NÃO CONFIRMADA ";
$cont++;

}

//VALIDAÇÃO DATA NASCIMENTO

if ($dia=="DIA"){
$errors[] = "INSIRA O DIA DE NASCIMENTO ";
$cont++;
}

if ($mes==0){
$errors[] = "INSIRA O MÊS DE NASCIMENTO ";
$cont++;
}

if ($ano=="ANO"){
$errors[] = "INSIRA O ANO DE NASCIMENTO ";
$cont++;
}


//EXIBIR ERROS ou CONTINUAR

if ($cont==0){

$date=$ano."-".$mes."-".$dia;


$sql = "INSERT INTO tblCliente(nmPessoa,dtNasc,email,senha)
VALUES('$nome','$date','$email','$senha');";


$conexao=conexao();
$retorno=mysqli_query($conexao, $sql);




echo"<script> alert('Cadastro efetuado com sucesso, logue-se'); window.location.href='inicio.php' </script>";

	

}else{
	echo "<h1>Informações corrompidas</h1>";
for ($i=0;$i<$cont;$i++){
	echo $errors[$i];
	echo "<br>";
	echo "<br>";
        
	

}


}







?>