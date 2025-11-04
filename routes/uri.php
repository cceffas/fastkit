<?php

use Fastkit\libs\Http as Route;
use Fastkit\libs\View;




Route::get('/', function () {

    $view = new View();

    $nome="pedro moises julieta";

    dump($view);
    $view->render("home",['nome'=>$nome,'title'=>'home']);

});


Route::get('/login', function () {


    dump("login");

});