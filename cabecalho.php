<?php

session_start();

?>

<!DOCTYPE html>



<html>


<head>



</head>

<body>
<img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png">
<?php



if(isset($_SESSION["user"])){
echo "Olá, ".$_SESSION["user"];
echo "<a href='deslogar.php'> Sair";
echo "<br>";
echo "<a href='config.php'>Configurar Cadastro";

}else{
	echo "<a href='ident.php'>Logue-se</a>";
	
}

?>



<br>




</body>




</html>