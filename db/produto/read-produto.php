<?php
include_once '../conexao.php';;

$querySelect = $link->query("select * from tb_produto");
while ($registros = $querySelect->fetch_assoc()):
    $id            = $registros['id'];
    $nome          = $registros['nome'];
    $descricao     = $registros['descricao'];
    $codigo_barra  = $registros['codigo_barra'];
    $fabricante    = $registros['fabricante'];
    $validade      = $registros['validade'];
    
    echo "<tr>";
    echo "<td>$nome</td><td>$descricao</td><td>$codigo_barra</td><td>$fabricante</td><td>$validade</td>";
    echo "<td><a href='../produto/editar-produto.php?id=$id'><i class='material-icons'>edit</i></a></td>";
    echo "<td><a href='delete-produto.php?id=$id'><i class='material-icons'>delete</i></a></td>";
    echo "</tr>";
    
    
    
    
    
endwhile;

