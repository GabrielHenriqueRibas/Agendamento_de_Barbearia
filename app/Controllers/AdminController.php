<?php

namespace App\Controllers;

use Core\Http\Controllers\Controller;
use Core\Http\Request;
use App\Models\Barber;
use Lib\FlashMessage;
use Lib\Paginator;

class AdminController extends Controller
{
    public function index(Request $request): void
    {   
        $title1 = 'Funcionarios';
        $title2 = 'Cadastro';

        $class = 'App\Models\Scheduling'; 
        $page = $request->getParam('page', 1);
        $perPage = 10; 
        $table = 'schedules'; 
        $attributes = ['id', 'barber', 'service', 'date_scheduling', 'local']; 
        $conditions = []; 
        $route = 'admin.scheduling.list'; 

        $paginator = new \Lib\Paginator($class, $page, $perPage, $table, $attributes, $conditions, $route);

        $schedules = $paginator->registers();

        $this->render('admin/index', compact('title1', 'title2', 'schedules'));
    }

    public function destroy(Request $request): void
    {
        $params = $request->getParams();

        $barber = Barber::findById($params['id']);

        $barber->destroy();

        FlashMessage::success('Problema removido com sucesso!');
        $this->redirectTo(route('admin.index'));
    }

    
}
