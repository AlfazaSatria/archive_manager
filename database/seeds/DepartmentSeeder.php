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
            'name' => 'Factory Manager',
            'description' => 'All View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Accounting Manager',
            'description' => 'Accounting View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Product Manager',
            'description' => 'Product View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Personalia Manager',
            'description' => 'Personalia View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Human Resource',
            'description' => 'HR View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Safety Healty Environment',
            'description' => 'SHE View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Warehouse',
            'description' => 'Warehouse View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Technic',
            'description' => 'Technic View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Production Planning Inventory Control',
            'description' => 'PPIC View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Quality Control',
            'description' => 'QC View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Purchasing',
            'description' => 'Purchasing View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Product Sauce',
            'description' => 'Product Sauce View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Product Oil',
            'description' => 'Product Oil View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Manufacturing',
            'description' => 'Manufacturing View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Hygiene',
            'description' => 'Hygiene View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Accounting',
            'description' => 'Accounting View'
        ]);
    }
}
