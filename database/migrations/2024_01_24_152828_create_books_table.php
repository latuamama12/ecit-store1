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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            //*manca immagine e tags
            $table->string('titolo');
            $table->string('descrizione')->nullable();
            $table->integer('prezzo'); //*nomi campi della tabella            
            $table->string('categoria')->nullable();
            $table->timestamps();

            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
