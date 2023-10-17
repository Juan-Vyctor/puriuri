<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'db_iuri');
//configurem isso aqui certinho baseado em como o banco de vocês tiver

global $pdo;
try {
    $pdo = new pdo('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erro no PDO: '. $e->getMessage());
}

?>