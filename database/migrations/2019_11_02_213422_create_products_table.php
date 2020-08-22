<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name');
            $table->string('url_name');
            $table->unsignedInteger('vendor_id');
            $table->unsignedInteger('supplier_id');
            $table->unsignedInteger('category_id');
            $table->float('whole_sale',8, 2);
            $table->float('cost',8, 2);
            $table->float('price',8, 2);
            $table->float('map_price',8, 2);
            $table->float('msrp',8, 2);
            $table->unsignedInteger('stock');
            $table->float('drop_ship_amount',8, 2);
            $table->mediumText('description');
            $table->float('prod_weight',8, 2);
            $table->unsignedInteger('product_type_id');
            $table->unsignedInteger('canonical');
            $table->mediumText('search_terms');
            $table->boolean('active');
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
        Schema::dropIfExists('products');
    }
}
