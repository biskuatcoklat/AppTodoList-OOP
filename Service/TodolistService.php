<?php

namespace Service {

    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface TodolistService
    {
        function showTodolist(): void;
        function addTodolist(string $todo): void;
        function removeTodolist(int $number): void;
    }

    class TodolistServiceimpl implements TodolistService
    {
        private TodolistRepository $todolistRepository;

        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }
        function showTodolist(): void
        {
            echo "Todolist" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number." . $value->getTodo() . PHP_EOL;
            }
        }
        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistRepository->Save($todolist);
            echo "Sukses Menambah TodoList" . PHP_EOL;
        }
        function removeTodolist(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "sukses menghapus data" . PHP_EOL;
            } else {
                echo "gagal menghapus data";
            }
        }
    }
}
