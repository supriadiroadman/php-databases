<?php

require_once __DIR__.'/GetConnection.php';

$connection = getConnection();

//$username = "admin';#"; // Sql Injection Sudah dihandle oleh fungsi prepare
$username = "admin";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username,$password]);

$sukses = false;
$find_user = null;

foreach ($statement as $row){
    $sukses = true;
    $find_user = $row['username'];
}

if ($sukses){
    echo "Sukses login: $find_user".PHP_EOL;
}else{
    echo 'Gagal login'.PHP_EOL;
}




$connection = null;
