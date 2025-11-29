<?php


use Fastkit\database\Columns;
use Fastkit\database\Database;
use Fastkit\database\Forge;
use Fastkit\libs\Http;


$routes = new Http();

// Forge::table("profile", function (Columns $row) {

//     return [

//         $row->varChar('nome', 5)->notNull(),
//         $row->varChar('email', 8)->notNull(),
//         $row->varChar('senha', 60)->notNull()

//     ];

// });




$routes->get('/', function () {


    $cards = [

        [
            "title" => "FAST",
            "descriction" => "this framework is fast use for yours projects",
            'code' => file_get_contents(__DIR__ . "/../../core/doc/code.txt")
        ],
        [
            "title" => "Elegant",
            "descriction" => "the code systanx, very elegant "
        ],
        [
            "title" => "example",
            "descriction" => "this framework is fast use for yours projects"
        ]


    ];

    $data = ["SPEED", "BASIC", "ORDER", "DEPLOY"];

    return renderView('welcome', ['cards' => $cards]);

});


$routes->get('/sobre', function () {

    $db = Database::getConnection();

    $result = $db->query("SELECT * from bairro");



    // return dump();

});

$routes->get('/contatos', function () {

    return "contatos";

});




return $routes->start_routes();