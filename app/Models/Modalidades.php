<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidades extends Model
{

    protected $table = 'inv.Modalidades';
    protected $primaryKey = 'IdModalidade';

    use HasFactory;
}
