<?php


$srvRoot = "localhost";
$loginRoot = "root";
$passRoot= "";
$dbNameRoot = "dbpetinder";


$conn = mysqli_connect($srvRoot, $loginRoot, $passRoot, $dbNameRoot) or die ("Não foi possível conectar");
mysqli_set_charset($conn, "utf8");
?>