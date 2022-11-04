<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposRiscos extends Model
{

    protected $table = 'inv.TiposRiscos';
    protected $primaryKey = 'IdTipoRisco';

    use HasFactory;

    public static function nomearPerfil($tipoRisco): string
    {

        // Saída padrão para entradas imprevistas,
        $tipo = ('Perfil Investidor');

        switch($tipoRisco) {
            case 1:
                $tipo = ('Perfil Conservador');
                break;
            case 2:
                $tipo = ('Perfil Moderado');
                break;
            case 3:
                $tipo = ('Perfil de Alta Rentabilidade');
                break;
        }

        return $tipo;
    }

}


