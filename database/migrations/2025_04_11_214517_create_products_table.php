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
            $table->string('proname', 100);
            $table->integer('price');
            $table->string('description', 300)->nullable();
            $table->unsignedInteger('cateid');
            $table->timestamps();

            $table->foreign('cateid', 'categories_cateid_foreign')
                ->references('cateid')
                ->on('categories');

            $table->unsignedBigInteger('brandid');

            $table->foreign('brandid', 'brands_brandid_foreign')
                ->references('id')
                ->on('brands');
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
