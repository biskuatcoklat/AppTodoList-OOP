<?php
//menambahkan data di todo list
function addtodolist(string $todo)
{
    global $todolist;

    $number = sizeof($todolist) +1;
  
    $todolist[$number] = $todo;
}