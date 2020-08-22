<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductRugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_rugs', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedInteger('product_id');
            $table->string('size', 20);
            $table->string('map_size', 20)->nullable();
            $table->string('color', 50)->nullable();
            $table->string('material', 50)->nullable();
            $table->string('pattern', 50)->nullable();
            $table->string('weave_type', 50)->nullable();
            $table->string('length', 10)->nullable();
            $table->string('width', 10)->nullable();
            $table->string('height', 10)->nullable();
            $table->string('pile_height', 10)->nullable();
            $table->string('shape', 50)->nullable();
            $table->string('collection', 50)->nullable();
            $table->string('construction', 50)->nullable();
            $table->string('quality_id', 50)->nullable();
            $table->string('style', 50)->nullable();
            $table->string('country', 50)->nullable();
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
        Schema::dropIfExists('product_rugs');
    }
}
