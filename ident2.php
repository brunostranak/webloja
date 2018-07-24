<?php
session_start();

require("cnx.php");
$email=$_POST["email"];
$senha=$_POST["senha"];



if($email=="admin" && $senha="admin"){
	$_SESSION["admin"]="ligada";
	header("location:admin.php");
	
}else{

$sql="SELECT * FROM tblCliente WHERE email = '$email' and senha = '$senha';";
$retorno = mysqli_query(conexao(),$sql);
if(!$retorno){
	echo mysqli_error(conexao());
}

$registro = mysqli_fetch_assoc($retorno);//retorna os registros



if($registro != null) {
	

	$_SESSION["user"]= $registro["nmPessoa"];
	$_SESSION["iduser"]= $registro["idCliente"];
	echo"<script> alert('Logado com sucesso!'); window.location.href='inicio.php'</script>";
	
        
	
	

}else {
echo"<script> alert('Email ou senha incorretos!'); window.location.href='ident.php'</script>";

	
}
}






?>