<?php session_Start();
?>

<?php
require("cnx.php");
$id= $_SESSION["iduser"];
echo $id;
$comando= "DELETE from tblCliente WHERE idCliente='$id';";
$retorno= mysqli_query(conexao(),$comando);

if($retorno){

echo"<script>alert('Seu cadastro foi excluído com sucesso')
window.location.href='deslogar.php'</script>";


}


?>

