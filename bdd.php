<?php
    $engine = "mysql";
    $host = "localhost";
    $port = 3306;
    $dbname = "pfa_pwa";  
    $username = "root";
    $password = "root";
    $pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password, [
    ]);
    // if($pdo){
    //     echo"good";
    // }
    // else{
    //     echo"pas good";
    // }
?>