<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('product_id');
            $table->integer('user_id')->default(0);
            $table->string('full_name');
            $table->string('comments');
            $table->integer('rating');
            $table->boolean('active');
            $table->boolean('anonymous');
            $table->integer('updated_by')->default(0);
            $table->boolean('allow_deny');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
