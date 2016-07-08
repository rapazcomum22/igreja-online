<?php

namespace App\Http\Controllers;

use App\Igreja;
use App\Padre;
use Illuminate\Http\Request;

use App\Http\Requests;

class PadreController extends Controller
{
    public function index()
    {
        $query = Padre::all();
        return view('padre.index', ['model' => $query]);
    }

    public function create()
    {
        $igreja       = Igreja::all();
        return view('padre.create',['igreja'=> $igreja]);
    }

    public function adiciona(Request $request)
    {
        $mensagem = 'Padre registrado com sucesso';
        $e = new Padre();
        $e->id_igreja       = $request->get('igreja');
        $e->nome            = $request->get('nome');
        $e->data            = $request->get('data');
        $e->save();

        return redirect(route('padre-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }

    public function edit($id)
    {
        $query = Padre::find($id);
        $igreja       = Igreja::all();

        return view('padre.edit',['model'=>$query,'igreja'=> $igreja]);
    }

    public function update(Request $request, $id)
    {
        $eUpdate = $request->all();
        $mensagem = 'Padre Editado com sucesso!';
        $e = Padre::find($id);
        $e->id_igreja       = $eUpdate['igreja'];
        $e->nome            = $eUpdate['nome'];
        $e->data            = $eUpdate['data'];
        $e->save();

        return redirect( route('padre-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }
}
