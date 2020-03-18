<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
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

        $adminRole = Role::where('nome','Administrador')->first();
        $secretarioRole = Role::where('nome', 'Secretario')->first();

        $admin = User::create([
            'name'=>'Christian',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('administrador')
        ]);

        $secretario = User::create([
            'name'=>'Christian',
            'email'=>'secretario@gmail.com',
            'password'=>Hash::make('secretario')
        ]); 

        $admin->roles()->attach($adminRole);
        $secretario->roles()->attach($secretarioRole);
    }
}
