<?php
session_start();
include_once '../conexao.php';

$nome          = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$descricao     = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
$codigo_barra  = filter_input(INPUT_POST, 'codigo_barra', FILTER_SANITIZE_NUMBER_INT);
$fabricante    = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_SPECIAL_CHARS);
$validade      = filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_SPECIAL_CHARS);

/*$validade = DateTime::createFromFormat('d/m/Y'(filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_STRING)));*/

$querySelect = $link->query("select nome from tb_produto");
$array_nome = [];

$queryInsert = $link->query("insert into tb_produto values (default, '$nome', '$descricao', '$codigo_barra', '$fabricante', '$validade')");
$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    $_SESSION['msg'] = "<p class='center green-text'/>".'Cadastro Efetuado com Sucesso!'."<br>";
    header("Location:../db/create-produto");
    /*echo "<script>document.location='consulta.php?removido=true'</script>";*/

/*header("Location:../db/porduto/consultas.php");*/
endif;    

