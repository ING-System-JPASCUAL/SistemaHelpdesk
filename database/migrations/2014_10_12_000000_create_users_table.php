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
        Schema::create('tm_usuario', function (Blueprint $table) {
            $table->increments('usu_id');
            $table->string('usu_nomape', 90);
            $table->string('usu_correo', 50)->unique();
            $table->string('usu_pass', 200);
            $table->datetime('fech_crea')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('fech_modi')->nullable();
            $table->datetime('fech_elim')->nullable();
            $table->datetime('fech_acti')->nullable();
            $table->integer('est')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tm_usuario');
    }
};
