<?php

use Fastkit\libs\Http;

require_once './vendor/autoload.php';



Http::get('home', function ($e) {

    var_dump($e);

});


Http::post('about', function ($request) {

    var_dump($request);

});


?>

<hr>
<form method="get">

    <?=Http::action('home')?>

    <input type="text" name="nome">
    <input type="submit" value="enviar">

</form>
<!--  -->
<hr>
<form method="post">

    <?=Http::action('about')?>

    <input type="text" name="nome">
    <input type="submit" value="enviar">

</form>