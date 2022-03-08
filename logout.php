<?php

if (!isset($_SESSION)){
    session_start();
}
session_destroy();
session_destroy();


header("Location:.../index.php");