<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SayurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sayurs')->insert([
            'name' => 'Solid Ingredient D 502330',
            'slug' => 'solid-ingredient-d-502330'
        ]);

        DB::table('sayurs')->insert([
            'name' => 'Flavour M 157100',
            'slug' => 'flavour-m-157100'
        ]);

        DB::table('sayurs')->insert([
            'name' => 'Solid Ingredient D 507920',
            'slug' => 'solid-ingredient-d-507920'
        ]);

        DB::table('sayurs')->insert([
            'name' => 'Ingredient M206240',
            'slug' => 'ingredient-m206240'
        ]);
    }
}
