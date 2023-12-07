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
        Schema::create('realisations', function (Blueprint $table) {
            $table->id();
            $table->string('nom_realisation');
            $table->string('url')->default('...');
            $table->string('client')->default('...');
            $table->string('description');
            $table->foreignId('id_service')->constrained('services'); 
            $table->foreignId('id_option')->constrained('options');  
            $table->string('pathp1');
            $table->string('pathp2');
            $table->string('pathp3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realisations');
    }
};
