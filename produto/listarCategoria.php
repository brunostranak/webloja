<?php
session_start();

if(isset($_SESSION["admin"])){
require "../cnx.php";

$comando = "SELECT * FROM tblCategoria";
$retorno = mysqli_query(conexao(), $comando);
$categorias = array();
while($registro = mysqli_fetch_assoc($retorno)) {
	
	$categorias[] = $registro;
}




?>
<a href="../deslogar.php">Sair modo ADM</a>
<table border="1">
	<tr>
		<td>IDCATEGORIA</td>
		<td>NOME CATEGORIA</td>
		
	</tr>

	<?php foreach ($categorias as $categoria) : ?>
	<tr>
		<td><?=$categoria["idCategoria"]?> </td>
		<td><?=$categoria["nomeCategoria"]?></td>
	
	
		<td>
			<a href="deletarCategoria.php?id=<?=$categoria["idCategoria"]?>">del</a>
		</td>
		<td>
			<a href="alterarCategoria.php?id=<?=$categoria["idCategoria"]?>">edit</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<a href="adicionarCategoria.php">Adicionar nova categoria</a>
<br>
<a href="deletarCategoria.php">Deletar tudo</a>
<br>
<a href="zerarid.php">Zerar ID</a>


<?php }else{
	
	echo "<h1>ÁREA RESTRITA</h1>";

header("refresh:2;../inicio.php");
	
}
	?>