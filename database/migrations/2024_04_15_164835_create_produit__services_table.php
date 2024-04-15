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
        Schema::create('produit_services', function (Blueprint $table) {
            $table->id('id_prod'); // Colonne primaire `id_prod`
            $table->string('nomArt', 255)->nullable();
            $table->string('typeProd', 255)->nullable();
            $table->string('condProd', 255)->nullable();
            $table->string('formatProd', 255)->nullable();
            $table->integer('qteProd_min')->nullable();
            $table->integer('qteProd_max')->nullable();
            $table->integer('PrixProd')->nullable();
            $table->string('LivreCapProd', 255)->nullable();
            $table->binary('imgProd')->nullable(); // Colonne blob `imgProd`
            $table->string('desProd', 255)->nullable();
            $table->string('nomMet', 255)->nullable();
            $table->string('qalifServ', 255)->nullable();
            $table->string('sepServ', 255)->nullable();
            $table->integer('qteServ')->nullable();
            $table->integer('PrixServ')->nullable();
            $table->string('zonecoServ', 255)->nullable();
            $table->string('villeServ', 255)->nullable();
            $table->string('comnServ', 255)->nullable();
            $table->string('imgServ')->nullable(); // Colonne blob `imgServ`
            $table->string('desServ', 255)->nullable();
            $table->timestamp('date_ajout')->useCurrent(); // Utiliser un seul champ `date_ajout`
            $table->unsignedBigInteger('user_id')->nullable();
            
            // Ajoutez la clé étrangère `user_id`
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produit_services');
    }
};
