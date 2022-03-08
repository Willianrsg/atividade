<?php
session_start();
include ('./db/conexao.php');
$id            = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_SPECIAL_CHARS);
$nome          = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao     = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
$codigo_barra  = filter_input(INPUT_POST, 'codigo_barra', FILTER_SANITIZE_NUMBER_INT);
$fabricante    = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_SPECIAL_CHARS);
$validade      = filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("update tb_produto set nome='$nome', descricao='$descricao', codigo_barra='$codigo_barra', fabricante='$fabricante', validade='$validade' where id='$id' ");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("Location:../consulta.php");
endif;