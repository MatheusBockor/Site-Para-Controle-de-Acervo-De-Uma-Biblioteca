<link rel="stylesheet" type="text/css" href="style.css">
<table id="table" border=1px solid black; >
            <th>Capa</th>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Autor</th>
            <th>Numero de Paginas</th>
            <th>Leitura Concluida</th>
            <th>Excluir</th>
            <th>Editar</th>
            
<?php
    include "banco.php";

    $sql = mysql_query("Select * FROM livros");

    while($sql_result = mysql_fetch_assoc($sql)){
        echo "<tr>";
        echo "<td>"; echo "<img src='capas/".$sql_result['capa']."' width=150 height=150></td>";
        echo "<td>"  .$sql_result['titulo'] . "</td>";
        echo "<td>" .$sql_result['genero'] . "</td>"; 
        echo "<td>" .$sql_result['autor'] . "</td>";
        echo "<td>" .$sql_result['paginas'] . "</td>";
        if ($sql_result['concluida'] == 1){
            echo "<td>" ."Concluida" . "</td>";
        }else{
            echo "<td>" ."Nao Concluida" . "</td>";
        } 
    
        //Remover Livro
        echo "<form method='post' action='remover.php'>";
        echo "<td>";
        echo "<input type ='hidden' name='id' value=$sql_result[id]>"; 
        echo "<input class='myButton' type='submit' value='Excluir'>";
        echo "</form>";
       

        //Editar Livro
        echo "<form method='post' action='editar.php'>";
        echo "<td>";
        echo "<input type ='hidden' name='id' value=$sql_result[id]>"; 
        echo "<input class='myButton' type='submit' value='Editar'>";
        echo "</form>";
       echo "</tr>";
   }
       echo "</form>";



?>