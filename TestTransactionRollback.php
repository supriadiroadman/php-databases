<?php
require_once __DIR__.'/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email,comment) VALUES ('tes@test.com', 'Hai')");
$connection->exec("INSERT INTO comments(email,comment) VALUES ('tes@test.com', 'Hai')");
$connection->exec("INSERT INTO comments(email,comment) VALUES ('tes@test.com', 'Hai')");

$connection->rollBack();

$connection = null;
