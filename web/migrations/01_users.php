<?php

use Fastkit\database\Columns;
use Fastkit\database\Forge;




Forge::table("profile", function (Columns $row) {

    return [

        $row->varChar('nome', 5)->notNull(),
        $row->varChar('email', 8)->notNull(),
        $row->varChar('senha', 60)->notNull()

    ];

});