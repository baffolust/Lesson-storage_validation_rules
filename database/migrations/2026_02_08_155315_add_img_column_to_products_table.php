<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * QUESTA E' LA MIGRAZIONE CREATA CON LA SINTASSI ADD
     */
    public function up(): void
    {
        // lo schema utilizzato è "table" e non "create"
        Schema::table('products', function (Blueprint $table) {
        

            $table->string('img')->nullable()->after('description');
            // l'immagine non è un file, ma un link ad un file, quindi il tipo di dato è una stringa
            // nullable(), perché un utente potrebbe non voler inserire un'immagine
            // after('description') inserisce la colonna dopo la colonna description


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            
            $table->dropColumn('img');
            // dropColumn('img') elimina la colonna 'img'

        });
    }
};
