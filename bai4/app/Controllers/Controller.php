<?php

namespace App\Controllers;

class Controller
{
    public function view($path, $data = [])
    {

        include_once __DIR__ . "/../../resources/views/$path.php";
    }
}
