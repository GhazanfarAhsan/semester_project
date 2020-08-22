<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMissingFieldToProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {

            //
            $table->string('sku',100)->after('id');
            $table->string('image_url',1000)->after('url_name');
            $table->string('image_url_medium',1000)->after('image_url');
            $table->string('image_url_small',1000)->after('image_url_medium');
            $table->string('image_url_thumbnail',1000)->after('image_url_small');
            $table->boolean('is_map')->default(1)->after('prod_weight');
            $table->string('upc',100)->after('is_map');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
            $table->dropColumn(['sku', 'is_map', 'image_url', 'image_url_medium', 'image_url_small' , 'image_url_thumbnail', 'upc']);
        });
    }
}
