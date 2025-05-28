<?php
namespace Core;

abstract class Controller
{
    protected function view(string $path, array $data = [])
    {
        extract($data);
        require __DIR__ . "/../Views/{$path}.php";
    }

    protected function redirect(string $uri)
    {
        header("Location: {$uri}");
        exit;
    }
}
