<?php

include "banco.php";

$id = $_POST['id'];
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];
$paginas = $_POST['paginas'];
$concluida = $_POST['concluida'];
$foto = $_FILES["capa"];

$error = Array();

	// Se a foto estiver sido selecionada
    if(!empty($foto["name"])){

        // Verifica se o arquivo é uma imagem
        if( !preg_match( '/^image\/(pjpeg|jpeg|png|gif|bmp)$/' , $foto[ 'type' ])){
            $error[1] = "Isso não é uma imagem.";
        }

        // Se não houver nenhum erro
        if(count($error) == 0) {
            //Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];

            // Caminho de onde ficará a imagem
            $caminho_imagem = "capas/" . $nome_imagem;

            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        }}else{
            $sql = mysql_query("Select * FROM livros WHERE id = $id");

    while($sql_result = mysql_fetch_assoc($sql)){
            $nome_imagem = $sql_result['capa'];
        }}

if ($concluida == NULL){
    $concluida = 0;
}


$sql = " UPDATE livros  SET titulo = '$titulo', 
                genero = '$genero', 
                autor = '$autor', 
                paginas = $paginas,
                concluida = $concluida,
                capa = '$nome_imagem'
                
                WHERE id = $id";
						
                        mysql_query($sql);
echo $sql;
header('Location:index.php');

?>