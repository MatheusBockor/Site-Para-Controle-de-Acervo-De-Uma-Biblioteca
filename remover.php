<?php
include "banco.php";
	$id_excluir = $_POST['id'];
	$sql = "DELETE FROM livros WHERE id = $id_excluir";
	mysql_query($sql);
	echo $sql;
	header('Location:index.php');
?>
