<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('months')->insert([
            'name' => 'Januari',
            'slug' => 'januari',
        ]);

        DB::table('months')->insert([
            'name' => 'Februari',
            'slug' => 'februari',
        ]);

        DB::table('months')->insert([
            'name' => 'Maret',
            'slug' => 'maret',
        ]);

        DB::table('months')->insert([
            'name' => 'April',
            'slug' => 'april',
        ]);

        DB::table('months')->insert([
            'name' => 'Mei',
            'slug' => 'mei',
        ]);

        DB::table('months')->insert([
            'name' => 'Juni',
            'slug' => 'juni',
        ]);

        DB::table('months')->insert([
            'name' => 'Juli',
            'slug' => 'juli',
        ]);

        DB::table('months')->insert([
            'name' => 'Agustus',
            'slug' => 'agustus',
        ]);

        DB::table('months')->insert([
            'name' => 'September',
            'slug' => 'september',
        ]);

        DB::table('months')->insert([
            'name' => 'Oktober',
            'slug' => 'oktober',
        ]);

        DB::table('months')->insert([
            'name' => 'November',
            'slug' => 'november',
        ]);

        DB::table('months')->insert([
            'name' => 'Desember',
            'slug' => 'desember',
        ]);
    }
}
