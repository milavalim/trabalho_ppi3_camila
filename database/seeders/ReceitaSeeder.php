<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(){
        \App\Models\Receita::create([
            'titulo' => 'Bolo de Chocolate',
            'ingredientes' => 'Farinha, açúcar, cacau, ovos, leite, óleo, fermento',
            'descricao' => 'Delicioso bolo de chocolate caseiro.',
            'arquivo' => 'bolo.jpg',
            'user_id' => 1
        ]);
        \App\Models\Receita::create([
            'titulo' => 'Lasanha',
            'ingredientes' => 'Massas, carne moída, molho de tomate, queijo, presunto',
            'descricao' => 'Lasanha de carne com queijo.',
            'arquivo' => 'lasanha.jpg',
            'user_id' => 1
        ]);
        \App\Models\Receita::create([
            'titulo' => 'Salada Tropical',
            'ingredientes' => 'Alface, tomate, abacaxi, manga, cenoura',
            'descricao' => 'Salada de frutas tropical.',
            'arquivo' => 'salada.jpg',
            'user_id' => 1
        ]);
    }
}
