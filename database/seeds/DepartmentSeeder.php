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
            'name' => 'Sekretaris',
            'description' => 'All View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Production Manager',
            'description' => 'Production View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Document Control',
            'description' => 'Document Control View'
        ]);


        DB::table('departments')->insert([
            'name' => 'Produksi Minyak',
            'description' => 'Produksi Minyak View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Produksi Bumbu',
            'description' => 'Produksi Bumbu View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Quality Control',
            'description' => 'QCH View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Hygiene',
            'description' => 'QCH View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Maintenance',
            'description' => 'Teknik View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Utility',
            'description' => 'Teknik View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Project',
            'description' => 'Teknik View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Warehouse',
            'description' => 'Warehouse View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Safety Healty Environment',
            'description' => 'HRD View'
        ]);

        DB::table('departments')->insert([
            'name' => 'GAS',
            'description' => 'HRD View'
        ]);

        DB::table('departments')->insert([
            'name' => 'IR',
            'description' => 'HRD View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Purchasing',
            'description' => 'Purchasing View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Accounting',
            'description' => 'Accounting View'
        ]);
    }
}
