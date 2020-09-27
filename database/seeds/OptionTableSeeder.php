<?php

use Illuminate\Database\Seeder;

class OptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Option::truncate();

        \App\Option::create(['name' => 'Maternelle']);
        \App\Option::create(['name' => 'Primaire']);
        \App\Option::create(['name' => 'Secondaire']);
    }
}
