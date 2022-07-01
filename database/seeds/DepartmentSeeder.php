<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Super Admin',
            'description' => 'All View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Human Resource',
            'description' => 'HR View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Factory Manager',
            'description' => 'Factory Manager View'
        ]);
    }
}
