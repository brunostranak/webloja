<?php

require "../cnx.php";

$id = $_POST["id"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria= $_POST["categoria"]; 
$sobre= $_POST["sobre"];

$imagem= $_FILES["imagem"];


$sobre=$_POST["sobre"];

// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
 
        	
 
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "../imagens/" . $imagem["name"];
			
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
			

$comando = "UPDATE tblProduto
SET descricao = '$descricao', preco = '$preco', imagem = '$imagem[name]', idCategoria = '$categoria', sobre='$sobre'
WHERE idProduto='$id';";



$retorno = mysqli_query(conexao(), $comando);

if($retorno) {
	header("refresh:2; url=listarProduto.php");
	echo "Foi ALTERADO com sucesso!";
} else {
	echo "Errou!";
	

}

?>