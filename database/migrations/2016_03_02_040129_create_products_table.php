<?php

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
            $table->increments('id');
            $table->string('name',255);
            $table->string('slug');
            $table->text('description');
            $table->string('stract',300);
            $table->string('code');
            $table->integer('quantity')->unsigned();
            $table->integer('min_quantity')->unsigned();
            $table->decimal('price',5,2);
            $table->string('image',300);
            $table->boolean('visible');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')
                  ->on('categories');
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
        Schema::drop('products');
    }
}
