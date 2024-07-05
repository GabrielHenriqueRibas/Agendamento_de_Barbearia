<?php

namespace App\Controllers;

use Core\Http\Controllers\Controller;
use Core\Http\Request;
use App\Models\Barber;
use Lib\FlashMessage;


class BarberController extends Controller

{
    public function show(): void{   
        $this->render('barber/show');
    }

    public function new(Request $request): void{   
    
        $class = 'App\Models\Barber'; 
        $page = $request->getParam('page', 1);
        $perPage = 10; 
        $table = 'barbers'; 
        $attributes = ['id', 'name', 'email']; 
        $conditions = []; 
        $route = 'barber.barbers.list'; 

        $paginator = new \Lib\Paginator($class, $page, $perPage, $table, $attributes, $conditions, $route);

        $barbers = $paginator->registers();

        $this->render('barber/new', compact('barbers'));
    }

    public function create(Request $request): void
    {
        $params = $request->getParams();
        $barbers = new Barber($params["admin"]);

        if ($barbers->save()) {
            FlashMessage::success('Problema registrado com sucesso!');
            $this->redirectTo(route('barber.new'));
        } else {
            FlashMessage::danger('Existem dados incorretos! Por verifique!');
            $title = 'Novo Problema';
            $this->render('barber.show', compact('barbers', 'title'));
        }
    }

    public function edit(Request $request): void{
        $params = $request->getParams();
        
        $barber = Barber::findById($params['id']);
        $this->render('barber/edit', compact('barber'));
    }

    public function update(Request $request): void{
        $id = $request->getParam("id");
        $params = $request->getParam("admin");
        $barber = Barber::findById($id);

        $barber->fill($params);

        if ($barber->save()) {
            FlashMessage::success('Problema atualizado com sucesso!');
            $this->redirectTo(route('barber.new'));
        } else {
            FlashMessage::danger('Existem dados incorretos! Por verifique!');
            $this->render('barber/edit', compact('barber'));
        }
    }
}
