<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    use HasFactory;

    protected $fillable = [
        'colaborador',
        'titulo',
        'area',
        'descripcion',
        ];
    
    protected $table = 'peticiones';
}
