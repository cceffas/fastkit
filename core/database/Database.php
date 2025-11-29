<?php

namespace Fastkit\database;

use Medoo\Medoo;
use PDO;



class Database
{


    private static $connection = null;

    public static function getConnection()
    {

        if (empty(self::$connection)) {


            self::$connection = new PDO("mysql:host=127.0.0.1:3304;dbname=saneamento_basico_municipal", 'root', '', [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);

        }

        return self::$connection;

    }








}



