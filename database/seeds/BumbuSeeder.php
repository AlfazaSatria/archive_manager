<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BumbuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bumbus')->insert([
            'name' => 'Indomie',
            'slug' => 'indomie'
        ]);

        DB::table('bumbus')->insert([
            'name' => 'Sarimi',
            'slug' => 'sarimi'
        ]);

        DB::table('bumbus')->insert([
            'name' => 'Supermi',
            'slug' => 'supermi'
        ]);

        DB::table('bumbus')->insert([
            'name' => 'Intermi',
            'slug' => 'intermi'
        ]);

        DB::table('bumbus')->insert([
            'name' => 'Sakura',
            'slug' => 'sakura'
        ]);

        DB::table('bumbus')->insert([
            'name' => 'Pop Mie',
            'slug' => 'pop-mie'
        ]);

        DB::table('bumbus')->insert([
            'name' => 'Non Brand',
            'slug' => 'non-brand'
        ]);

        DB::table('bumbus')->insert([
            'name' => 'SI',
            'slug' => 'si'
        ]);
    }
}
