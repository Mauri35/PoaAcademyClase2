<?php
    $server = "damap-testing.cerutye1nujs.us-east-1.rds.amazonaws.com";
    $username = "admin";
    $password = "XYXHj51Li9aeOYRbmFKB";
    $database = "prueba";



    try{
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e){
        die('La conexion fallo Error: '.$e->getMessage());
    } 

?>