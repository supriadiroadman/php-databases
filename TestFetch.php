<?php

require_once __DIR__.'/GetConnection.php';

$connection = getConnection();

$username = "admin";
$password = "rahasia";

$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$statement = $connection->prepare($sql);
$statement->bindParam("username",$username);
$statement->bindParam("password",$password);
$statement->execute();

if ($row = $statement->fetch()){
    echo "Sukses login: ". $row['username'];
}else{
    echo "Gagal login";
}

$connection = null;
