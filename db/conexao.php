<?php
$utf8 = header("Content-Type: text/html; charse=urf8");
$link = new mysqli('localhost', 'root', '', 'db_ar');
$link->set_charset('utf8');

