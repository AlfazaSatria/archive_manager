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
        DB::table('minyaks')->insert([
            'name' => 'Indomie',
            'slug' => 'indomie'
        ]);

        DB::table('minyaks')->insert([
            'name' => 'Sarimi',
            'slug' => 'sarimi'
        ]);

        DB::table('minyaks')->insert([
            'name' => 'Supermi',
            'slug' => 'supermi'
        ]);

        DB::table('minyaks')->insert([
            'name' => 'Sakura',
            'slug' => 'sakura'
        ]);

        DB::table('minyaks')->insert([
            'name' => 'Pop Mie',
            'slug' => 'pop-mie'
        ]);

        DB::table('minyaks')->insert([
            'name' => 'Minyak Bawang',
            'slug' => 'minyak-bawang'
        ]);
    }
}
