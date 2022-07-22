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
        DB::table('users')->insert([
            'name' => 'Indomie',
            'slug' => 'indomie'
        ]);

        DB::table('users')->insert([
            'name' => 'Sarimi',
            'slug' => 'sarimi'
        ]);

        DB::table('users')->insert([
            'name' => 'Supermi',
            'slug' => 'supermi'
        ]);

        DB::table('users')->insert([
            'name' => 'Intermi',
            'slug' => 'intermi'
        ]);

        DB::table('users')->insert([
            'name' => 'Sakura',
            'slug' => 'sakura'
        ]);

        DB::table('users')->insert([
            'name' => 'Pop Mie',
            'slug' => 'pop-mie'
        ]);

        DB::table('users')->insert([
            'name' => 'Non Brand',
            'slug' => 'non-brand'
        ]);

        DB::table('users')->insert([
            'name' => 'SI',
            'slug' => 'si'
        ]);
    }
}
