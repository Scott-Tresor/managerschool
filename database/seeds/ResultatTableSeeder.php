<?php

use App\Resultat;
use Illuminate\Database\Seeder;

class ResultatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Resultat::class, 20)->create();
    }
}
