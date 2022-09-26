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
            'group_id' => 1,
            'description' => 'All View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Production Manager',
            'group_id' => 2,
            'description' => 'Production View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Document Control',
            'group_id' => 1,
            'description' => 'Document Control View'
        ]);


        DB::table('departments')->insert([
            'name' => 'Produksi Minyak',
            'group_id' => 2,
            'description' => 'Produksi Minyak View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Produksi Bumbu',
            'group_id' => 2,
            'description' => 'Produksi Bumbu View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Quality Control',
            'group_id' => 3,
            'description' => 'QCH View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Hygiene',
            'group_id' => 3,
            'description' => 'QCH View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Maintenance',
            'group_id' => 4,
            'description' => 'Teknik View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Utility',
            'group_id' => 4,
            'description' => 'Teknik View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Project',
            'group_id' => 4,
            'description' => 'Teknik View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Warehouse',
            'group_id' => 5,
            'description' => 'Warehouse View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Safety Healty Environment',
            'group_id' => 6,
            'description' => 'HRD View'
        ]);

        DB::table('departments')->insert([
            'name' => 'GAS',
            'group_id' => 6,
            'description' => 'HRD View'
        ]);

        DB::table('departments')->insert([
            'name' => 'IR',
            'group_id' => 6,
            'description' => 'HRD View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Purchasing',
            'group_id' => 7,
            'description' => 'Purchasing View'
        ]);

        DB::table('departments')->insert([
            'name' => 'Accounting',
            'group_id' => 8,
            'description' => 'Accounting View'
        ]);
    }
}
