<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $user = User::create([
                'first_name' => 'Mohammad',
                'last_name' => 'Imani',
                'email' => 'mohammad@imani.com',
                'phone' => '+989354209109',
                'password' => Hash::make('password'),
            ]);
        Role::create(['name' => 'admin']);
        $user->assignRole('admin');
    }
}
