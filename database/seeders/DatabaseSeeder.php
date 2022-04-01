<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
           'name' => 'Michael Claar',
           'email' => 'michael@example.com',
           'password' => bcrypt('abc12345'),
        ]);
        (new ConjugateSeeder())->run();
        (new ConjugateListSeeder())->run();
    }
}
