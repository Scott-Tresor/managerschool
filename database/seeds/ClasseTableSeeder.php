<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

/***
 * Class ClasseTableSeeder
 * @author scotttresor scotttresor@gmail.com
 */
class ClasseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Classe::truncate();

        \App\Classe::create(['name' => 'Premiere']);
        \App\Classe::create(['name' => 'Deuxieme']);
        \App\Classe::create(['name' => 'Troisieme']);
        \App\Classe::create(['name' => 'Quatrieme']);
        \App\Classe::create(['name' => 'Cinquieme']);
        \App\Classe::create(['name' => 'Sixieme']);
    }
}
