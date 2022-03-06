<?php
session_start();
include_once './conexao.php';
$id    = $_SESSION ['id'];
$nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$senha =$_POST ['senha'];

$queryUpdate = $link->query("update tb_usuario set nome='$nome', senha='$senha' where id='$id' ");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
    header("Location:../consulta.php");
endif;