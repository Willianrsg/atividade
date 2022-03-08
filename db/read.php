<?php
include_once 'conexao.php';

$querySelect = $link->query("select * from tb_usuario");
while ($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $senha = $registros['senha'];
    
    echo "<tr>";
    echo "<td>$nome</td><td>$senha</td>";
    echo "<td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></a></td>";
    echo "<td><a href='delete.php?id=$id'><i class='material-icons'>delete</i></a></td>";
    echo "</tr>";
    
    
    
    
    
endwhile;

