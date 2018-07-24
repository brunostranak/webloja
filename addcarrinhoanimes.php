<?php
session_Start();
?>

<!DOCTYPE html>



<html>


<head>



</head>

<body>





<?php


if(isset($_SESSION["user"])){
if(isset($_SESSION["carrinho"])){
	array_push($_SESSION["carrinho"],$_GET["id"]);
	$_SESSION["quantidade"]= count($_SESSION["carrinho"]);
}else{

$_SESSION["carrinho"]= [];


}


echo "<script>window.location='animes.php'</script>";
}else{
	echo"<script>";
echo "alert('Para fazer compras é preciso estar logado!') 
window.location='filmes.php'
";	
	
	
	
echo "</script>";

}



?>





</body>




</html>