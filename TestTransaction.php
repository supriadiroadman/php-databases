<?php
require_once __DIR__.'/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email,comment) VALUES ('coba@test.com', 'Hai')");
$connection->exec("INSERT INTO comments(email,comment) VALUES ('coba@test.com', 'Hai')");
// Dibawah ini akan gagal karna kolom emailsss tidak ada, maka 2 query diatas juga gagal (di rollback)
$connection->exec("INSERT INTO comments(emailsss,comment) VALUES ('coba@test.com', 'Hai')");

$connection->commit();

$connection = null;
