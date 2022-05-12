<?php
require_once __DIR__.'/GetConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);

//$customers = $statement->fetchAll();
$customers = $statement->fetchAll(PDO::FETCH_ASSOC); // Mengambil Hanya assosiatif array
var_dump($customers);

$connection = null;
