<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experiencia extends Model
{
    protected $table = 'experiencia';
    protected $primaryKey = 'id';

    protected $fillable =[        
        "valor",
        "sugerencia"
    ];
}


