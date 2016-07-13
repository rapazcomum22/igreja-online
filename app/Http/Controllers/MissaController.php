<?php

namespace App\Http\Controllers;

use App\Dias_Semana;
use App\Igreja;
use App\Missa;
use App\Padre;
use Illuminate\Http\Request;

use App\Http\Requests;

class MissaController extends Controller
{
    public function index(Request $request)
    {
        $dataInicio = $request->get('data_inicial');
        $dataFinal = $request->get('data_final');
        $query = Missa::getMissa($dataInicio,$dataFinal);
        $queryPadre = Padre::all();
        $queryIgreja = Igreja::all();
        return view('missa.index', ['model' => $query, 'getPadre' => $queryPadre, 'getIgreja' => $queryIgreja]);
    }

    public function create()
    {
        $igreja       = Igreja::all();
        $padre        = Padre::all();
        return view('missa.create',['igreja'=> $igreja, 'padre' => $padre]);
    }

    public function adiciona(Request $request)
    {
        $mensagem = 'Missa registrada com sucesso';
        $u = new Missa();
        $u->id_padre           = $request->get('padre');
        $u->id_igreja          = $request->get('igreja');
        $u->diacono            = $request->get('diacono');
        $u->data_missa         = $request->get('data_missa');
        $u->horario            = $request->get('horario');
        $u->total_dizimo       = $request->get('total_dizimo');
        $u->total_oferta       = $request->get('total_oferta');
        $u->total_arrecadacao  = $request->get('total_arrecadacao_hide');
        $u->save();

        return redirect(route('missa-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }


    
    public function edit($id)
    {
        $query = Membro::find($id);

        $sexo         = Sexo::all();
        $grau         = Grau_Instrucao::all();
        $igreja       = Igreja::all();
        $estado_civil = Estado_Civil::all();
        $municipio    = Municipio::all();
        return view('missa.edit',['model'=>$query, 'sexo'=> $sexo,'grau'=> $grau,'igreja'=> $igreja,'estado'=> $estado_civil, 'municipio' => $municipio]);
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
        return redirect( route('missa-index'))->with('alerta', ['type' => 'success', 'msg' => $mensagem]);
    }
}
