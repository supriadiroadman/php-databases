<?php

function getConnection():PDO {
    $host = 'localhost';
    $port = 3306;
    $database = 'belajar_php_database';
    $username ='root';
    $password = '';

    $dsn = "mysql:host=$host:$port;dbname=$database";

    return new PDO($dsn,$username,$password);
}