<?php

namespace Database\Seeders;

use App\Models\ConjugateList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConjugateListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConjugateList::create([
            'name' => 'Ar Verbs',
            'description' => 'All starter AR verbs',
            'slug' => 'ar-verbs',
            'conjugate_list' => ['hablar', 'mirar', 'ayudar', 'escuchar'],
        ]);

        ConjugateList::create([
            'name' => 'Er Verbs',
            'description' => 'All starter ER verbs',
            'slug' => 'er-verbs',
            'conjugate_list' => ['comer', 'aprender', 'deber', 'vender'],
        ]);

        ConjugateList::create([
            'name' => 'Ir Verbs',
            'description' => 'All starter IR verbs',
            'slug' => 'ir-verbs',
            'conjugate_list' => ['subir', 'vivir', 'permitir', 'recibir', 'abrir',],
        ]);

        ConjugateList::create([
            'name' => 'Common Irregular Verbs',
            'description' => 'Most common irregular verbs',
            'slug' => 'irregular-verbs',
            'conjugate_list' => ["tener","estar","ser","hacer","poder","decir","ir","ver","dar","querer","salir","saber","poner","pedir","seguir","servir","elegir","caer","oír","venir","traer","haber",],
        ]);

    }
}
