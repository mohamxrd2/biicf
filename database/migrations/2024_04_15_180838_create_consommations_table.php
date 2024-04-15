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
        Schema::create('consproduser', function (Blueprint $table) {
            $table->id('Id_cons'); // Utilisation de 'Id_cons' comme nom de la colonne primaire
            $table->string('nom_art', 255);
            $table->string('type_prov', 255)->nullable();
            $table->string('cond_cons', 255);
            $table->string('format_cons', 255)->nullable();
            $table->integer('qte_cons');
            $table->integer('prix_cons')->nullable();
            $table->string('frqce_conse', 255)->nullable();
            $table->string('jourAch_cons', 255)->nullable();
            $table->string('zoneAct', 255);
            $table->string('villeCons', 255);
            $table->unsignedBigInteger('id_user')->nullable(); // Utilisation de `id_user` comme clé étrangère
            $table->timestamp('date_ajout')->useCurrent();

            // Ajoutez la clé étrangère `id_user`
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Ajoutez les colonnes `created_at` et `updated_at`
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consproduser');
    }
};
