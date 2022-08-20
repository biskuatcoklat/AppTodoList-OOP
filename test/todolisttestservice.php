<?php



require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Entity\Todolist;
use Service\TodolistServiceimpl;
use Repository\TodolistRepositoryimpl;

function testShowTodolist(): void
{
    $todolistrepository = new TodolistRepositoryimpl();
    $todolistrepository->todolist[1] = new Todolist("belajar PHP");
    $todolistrepository->todolist[2] = new Todolist("belajar PHP OOP");
    $todolistrepository->todolist[3] = new Todolist("belajar PHP Database");
    $todolistservice = new TodolistServiceimpl($todolistrepository);

    $todolistservice->showTodolist();
}
function testAddTodolist(): void
{
    $todolistrepository = new TodolistRepositoryimpl();

    $todolistservice = new TodolistServiceimpl($todolistrepository);
    $todolistservice->addTodolist("belajar php");
    $todolistservice->addTodolist("belajar php oop");
    $todolistservice->addTodolist("belajar php database");

    $todolistservice->showTodolist();
}
function testRemoveTodolist(): void
{
    $todolistrepository = new TodolistRepositoryimpl();

    $todolistservice = new TodolistServiceimpl($todolistrepository);
    $todolistservice->addTodolist("belajar php");
    $todolistservice->addTodolist("belajar php oop");
    $todolistservice->addTodolist("belajar php database");

    $todolistservice->showTodolist();

    $todolistservice->removeTodolist(1);
    $todolistservice->showTodolist();
}
testRemoveTodolist();
