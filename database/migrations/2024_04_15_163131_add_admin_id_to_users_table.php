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
        Schema::table('users', function (Blueprint $table) {
            // Ajoutez une nouvelle colonne admin_id
            $table->unsignedBigInteger('admin_id')->nullable();

            // Ajoutez la contrainte de clé étrangère
            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Supprimez la contrainte de clé étrangère
            $table->dropForeign(['admin_id']);

            // Supprimez la colonne admin_id
            $table->dropColumn('admin_id');
        });
    }
};
