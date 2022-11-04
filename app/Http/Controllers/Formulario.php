<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalcularPerfil;
use App\Models\Investimentos;
use App\Models\Objetivos;
use App\Models\TempoInvestimento;
use App\Models\TiposRiscos;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Formulario extends Controller
{
    public function index() {

        $data['objetivos'] = Objetivos::orderBy('IdObjetivo')->get();
        $data['tiposRiscos'] = TiposRiscos::orderBy('IdTipoRisco')->get();
        $data['tempoInvestimento'] = TempoInvestimento::orderBy('IdTempoInvestimento')->get();

        return view('formulario', $data);
    }

    public function resultado(CalcularPerfil $request) {

        // Valida a Request, corrige erros na formatação do Valor Investido
        $validated = $request->validated();
        $validated['valorInvestido'] = (int)$validated['valorInvestido'];

        //Estético, define um nome para o perfil segundo o 'Tipo de Risco' escolhido no formulário para apresentação na próxima tela
        $perfil['nome'] = TiposRiscos::nomearPerfil($validated['tipoRisco']);

        //Estético, transmite o Objetivo selecionado no formulário para a próxima tela
        $perfil['objetivo'] =  Objetivos::nome($validated['objetivo']);

        //Importante, transmite os investimentos sugeridos para a tela de resultados
        $perfil['investimentos'] = Investimentos::getResult($validated);

        return view('resultado', $perfil);
    }
}
