<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Objetivos extends Model
{

    protected $table = 'inv.Objetivos';
    protected $primaryKey = 'IdObjetivo';

    use HasFactory;

    public static function nome($id) : string
    {
        $nome = Objetivos::find($id);
        return $nome['NomeObjetivo'];
    }
}
