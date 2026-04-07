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
            $table->string('name')->unique();
            $table->string('details')->nullable();
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('category_id'); //kan nnt perlu dihubungkan ke tabel kategori
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade'); //ini buat bikin foreign key yang menghubungkan category_id di tabel products ke id di tabel categories, onDelete('cascade') itu artinya kalau kategori dihapus, produk yang terkait juga akan dihapus
            // kalau cascade itu artinya kalau kategori dihapus, produk yang terkait juga akan dihapus, 
            // kalau restrict itu artinya kalau kategori dihapus, produk yang terkait tidak akan dihapus, tapi akan menolak penghapusan kategori tersebut.
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
