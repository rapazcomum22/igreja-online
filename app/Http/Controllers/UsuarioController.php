<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsuarioController extends Controller
{
    public function index()
    {
        $query = User::all();
        return view('usuario.index', ['model' => $query]);
    }

    public function create()
    {
        return view('usuario.create');
    }

    public function adiciona(Request $request)
    {
        $mensagem = 'Usuário registrado com sucesso';
        $u = new User();
        $u->name        = $request->get('name');
        $u->email       = $request->get('usuario');
        $u->password    = bcrypt($request->get('password'));
        $u->save();

        return redirect(route('usuario-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }

    public function edit($id)
    {
        $query = User::find($id);
        return view('usuario.edit', ['model' => $query]);
    }

    public function update(Request $request, $id)
    {
        $mensagem = 'Usuário Editado com sucesso!';
        $eUpdate = $request->all();
        $e = User::find($id);
        $e->name        = $eUpdate['name'];
        $e->email       = $eUpdate['usuario'];
        $e->password    = bcrypt($eUpdate['password']);
        $e->save();
        return redirect( route('usuario-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }
}
