<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class cursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();

        $curso->name("Laravel");
        $curso->description("el mejor framework PHP");
        $curso->categoria("Programacion web");

        $curso->save();
    }
}
