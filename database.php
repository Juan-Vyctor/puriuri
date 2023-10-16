<?php

$mysqli = new mysqli('localhost', 'root', '', 'db_iuri');
// nesse terceiro espaço, coloquem a senha do MySQL de vocês
// no quarto espaço, coloquem o nome da database

if ($mysqli->connect_error) {
    die("Connection failed: ". $myqsli->connect_error);
}

?>