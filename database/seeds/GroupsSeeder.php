<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            'name' => 'Departemen Manufacturing'
        ]);

        DB::table('groups')->insert([
            'name' => 'Departemen Produksi'
        ]);

        DB::table('groups')->insert([
            'name' => 'Departemen Quality Control'
        ]);

        DB::table('groups')->insert([
            'name' => 'Departemen Teknik'
        ]);

        DB::table('groups')->insert([
            'name' => 'Departemen Warehouse'
        ]);

        DB::table('groups')->insert([
            'name' => 'Departemen HRD'
        ]);

        DB::table('groups')->insert([
            'name' => 'Departemen Purchasing'
        ]);

        DB::table('groups')->insert([
            'name' => 'Departemen Accounting'
        ]);

        DB::table('groups')->insert([
            'name' => 'Departemen PPIC'
        ]);
      
    }
}
