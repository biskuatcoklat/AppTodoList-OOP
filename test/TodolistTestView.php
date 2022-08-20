<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../view/Todolistview.php";
require_once __DIR__ . "/../helpper/inputhelper.php";

use \Entity\Todolist;
use \Repository\TodolistRepositoryimpl;
use \Service\TodolistServiceimpl;
use \View\Todolistview;

function testViewShowTodolist(): void
{
    $todolistrepository = new TodolistRepositoryimpl();
    $todolistservice = new TodolistServiceimpl($todolistrepository);
    $todolistview = new Todolistview($todolistservice);

    $todolistservice->addTodolist("belajar PHP");
    $todolistservice->addTodolist("Belajar PHP OOP");
    $todolistservice->addTodolist("Belajar PHP Database");

    $todolistview->showTodolist();
}
function testViewAddTodolist(): void
{
    $todolistrepository = new TodolistRepositoryimpl();
    $todolistservice = new TodolistServiceimpl($todolistrepository);
    $todolistview = new Todolistview($todolistservice);

    $todolistservice->addTodolist("belajar PHP");
    $todolistservice->addTodolist("Belajar PHP OOP");
    $todolistservice->addTodolist("Belajar PHP Database");

    $todolistservice->showTodolist();

    $todolistview->addTodolist();

    $todolistservice->showTodolist();
}

function testViewremoveTodolist(): void
{
    $todolistrepository = new TodolistRepositoryimpl();
    $todolistservice = new TodolistServiceimpl($todolistrepository);
    $todolistview = new Todolistview($todolistservice);

    $todolistservice->addTodolist("belajar PHP");
    $todolistservice->addTodolist("Belajar PHP OOP");
    $todolistservice->addTodolist("Belajar PHP Database");

    $todolistservice->showTodolist();

    $todolistview->removeTodolist();

    $todolistservice->showTodolist();
}

testViewAddTodolist();
