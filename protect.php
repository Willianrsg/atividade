<?php

if (!isset($_SESSION)){
    session_start();
}
if (!isset($_SESSION['id'])){
    die("Você não pode acessar a esta página porque não está loagado.<p><a href=\"index.php\">Entrar</a></p>");
}

