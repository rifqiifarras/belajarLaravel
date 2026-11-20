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
        Schema::create('category_product', function (Blueprint $table) {
            // Membuat primary key dengan nama id_category
            $table->id('id_category'); 
            
            // Membuat kolom category_name bertipe varchar/string
            $table->string('category_name'); 
            
            // Membuat kolom description bertipe text
            $table->text('description'); 
            
            // Membuat kolom created_at dan updated_at secara otomatis
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_product');
    }
};