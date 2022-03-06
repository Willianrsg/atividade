<?php
session_start();
include_once 'conexao.php';

$nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$senha = $_POST['senha'];

$querySelect = $link->query("select nome from tb_usuario");
$array_nome = [];

$queryInsert = $link->query("insert into tb_usuario values(default, '$nome', '$senha')");
$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    $_SESSION['msg'] = "<p class='center green-text'/>".'Cadastro Efetuado com Sucesso!'."<br>";
    header("Location:../");
endif;    










