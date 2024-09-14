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
        Schema::table('events', function (Blueprint $table) {
            $table->decimal('price', 8, 2)->nullable(); // Aggiunta della colonna prezzo
            $table->time('start_time')->nullable(); // Aggiunta della colonna ora inizio
            $table->time('end_time')->nullable();   // Aggiunta della colonna ora fine
            $table->integer('tickets_total')->nullable(); // Aggiunta del totale dei biglietti
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->integer('quantity')->default(1); // Aggiungere una colonna per il numero di biglietti prenotati
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn(['price', 'start_time', 'end_time', 'tickets_total']);
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('quantity');
        });
    }
};
