<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->String('name');
            $table->String('image')->nullable();
            $table->String('alt')->nullable();
            $table->String('color')->nullable();
            $table->String('weight')->nullable();
            $table->String('size')->nullable();
            $table->String('dimension')->nullable();
            $table->String('category')->nullable();
            $table->String('subcategory')->nullable();
            $table->String('price');
            $table->String('regularprice')->nullable();
            $table->mediumText('review');
            $table->longText('description');
            $table->String('arrival');
            $table->String('status');
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
