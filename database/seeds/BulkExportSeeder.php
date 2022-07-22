<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BulkExportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bulk_exports')->insert([
            'name' => 'Bulk Powder Beef Flavour-IBSM',
            'slug' => 'bulk-powder-beef-flavour-ibsm'
        ]);

        DB::table('bulk_exports')->insert([
            'name' => 'Bulk Powder EIBS-Beef Flavour',
            'slug' => 'bulk-powder-eibs-beef-flavour'
        ]);

        DB::table('bulk_exports')->insert([
            'name' => 'Bulk Powder Vegetable Flavour-SVM',
            'slug' => 'bulk-powder-vegetable-flavour-svm'
        ]);

        DB::table('bulk_exports')->insert([
            'name' => 'Bulk Powder ESV-Vegetable Flavour',
            'slug' => 'bulk-powder-esv-vegetable-flavour'
        ]);

        DB::table('bulk_exports')->insert([
            'name' => 'Bulk Seasoning P.MSV-Vegetable Flv-V3',
            'slug' => 'bulk-seasoning-pmsv-vegetable-flv-v3'
        ]);

        DB::table('bulk_exports')->insert([
            'name' => 'Bulk Seasoning Powder Vegetable Flv-SVA',
            'slug' => 'bulk-seasoning-powder-vegetable-flv-sva'
        ]);

        DB::table('bulk_exports')->insert([
            'name' => 'Bulk Seasoning Powder Vegetable FI-SVA-4',
            'slug' => 'bulk-seasoning-powder-vegetable-fi-sva-4'
        ]);

        DB::table('bulk_exports')->insert([
            'name' => 'Bulk Powder EKA-Chicken Flavour',
            'slug' => 'bulk-powder-eka-chicken-flavour'
        ]);

        DB::table('bulk_exports')->insert([
            'name' => 'Bulk Powder Chicken Flavour-KAM',
            'slug' => 'bulk-powder-chicken-flavour-kam'
        ]);
    }
}
