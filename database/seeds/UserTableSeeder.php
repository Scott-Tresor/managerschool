<?php

declare(strict_types=1);

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/***
 * Class UserTableSeeder
 * @author scotttresor scotttresor@gmail.com
 */
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $admini = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'phone' => '097659273',
            'adresse' => 'Lubumbashi',
            'password' => \Illuminate\Support\Facades\Hash::make('1234567'),
        ]);
        $caissiers = User::create([
            'name' => 'caissier',
            'email' => 'info@caisier.com',
            'phone' => '097659273',
            'adresse' => 'Lubumbashi',
            'password' => \Illuminate\Support\Facades\Hash::make('1234567'),
        ]);

        $adminRole = Role::where('name', 'admin')->first();
        $caisseRole = Role::where('name', 'caissier')->first();

        $admini->roles()->attach($adminRole);
        $caissiers->roles()->attach($caisseRole);
    }
}
