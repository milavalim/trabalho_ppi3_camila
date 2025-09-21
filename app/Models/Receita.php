<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    use HasFactory; //gerar dados fake

    // Libera os campos que podem ser salvos via create() ou update()
    protected $fillable = [ //diz quais colunas podem ser atribuídas em massa
        'titulo',
        'ingredientes',
        'descricao',
        'arquivo',
        'user_id',
    ];
}
