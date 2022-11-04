<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempoInvestimento extends Model
{

    protected $table = 'inv.TempoInvestimento';
    protected $primaryKey = 'IdTempoInvestimento';

    use HasFactory;
}
