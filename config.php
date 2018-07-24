<?php

session_Start();


?>

<!DOCTYPE html>



<html>


<head>



</head>

<body>
<?php

	include("cabecalho.php");
	include("menu.php");
	if(isset($_SESSION["quantidade"])){
	echo "<a href='carrinho.php'>"."CARRINHO"."(".$_SESSION["quantidade"].") </a>";
	

	
	}
	?>
	
<h1>Configurações de Cadastro</h1>
<form action="config.php" method="post">
<?php

require("cnx.php");
$id= $_SESSION["iduser"];

$comando= "SELECT * FROM tblCliente WHERE idCliente='$id';";

$retorno=mysqli_query(conexao(),$comando);


$infocliente[]= mysqli_fetch_assoc($retorno);

foreach ($infocliente as $info):
echo "NOME: <input type='text' name='nome' value='$info[nmPessoa]'>";
echo "<br>";
echo "DATA DE NASCIMENTO: <input type='text' name='dtNasc' value='$info[dtNasc]'>";
echo "<br>";
echo "EMAIL: <input type='text' name='email' value='$info[email]'>";
echo "<br>";
echo "SENHA: <input type='text' name='senha' value='$info[senha]'>";


endforeach;
echo"<br>";
echo"<br>";
echo"<br>";
?>



<input type="submit" value="ALTERAR INFORMAÇÕES"> 
<br>		
<a href="excluir.php">EXCLUIR CADASTRO</a>


</form>

<?php

if(!empty($_POST)){
$nome=$_POST["nome"];
$dtNasc=$_POST["dtNasc"];
$email=$_POST["email"];
$senha=$_POST["senha"];

$comando = "UPDATE tblCliente
SET nmPessoa = '$nome', dtNasc = '$dtNasc', email = '$email', senha = '$senha'
WHERE idCliente='$id'";

$retorno = mysqli_query(conexao(), $comando);

if($retorno) {
	
        echo"<script>alert('Cadastro alterado com sucesso, logue novamente')</script>";
        
	echo"<script>window.location.href='deslogar.php'</script>";
	
} else {
	echo "Errou!";
}
}


?>





</body>




</html>