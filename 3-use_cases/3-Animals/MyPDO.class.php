<?php

    class MyPDO {

        private const HOST_NAME = "localhost";
        private const DB_NAME = "animalsdb";
        private const USER_NAME = "root";
        private const PWD = "";
        
        private static $myPDOInstance = null;

        public static function getPDO(){
            if(is_null(self::$myPDOInstance)){
                try{
                    $options = array(
                        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    );

                    $connection = "mysql:host=".self::HOST_NAME.";dbname=".self::DB_NAME;
                    self::$myPDOInstance = new PDO($connection, self::USER_NAME, self::PWD,$options);
                }
                catch(PDOException $e){
                    $message = "Connection failed to database ".$e->getMessage();
                    die($message);
                }
            }
            return self::$myPDOInstance;
        }
    }