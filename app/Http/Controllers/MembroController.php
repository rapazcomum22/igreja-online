<?php

namespace App\Http\Controllers;

use App\Estado_Civil;
use App\Grau_Instrucao;
use App\Igreja;
use App\Membro;
use App\Municipio;
use App\Sexo;
use Illuminate\Http\Request;

use App\Http\Requests;

class MembroController extends Controller
{
    public function index()
    {
        $query = Membro::all();
        return view('membro.index', ['model' => $query]);
    }

    public function create()
    {
        $sexo         = Sexo::all();
        $grau         = Grau_Instrucao::all();
        $igreja       = Igreja::all();
        $estado_civil = Estado_Civil::all();
        $municipio    = Municipio::all();
        return view('membro.create',['sexo'=> $sexo,'grau'=> $grau,'igreja'=> $igreja,'estado'=> $estado_civil, 'municipio' => $municipio]);
    }

    public function adiciona(Request $request)
    {
        $mensagem = 'Membro registrado com sucesso';
        $u = new Membro();
        $u->nome            = $request->get('nome');
        $u->nascimento      = date('d/m/Y',strtotime($request->get('nascimento')));
        $u->id_sexo            = $request->get('sexo');
        $u->id_estado_civil    = $request->get('estado_civil');
        $u->id_municipio       = $request->get('municipio');
        $u->id_grau_instrucao    = $request->get('grau');
        $u->id_igreja          = $request->get('igreja');
        $u->endereco        = $request->get('endereco');
        $u->bairro          = $request->get('bairro');
        $u->cep             = $request->get('cep');
        $u->numero             = $request->get('numero');
        $u->cpf             = $request->get('cpf');
        $u->rg              = $request->get('rg');
        $u->fone            = $request->get('fone');
        $u->email           = $request->get('email');
        $u->profissao       = $request->get('profissao');
        $u->nome_mae        = $request->get('nome_mae');
        $u->save();

        return redirect(route('membro-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }

    public function edit($id)
    {
        $query = Membro::find($id);

        $sexo         = Sexo::all();
        $grau         = Grau_Instrucao::all();
        $igreja       = Igreja::all();
        $estado_civil = Estado_Civil::all();
        $municipio    = Municipio::all();
        return view('membro.edit',['model'=>$query, 'sexo'=> $sexo,'grau'=> $grau,'igreja'=> $igreja,'estado'=> $estado_civil, 'municipio' => $municipio]);
    }

    public function update(Request $request, $id)
    {
        $mensagem = 'Membro Editado com sucesso!';
        $eUpdate = $request->all();
        $e = Membro::find($id);
        $e->nome            = $eUpdate['nome'];
        $e->nascimento      = date('d/m/Y',strtotime($eUpdate['nascimento']));
        $e->id_sexo            = $eUpdate['sexo'];
        $e->id_estado_civil    = $eUpdate['estado_civil'];
        $e->id_municipio       = $eUpdate['municipio'];
        $e->id_grau_instrucao    = $eUpdate['grau'];
        $e->id_igreja          = $eUpdate['igreja'];
        $e->endereco        = $eUpdate['endereco'];
        $e->bairro          = $eUpdate['bairro'];
        $e->cep             = $eUpdate['cep'];
        $e->numero             = $eUpdate['numero'];
        $e->cpf             = $eUpdate['cpf'];
        $e->rg              = $eUpdate['rg'];
        $e->fone            = $eUpdate['fone'];
        $e->email           = $eUpdate['email'];
        $e->profissao       = $eUpdate['profissao'];
        $e->nome_mae        = $eUpdate['nome_mae'];
        $e->save();
        return redirect( route('membro-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }
}
