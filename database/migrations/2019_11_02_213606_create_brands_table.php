<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name',100)->nullable();
            $table->string('logo_url',500)->nullable();
            $table->string('image_url',500)->nullable();
            $table->string('dest_link',500)->nullable();
            $table->string('description',800)->nullable();
            $table->boolean('show_menu')->default(1);
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('brands');
    }
}
