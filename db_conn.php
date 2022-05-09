<?php
$sName = "localhost";
$uName = "s99404ue_tododb";
$pass = "Umar454545";
$db_name = "s99404ue_tododb";

try {
    $conn = new PDO("mysql:dbname=$db_name;host=$sName", $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo "connection failed :", $e->getMessage();
}

