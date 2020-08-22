<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMissingColumnToProductDecorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_decors', function (Blueprint $table) {
            //
            $table->string('measurement',50)->nullable()->after('product_id');
            $table->string('style',50)->nullable()->after('center_mirror_dimension');
            $table->string('shape',50)->nullable()->after('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_decors', function (Blueprint $table) {
            //
            $table->dropColumn(['measurement','style','shape']);
        });
    }
}
