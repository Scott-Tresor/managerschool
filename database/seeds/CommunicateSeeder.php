<?php

use App\Communicate;
use Illuminate\Database\Seeder;

class CommunicateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Communicate::class, 10)->create();
    }
}
