<?php

namespace Repository {

    use Entity\Todolist;

    interface TodolistRepository
    {
        function Save(Todolist $todolist): void;
        function remove(int $number): bool;
        function findAll(): array;
    }

    class TodolistRepositoryimpl implements TodolistRepository
    {
        public  array $todolist = array();

        function Save(Todolist $todolist): void
        {
            $number = sizeof($this->todolist) + 1;
            $this->todolist[$number] = $todolist;
        }

        function remove(int $number): bool
        {
            global $todolist;

            if ($number > sizeof($this->todolist)) {
                return false;
            }

            for ($i = $number; $i > sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i + 1];
            }

            unset($this->todolist[sizeof($this->todolist)]);

            return true;
        }

        function findAll(): array
        {
            return $this->todolist;
        }
    }
}
