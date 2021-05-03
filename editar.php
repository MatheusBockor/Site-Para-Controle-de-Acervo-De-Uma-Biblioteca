<link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body bgcolor="#8B7355">
<div id="cadastro">
<?php
include "banco.php";
$id_editar = $_POST['id'];

$sql = mysql_query("Select * FROM livros WHERE id = $id_editar");

while($sql_result = mysql_fetch_assoc($sql)){

    $titulo = $sql_result['titulo'];
    $genero = $sql_result['genero'];
    $autor = $sql_result['autor'];
    $paginas = $sql_result['paginas'];
    $concluida = $sql_result['concluida'];
    $capa = $sql_result['capa'];
      echo "<h3 class='h3'> Editar Livro </h3>";
      echo "<form method='POST' action='editar_post.php' enctype='multipart/form-data'>
        <input type='hidden' name='id' value=$id_editar>
       Titulo do Livro: <input class='campo' type='text' name='titulo' value=$titulo><br>
        Genero: <input class='campo' type='text' name='genero'value=$genero><br>
        Autor: <input class='campo' type='text' name='autor'value=$autor><br>
        Numero de Paginas: <input class='campo' type='text' name='paginas'value=$paginas><br>
        Leitura Concluida: <input class='campo' type='checkbox' name='concluida' value='1'><br>
        Capa: <input class='campo' type='file' name='capa'><br><br>
        <input class='myButton' type='submit' value='Editar'>
        </form>";
}
	
?>
</div>