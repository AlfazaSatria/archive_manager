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
            'password' => Hash::make('admin123')
        ]);

        DB::table('users')->insert([
            'name' => 'factorymanager',
            'email' => 'factorymanager@indofood.com',
            'department_id' => '2',
            'password' => Hash::make('factory123.')
        ]);

        DB::table('users')->insert([
            'name' => 'sekretaris',
            'email' => 'sekretaris@indofood.com',
            'department_id' => '3',
            'password' => Hash::make('sekretaris123.')
        ]);

        
        DB::table('users')->insert([
            'name' => 'productionmanager',
            'email' => 'productionmanager@indofood.com',
            'department_id' => '4',
            'password' => Hash::make('product123.')
        ]);

       
    }
}
