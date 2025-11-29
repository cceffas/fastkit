<?php

namespace Fastkit\libs;

use nvan\CliPlus\Console as cli;
use nvan\CliPlus\Colors;
use nvan\CliPlus\Formats;
use function Respect\Stringifier\stringify;


enum Commands: string
{

    case SERVER_UP = "serve";
    case SERVER_DOWN = "down";
    case BUILD = "build";


}

/**
 * this a enum for write outputs messages on command line interface
 */
enum OutputMessages: string
{

    case SERVER_UP = "server start!";
    case SERVER_DOWN = "server down!";



}

/**
 * class app for configuration of server
 */
class App
{


    private string $title;
    private string $lang;

    private int $server_starter_delay=2;

    private int $port = 8080;
    private string $host = "localhost";

    private $current_argv;



    public function __construct($argv = [])
    {
        $this->current_argv = $argv;

    }

    public function execute()
    {

        $command = $this->current_argv;


        $public_path = 'public';


        switch ($command) {

            case Commands::SERVER_UP->value:

           
                cli::writeLine("serve started! on http://{$this->host}:{$this->port}");
              
                sleep($this->server_starter_delay);

                shell_exec("php -S {$this->host}:{$this->port} -t public");
                break;

            case Commands::BUILD->value:

                cli::writeLine('app build');
                break;

            default:

                cli::writeLine($command, ' command unkwon!');
                cli::writeLine('others commands');

                foreach (Commands::cases() as $command) {

                    cli::setForegroundColor(Colors::Green);
                    cli::writeLine($command->value);
                    cli::resetForegroundColor();

                }

                break;
        }


    }












}