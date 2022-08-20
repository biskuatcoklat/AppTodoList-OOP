<?php

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class Todolistview
    {
        private TodolistService $todolistservice;
        public function __construct(TodolistService $todolistservice)
        {
            $this->todolistservice = $todolistservice;
        }
        function showTodolist(): void
        {
            while (TRUE) {
                $this->todolistservice->showTodolist();

                echo "Menu :" . PHP_EOL;
                echo "1. Tambah Data" . PHP_EOL;
                echo "2. Remove Menu" . PHP_EOL;
                echo "3. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("pilih");

                if ($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->removeTodolist();
                } else if ($pilihan == "X") {
                    break;
                } else {
                    echo " Tidak ada";
                }
            }
            echo "see good bye";
        }
        function addTodolist(): void
        {
            echo "menambah Todo" . PHP_EOL;

            $todo = InputHelper::input("input (x) untuk batal :");

            if ($todo == "x") {
                echo "gagal input data" . PHP_EOL;
            } else {
                $this->todolistservice->addTodolist($todo);
            }
        }
        function removeTodolist(): void
        {
            echo "mengapus data " . PHP_EOL;
            $pilihan =  InputHelper::input("NOmor(X untuk batalkan)");

            if ($pilihan == "x") {
                echo "batal";
            } else {
                $this->todolistservice->removeTodolist($pilihan);
            }
        }
    }
}
