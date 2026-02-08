<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Con la command line in terminale "php artisan:migrate" vengono lanciate le funzioni up() che vanno a creare le tabelle come funzioni descritte sotto  */
    public function up(): void
    {
        /* Schema::create è un metodo che definisce una tabella */
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            /* Metodo genera una colonna "id", dato univoco essenziale; crea un big integer autoincrementale */

            $table->string('name');
            /* Metodo che genera una colonna di tipo stringa max 255 caratteri, col nome che è passato come parametro 'name' */

            $table->string('email')->unique();
            /* Come il metodo precedente in più il metodo concatenato unique() indica che nella nostra tabella non può esistere un altro record con lo stesso valore */

            $table->timestamp('email_verified_at')->nullable();
            // il metodo timestamp genera un dato in formato data-ora
            /* Il metodo nullable() fa si che questo campo possa accettare il valore NULL */

            $table->string('password');
            $table->rememberToken();
            $table->timestamps(); 
            /* 
            Metodo che genera 2 colonne, data di creazione "CREATED_AT" e di aggiornamento della riga "UPDATED_AT" 
            Da non rimuovere!!!
            */
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /* Con la command line in terminale "php artisan:rollback" vengono lanciate le funzioni down() che riporta le situazioni delle tabelle a quella precedente all'ultima migrazione (ultimo batch)  */

    /* up() non conctrolla le modifiche */

    /* L'IDEA E' QUELLA DI NON FARE ROLLBACK, se devo aggiornare una tabella, creo una nuova tabella con le modifiche che richiedo.  */

    /* NOTA BENE: non è sempre così, up() e down() distrugge, è possibile creare funzioni up() che cancellano e down() che aggiungono. 
    E' SEMPRE VERO, se ho scritto la logica correttamente, che Up() e Down() fanno cose opposte */

    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }

    /* Per creare una migrazione in laravel con lo schema create 
    --> php artisan make:migration create_[nome della tabella]_table */

    /*  COMMAND LINE
    php artisan migrate -> lancia le funzioni up()
    php artisan migrate:rollback -> lancia le funzioni down()
    */
    
};
