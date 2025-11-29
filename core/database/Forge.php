<?php


namespace Fastkit\database;

use Fastkit\database\Columns;

class Forge
{




    public static function table(string $name, callable $function)
    {



        $rows = $function($columns = new Columns());
        $data="";

        foreach ($rows as $row) {

           $data= $row->getQueryBuild().",";

        }

        dd($data);
        $rows = implode(",", $rows);

        // $sql_query = "CREATE TABLE {$name} ($rows);";


        // dump($sql_query);
        // Database::getConnection()->query($sql_query);



    }








}