<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'sa@indofood.com',
            'department_id' => '1',
            'password' => Hash::make('admmin123')
        ]);

        DB::table('users')->insert([
            'name' => 'factorymanager',
            'email' => 'factorymanager@indofood.com',
            'department_id' => '2',
            'password' => Hash::make('factory123.')
        ]);

        DB::table('users')->insert([
            'name' => 'accountingmanager',
            'email' => 'accountingmanager@indofood.com',
            'department_id' => '3',
            'password' => Hash::make('accounting000.')
        ]);

        DB::table('users')->insert([
            'name' => 'productmanager',
            'email' => 'productmanager@indofood.com',
            'department_id' => '4',
            'password' => Hash::make('product988.')
        ]);

        DB::table('users')->insert([
            'name' => 'personaliamanager',
            'email' => 'personaliamanager@indofood.com',
            'department_id' => '5',
            'password' => Hash::make('personalia755.')
        ]);
    }
}
