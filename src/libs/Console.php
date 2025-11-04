<?php



namespace Fastkit\libs;

use nvan\CliPlus\Colors;
use nvan\CliPlus\Console as CLI;




class Console
{



    public function startServer()
    {

        
        $argv=[];
        array_shift($argv);
        CLI::setForegroundColor(Colors::Blue);
        CLI::writeLine("sem argumento");



    }











}



