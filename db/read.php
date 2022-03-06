<?php
include_once 'conexao.php';

$querySelect = $link->query("select * from tb_usuario");
while ($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $senha = $registros['senha'];
    
    echo "<tr>";
    echo "<td>$nome</td><td>$senha</td><td><a href='editar.php?id=$id'><i class='material-icons'>edit</i></td><td><a href='bd/delete.php?id=id'><i class='material-icons'>delete</i></td>";
    echo "</tr>";
    
    
    
    
    
endwhile;

