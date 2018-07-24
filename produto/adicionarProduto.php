<?php

require "../cnx.php";


$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria= $_POST["categoria"]; 
$imagem= $_FILES["imagem"];
$sobre=$_POST["sobre"];



// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
 
        	
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "../imagens/" . $imagem["name"];
			
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
			
$comando = "INSERT INTO tblProduto (descricao,preco,imagem,idCategoria,sobre)
	values ('$descricao','$preco','$imagem[name]','$categoria','$sobre')";
	
	$cnx = conexao();

$retorno = mysqli_query($cnx, $comando);

if($retorno) {
	header("refresh:2; url=listarProduto.php");
	echo "Foi inserido com sucesso!";
} else {
	echo "Erro:". mysqli_error($cnx);

	
}


?>