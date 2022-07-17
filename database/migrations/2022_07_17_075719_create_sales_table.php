<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('month_id');
            $table->integer('year');
            $table->integer('bumbu_id')->nullable();
            $table->integer('minyak_id')->nullable();
            $table->integer('bumbu_export_id')->nullable();
            $table->integer('bulk_export_id')->nullable();
            $table->integer('sayur_id')->nullable();
            $table->double('order');
            $table->double('sales');
            $table->double('acv');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
