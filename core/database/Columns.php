<?php

namespace Fastkit\database;




class Columns
{



    private string $query_build = "";
    public function varChar(string $name, int $range, array $constrains = []): Columns
    {

        $constrains = implode('', $constrains);
        $this->query_build .= " {$name} varChar({$range} {$constrains})";


        return $this;


    }

    public function notNull()
    {

        $this->query_build .= "not null";
        return $this;
    }

    public function getQueryBuild(): string
    {

        return $this->query_build;
    }
}