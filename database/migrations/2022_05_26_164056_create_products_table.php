<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('category_id')->constrained('categories');
            $table->bigInteger('price');
            $table->bigInteger('sale_price')->nullable();
            $table->string('status');
            $table->string('sku')->nullable();
            $table->longText('product_attributes')->nullable();
            $table->text('related_products')->nullable();
            $table->text('up_sell_products')->nullable();
            $table->boolean('on_sale')->default(1);
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->integer('rating_count')->default(0);
            $table->float('average_rating', 8, 2)->default(0);
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
};
