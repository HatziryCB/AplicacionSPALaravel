<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveServicioIdFromCitasTable extends Migration
{

    public function up()
    {
        Schema::table('citas', function (Blueprint $table) {
            // Primero, elimina la clave foránea
            $table->dropForeign(['servicio_id']);

            // Luego, elimina la columna 'servicio_id'
            $table->dropColumn('servicio_id');
        });
    }

    public function down()
    {
        Schema::table('citas', function (Blueprint $table) {
            // Agrega nuevamente la columna 'servicio_id'
            $table->foreignId('servicio_id')->nullable()->constrained()->onDelete('cascade');
        });
    }


}
