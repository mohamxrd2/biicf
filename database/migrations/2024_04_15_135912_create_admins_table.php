<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {

            $table->id(); // Clé primaire avec auto-incrémentation
            $table->string('nom_admin', 255);
            $table->string('username', 255);
            $table->string('password', 255);
            $table->string('phonenumber', 10);
            $table->string('admin_type', 255)->default('admin');
            $table->timestamp('date_creation')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
