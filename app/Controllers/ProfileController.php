<?php

namespace App\Controllers;

use Core\Http\Controllers\Controller;
use Core\Http\Request;
use App\Models\Barber;
use Lib\FlashMessage;
use Lib\Paginator;

class ProfileController extends Controller
{
    public function show(): void
    {
        
        $title = 'Meu Perfil';
        $this->render('profile/show', compact('title'));
    }

    public function updateAvatar(): void
    {
        $image = $_FILES['user_avatar'];

        $this->current_user->avatar()->update($image);
        $this->redirectTo(route('profile.show'));
    }

    public function new(Request $request): void{   
    
        $class = 'App\Models\Barber'; 
        $page = $request->getParam('page', 1);
        $perPage = 10; 
        $table = 'barbers'; 
        $attributes = ['id', 'name', 'email']; 
        $conditions = []; 
        $route = 'profile.barbers.list'; 

        $paginator = new \Lib\Paginator($class, $page, $perPage, $table, $attributes, $conditions, $route);

        $barbers = $paginator->registers();

        $this->render('profile/new', compact('barbers'));
    }

    public function create(Request $request): void
    {
        $params = $request->getParams();
        $problem = $this->current_user->scheduling()->new($params['barber'], $params['service'], $params['date'], $params['local']);

        if ($problem->save()) {
            FlashMessage::success('Problema registrado com sucesso!');
            $this->redirectTo(route('problems.index'));
        } else {
            FlashMessage::danger('Existem dados incorretos! Por verifique!');
            $title = 'Novo Problema';
            $this->render('profile/new');
        }
    }

    public function update(Request $request): void
    {
        $id = $request->getParam('id');
        $params = $request->getParam('user');

        $user = $this->current_user->user()->findById($id);
        $user->name = $params['name'];

        if ($problem->save()) {
            FlashMessage::success('Problema atualizado com sucesso!');
            $this->redirectTo(route('problems.index'));
        } else {
            FlashMessage::danger('Existem dados incorretos! Por verifique!');
            $title = "Editar Problema #{$problem->id}";
            $this->render('problems/edit', compact('problem', 'title'));
        }
    }
}
