<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
//            $table->unsignedBigInteger('category_id'); //使用者編號
//            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->integer('price');
//            $table->string('slogan')->nullable();
//            $table->text('specs')->nullable();
            $table->integer('quantity');
            $table->text('content')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
