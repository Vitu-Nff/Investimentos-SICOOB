<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Investimentos extends Model
{

    protected $table = 'inv.Investimentos';
    protected $primaryKey = 'IdInvestimento';

    use HasFactory;

    public static function getResult($input)
    {
        $query = DB::table('inv.Investimentos AS i')
            ->join( 'inv.InvestimentosModalidades AS im','im.IdInvestimento','=','i.IdInvestimento')
            ->join('inv.Modalidades AS m','m.IdModalidade','=','im.IdModalidade')

            ->where('VlrInvestimentoMinimo', '<', $input['valorInvestido'])
            ->where('VlrInvestimentoMaximo', '>', $input['valorInvestido'])
            ->where('IdTipoRisco', $input['tipoRisco'])
            ->where('IdTempoInvestimento', $input['tempoInvestimento'])
            ->where('IdObjetivo', $input['objetivo'])

            ->select('i.IdInvestimento','m.NomeModalidade','m.Descrica');

        return $query->get();
    }

}
