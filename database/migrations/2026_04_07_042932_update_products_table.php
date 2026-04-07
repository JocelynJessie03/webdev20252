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
        Schema::table('products', function (Blueprint $table) {
            //
            $table->integer('stock')->default(0); //menambahkan kolom stock dengan tipe data integer dan default value 0
            $table->decimal('price', 12, 2)->change(); //menambahkan kolom price dengan tipe data decimal 
            $table->renameColumn('details', 'description'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // dibalikkin smuaa
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('stock'); //menghapus kolom stock
            $table->decimal('price', 10, 2)->change(); //mengubah kolom price kembali ke tipe data decimal dengan default value 0
            $table->renameColumn('description', 'details'); //mengubah nama kolom description
        });
    }
};
