<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BumbuExportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bumbu_exports')->insert([
            'name' => 'Marocco',
            'slug' => 'marocco'
        ]);

        DB::table('bumbu_exports')->insert([
            'name' => 'Syria',
            'slug' => 'syria'
        ]);

        DB::table('bumbu_exports')->insert([
            'name' => 'VIA NDL',
            'slug' => 'via-ndl'
        ]);
    }
}
