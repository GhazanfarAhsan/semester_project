<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDecorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_decors', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedInteger('product_id');
            $table->string('material', 50)->nullable();
            $table->string('finish', 50)->nullable();
            $table->string('notes', 50)->nullable();
            $table->string('center_mirror_dimension', 50)->nullable();
            $table->string('size', 20)->nullable();
            $table->string('color', 20)->nullable();
            $table->string('collection', 20)->nullable();
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
        Schema::dropIfExists('product_decors');
    }
}
