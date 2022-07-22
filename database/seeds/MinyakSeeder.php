<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MinyakSeeder extends Seeder
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
    }
}
