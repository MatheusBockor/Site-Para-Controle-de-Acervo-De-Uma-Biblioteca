<html>
    <head>
        <title>Controle de Livros Pessoal</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body bgcolor="#8B7355">
<div id="cadastro">
    <form method="POST" action="livro_post.php" enctype="multipart/form-data">
    <h3 class="h3"> Cadastro De Novos Livros </h3>
        Titulo do Livro: <input class="campo" type="text" name="titulo"><br>
        Genero: <input class="campo" type="text" name="genero"><br>
        Autor: <input class="campo" type="text" name="autor"><br>
        Numero de Paginas: <input class="campo" type="text" name="paginas"><br>
        Leitura Concluida: <input class="campo" type="checkbox" name="concluida" value="1"><br>
        Capa: <input class="campo" type="file" name="capa"><br><br>
        <input class="myButton" type="submit" value="Cadastrar">
    </form>
</div>
<div id="listar">
<h3 class="h3"> Livros Cadastrados </h3>
    <?php 
    include "listar.php";
    ?>
</div>

<div id="footer">
Copyright @ 2020 | MATHEUS BOCKOR
</div>
    
</body>
</html>
