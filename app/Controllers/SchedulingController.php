<?php

namespace App\Controllers;

use Core\Http\Controllers\Controller;
use Core\Http\Request;
use App\Models\Scheduling;
use App\Models\User;
use Lib\FlashMessage;
use Lib\Paginator;

class SchedulingController extends Controller
{
    public function create(Request $request): void
    {
        $id = $request->getParam("id");
        $params = $request->getParams();
        $user = User::findById($id);
        $scheduling = new Scheduling($params['scheduling'], $user);

        if ($scheduling->save()) {
            FlashMessage::success('Problema registrado com sucesso!');
            $this->redirectTo(route('problems.index'));
        } else {
            FlashMessage::danger('Existem dados incorretos! Por verifique!');
            $title = 'Novo Problema';
            $this->render('problems/new', compact('problem', 'title'));
        }
    }
}
