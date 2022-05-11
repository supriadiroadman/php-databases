<?php 
$host = 'localhost';
$port = 3306;
$database = 'belajar_php_database';
$username ='root';
$password = '';

$dsn = "mysql:host=$host:$port;dbname=$database";

try {
    $connection = new PDO($dsn,$username,$password);
    echo "Sukses terkoneksi ke database MySql".PHP_EOL;

    $connection = null;
}catch (PDOException $exception) {
    echo "Gagal terkoneksi ke database MySql".$exception->getMessage().PHP_EOL;
}
