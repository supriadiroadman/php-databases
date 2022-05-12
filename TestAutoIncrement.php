<?php
require_once __DIR__.'/GetConnection.php';

$connection = getConnection();

$sql = "INSERT INTO comments (email,comment) VALUES ('siagian@test.com','Hai lagi')";
//$connection->exec($sql); bisa menggunakan exec atau prepare
$connection->query($sql);

$id = $connection->lastInsertId();

var_dump($id);

$connection = null;
