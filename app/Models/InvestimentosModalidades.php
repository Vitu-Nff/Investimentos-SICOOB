<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestimentosModalidades extends Model
{

    protected $table = 'InvestimentosModalidades';
    protected $primaryKey = 'IdInvestimentoModalidade';

    use HasFactory;
}
