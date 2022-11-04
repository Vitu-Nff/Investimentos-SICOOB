<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalcularPerfil extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'valorInvestido' => 'required|regex:/^\d+(\,\d{1,2})?$/',
            'tipoRisco' => 'required',
            'tempoInvestimento' => 'required',
            'objetivo' => 'required'
        ];
    }
}
