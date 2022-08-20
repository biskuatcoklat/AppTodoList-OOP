<?php

//menampilkan data todo
function showtodolist()
{
    global $todolist;
    echo "todolist" .PHP_EOL;

    foreach($todolist as $number => $value)
    {
        echo "$number . $value" . PHP_EOL;
    }
}