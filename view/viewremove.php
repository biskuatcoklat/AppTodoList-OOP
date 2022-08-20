<?php
require_once __DIR__ . "/../helpper/inputdata.php";
require_once __DIR__ . "/../bisnislogic/removetodolist.php";

function viewremovetodolist()
{
    echo "mengapus data ". PHP_EOL;
    $pilihan =  input("NOmor(X untuk batalkan)");

    if ($pilihan == "x")
    {
        echo "batal";
    }
    else{
        $sukses = removetodolist($pilhan);

        if($sukses)
        {
            echo "berhasil menghapus todolist $pilihan";
        }
        else
        {
            echo"gagal menghapus todolist $pilihan";
        }
    }
}