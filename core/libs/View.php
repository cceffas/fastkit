<?php


namespace Fastkit\libs;
use nvan\CliPlus\Colors;
use nvan\CliPlus\Formats;
use nvan\CliPlus\Console as cli;

class View
{


    private $views_path = __DIR__ . "/../views/";
    private $extension_file = ".twig";


    public function render($file, $data = [])
    {

        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../views/');
        $twig = new \Twig\Environment($loader, [

            'debug' => true,
        ]);

        $absolute_path = $this->views_path . $file . $this->extension_file;

        if (file_exists($absolute_path)) {

            echo $twig->render($file . $this->extension_file, $data);

        } else {



            cli::setForegroundColor(Colors::Red);
            cli::writeLine('not found file: ' . $absolute_path);
            cli::resetForegroundColor();
        }

        exit;







    }
}