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
            $table->foreignId("brand_id");
            $table->string("name");
            $table->string('slug')->nullable();
            $table->string("dimensions");
            $table->string("display");
            $table->string("os");
            $table->string("chipset");
            $table->string("cpu");
            $table->string("memory");
            $table->string("battery");
            $table->text("description");
            $table->integer("price");
            $table->integer("stock");
            $table->string("image")->nullable();
            $table->date("release_date")->nullable();
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('restrict');
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
