<?php
require_once __DIR__ . "/../model/todolist.php";
require_once __DIR__ . "/../bisnislogic/showtodolist.php";
require_once __DIR__ . "/../bisnislogic/addtodolist.php";
require_once __DIR__ . "/../bisnislogic/removetodolist.php";
require_once __DIR__ . "/../helpper/inputdata.php";
function viewshowtodolist()
{
    while (TRUE)
    {
        showtodolist();

        echo "Menu :" .PHP_EOL;
        echo "1. Tambah Data" .PHP_EOL;
        echo "2. Remove Menu" .PHP_EOL;
        echo "3. Keluar" .PHP_EOL;

        $pilihan = input("pilih");

        if($pilihan == "1")
        {
            viewaddtodolist();
        }
        else if($pilihan == "2")
        {
            viewremovetodolist();
        }
        else if($pilihan == "X")
        {
            break;
        }
        else
        {
            echo " Tidak ada";
        }

    }
    echo "see good bye";

}