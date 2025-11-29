<?php


function renderView(string $view, array $data=[])
{
    $extension_view_file = ".twig";
    $absolute_views_path = __DIR__ . "/../../web/views";


    $loader = new \Twig\Loader\FilesystemLoader($absolute_views_path);
    $twig = new \Twig\Environment($loader, [

        'debug' => true,
    ]);

    $stream = $view . $extension_view_file;

    if (file_exists($absolute_views_path . "/" . $stream)) {

        return $twig->render($stream, $data);

    } else {

        return dump($absolute_views_path . " o ficheiro nao existe");
    }

}