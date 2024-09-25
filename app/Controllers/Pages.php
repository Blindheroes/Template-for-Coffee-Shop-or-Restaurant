<?php

namespace App\Controllers;

class Pages extends BaseController
{

    public function index($param = 'home')
    {
        echo view('component/header');
        echo view('pages/' . $param);
        echo view('component/footer');
    }
    public function id($param = 'home')
    {
        echo view('component/header');
        echo view('pages/' . $param);
        echo view('component/footer');
    }
}
