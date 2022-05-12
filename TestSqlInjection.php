<?php
require_once __DIR__.'/GetConnection.php';
$connection = getConnection();

$username = "admin'; #"; // hanya akan memeriksa username, password akan di skip karna tanda ';#
$password = 'tidak akan diperiksa'; // Akan sukses walaupun password salah

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$statement = $connection->query($sql);

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
