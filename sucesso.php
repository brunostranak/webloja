<?php
	include("cabecalho.php");
	include("menu.php");

	

	
	
	?>

<!DOCTYPE html>



<html>


<head>



</head>

<body>





<h1>SUCESSO! SEU PEDIDO SERÁ ENCAMINHADO</h1>



<?php

require "cnx.php";



$id=$_SESSION["iduser"];

$comando="SELECT email FROM tblCliente WHERE idCliente='$id';";

$retorno= mysqli_query(conexao(),$comando);

$retorno2=mysqli_fetch_assoc($retorno);

$email= $retorno2["email"];




$envio = mail($email, "Pedido Efetuado", "Você acabou de realizar uma compra na nossa loja. Volte sempre!", "patrono@mail.com");
 
if($envio){
 echo "<h2 Enviamos um e-mail para ". $email."</h2>";
}else{
 echo "A mensagem não pode ser enviada";
 }











?>







</body>




</html>