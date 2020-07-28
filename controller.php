<?php

class Controller
{
    public function view($name, $data = [])
    {
        extract($data);
        require __DIR__ . '/views/' . strtolower($name) . '.php';
    }

    public function model($name)
    {
        require __DIR__ . '/models/' . strtolower($name) . '.php';
        return new $name();
    }
}