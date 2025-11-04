<?php

namespace Fastkit\libs;

use nvan\CliPlus\Console as cli;
use nvan\CliPlus\Colors;
use nvan\CliPlus\Formats;


enum Commands:string
{

    case SERVE="serve";
    case BD="bd";
    case BUILD="build";


}
class App
{


    private $title;
    private $lang;

    private $current_argv;



    public function __construct($argv = [])
    {
        $this->current_argv = $argv;

    }

    public function start()
    {


        $command = $this->current_argv;
        $host='localhost';
        $port=8000;
        $public_path='public';

        if ($command === Commands::SERVE->value) {


            shell_exec("php -S {$host}:{$port} -t {$public_path}");
            cli::setForegroundColor(Colors::Green);

        }
        else{


            cli::setBackgroundColor(Colors::Red);
            cli::setForegroundColor(Colors::White);
            cli::writeLine("unknow command!");
            cli::resetBackgroundColor();
            cli::resetForegroundColor();
        }


    }












}