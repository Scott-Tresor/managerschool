<?php

declare(strict_types=1);

use App\Role;
use Illuminate\Database\Seeder;

/**
 * Class RoleTableSeeder
 * @author scotttresor scotttresor@gmail.com
 */
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'caissier']);
    }
}
