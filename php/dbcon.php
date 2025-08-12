<?php
$server = "mysql:host=localhost:3307;dbname=decor";
$user = "root";
$pass = "" ;

$pdo = new PDO($server,$user,$pass);
if($pdo){
    // echo "<script>alert('connected')</script>";
}
?>