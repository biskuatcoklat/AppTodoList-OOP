<?php

require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../helpper/inputdata.php";
require_once __DIR__ . "/../bisnislogic/addtodolist.php";

function viewaddtodolist()
{
    echo "menambah Todo" .PHP_EOL;

    $todo = input("input (x) untuk batal :");

    if ($todo == "x")
    {
        
    }
    else
    {
        addtodolist($todo);
    }
}