<?php

require_once "../model/todolist.php";
require_once "../bisnislogic/showtodolist.php";
require_once "../view/viewaddshow.php";
require_once "../view/viewremove.php";
require_once "../helpper/inputdata.php";

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
        else if($pilihan == "3")
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