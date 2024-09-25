<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('component/header');
        echo view('pages/home');
        echo view('component/footer');
    }
    public function pages($param = 'home')
    {

        echo view('component/header');
        echo view('pages/' . $param);
        echo view('component/footer');
    }
}
