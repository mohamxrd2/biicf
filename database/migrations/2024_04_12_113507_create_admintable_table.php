<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAdmintableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admintable', function (Blueprint $table) {
            $table->increments('id_admin'); // Clé primaire avec auto-incrémentation
            $table->string('nom_admin', 255);
            $table->string('username_admin', 255);
            $table->string('password_admin', 255);
            $table->string('phonenumber', 10);
            $table->string('admin_type', 255)->default('admin');
            $table->timestamp('date_creation')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admintable');
    }
}
