<?php



session_start();

if(isset($_SESSION["admin"])){
require "../cnx.php";

$comando = "SELECT * FROM tblProduto";
$retorno = mysqli_query(conexao(), $comando);
$produtos = array();
while($registro = mysqli_fetch_assoc($retorno)) {
	$produtos[] = $registro;
}




?>

<a href="../deslogar.php">Sair modo ADM</a>
<table border="1">
	<tr>
		<td>ID</td>
		<td>DESCRICAO</td>
		<td>PRECO</td>
		<td>CATEGORIA</td>
		<td>IMAGEM</td>
		<TD>SOBRE</TD>
		<TD>DELETAR</TD>
		<TD>ALTERAR</TD>
	</tr>

	<?php foreach ($produtos as $produto) : ?>
	<tr>
		<td><?=$produto["idProduto"]?> </td>
		<td><?=$produto["descricao"]?></td>
		<td><?=$produto["preco"]?> </td>
		<td><?php 
		
		$comando = "SELECT nomeCategoria FROM tblCategoria WHERE idCategoria='$produto[idCategoria]'";
		$retorno=mysqli_query(conexao(), $comando);
		$retorno2=mysqli_fetch_assoc($retorno);
		echo $retorno2["nomeCategoria"];
		
		
		?>
		</td>
		<td>
		<?php
		echo $produto["imagem"];
		?>
		
		</td>
		<td>
			<?=$produto["sobre"]?>
		</td>
		<td>
			<a href="deletarProduto.php?id=<?=$produto["idProduto"]?>">del</a>
		</td>
		<td>
			<a href="alterarProduto.php?id=<?=$produto["idProduto"]?>">edit</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>

<a href="formularioProduto.php">Adicionar novo produto</a>
<br>
<a href="zerarid2.php">ZERAR ID</a>


<?php }else{
echo "<h1>ÁREA RESTRITA</h1>";

header("refresh:2;../inicio.php");
}	?>

