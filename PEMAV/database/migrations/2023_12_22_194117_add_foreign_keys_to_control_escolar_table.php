<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('control_escolar', function (Blueprint $table) {
            $table->foreign(['CLAVE_ALUMNOS'], 'CLAVE_ALUMNOS_FK')->references(['CLAVE_ALUMNO'])->on('alumnos')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['CLAVE_PROFES'], 'CLAVE_PROFESORES_FK')->references(['CLAVE_PROF'])->on('profesores')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('control_escolar', function (Blueprint $table) {
            $table->dropForeign('CLAVE_ALUMNOS_FK');
            $table->dropForeign('CLAVE_PROFESORES_FK');
        });
    }
};
