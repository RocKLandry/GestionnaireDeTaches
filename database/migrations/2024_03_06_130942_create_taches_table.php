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
        Schema::create('taches', function (Blueprint $table) 
        {
            $table->id();  // Colonne identifiant auto-incrémenté de la table tache
            
            $table->timestamps(); /* Cree deux champs Created_at et le  Updated_at 
                                 qui affichent l'heure de la cretion ou de la modification d'une tache*/
        
            $table->string("name_task"); // colonne name_task de la table tache
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taches');
    }
};
