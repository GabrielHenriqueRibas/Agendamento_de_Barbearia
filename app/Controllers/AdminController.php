<?php

namespace App\Controllers;

use Core\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(): void
    {   
        $nav1 = 'Funcionarios';
        $nav2 = 'Cadastro';
        $this->render('admin/index', compact('nav1', 'nav2'));
    }

}
