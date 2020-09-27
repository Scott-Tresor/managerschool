<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

/***
 * Class DatabaseSeeder
 * @author scotttresor scotttresor@gmail.com
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ClasseTableSeeder::class);
        $this->call(OptionTableSeeder::class);
    }
}
