<?php

function conexion () {
    $server = "localhost";
    $user = "root";
    $pass = "0211c";
    $db = "blog";

    try{
        $c = new PDO("mysql:host={$server};dbname={$db}", $user, $pass);
        $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $c;
    }catch(PDOExcpetion $e){
        exit($e->getMessage());
    }
    
}