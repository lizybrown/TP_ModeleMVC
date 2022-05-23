<?php

abstract class Model
{

    private static $pdo;

    private static function setBdd(){
            self::$pdo = new
            PDO("mysql:host=localhost;dbname=tplivres;charset=utf8","root","");
        
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

    protected function getBdd(){
        if(empty(self::$pdo)){
            self::setBdd();
        } return self::$pdo;
}
    }


