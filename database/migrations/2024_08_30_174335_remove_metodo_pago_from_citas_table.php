<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveMetodoPagoFromCitasTable extends Migration
{
    public function up()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->dropColumn('metodo_pago');
        });
    }

    public function down()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->string('metodo_pago')->nullable();
        });
    }

}
