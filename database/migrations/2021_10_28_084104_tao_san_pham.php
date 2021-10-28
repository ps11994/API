<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sampham', function (Blueprint $table) {
            $table->increments('idSP');
            $table->string('TenSP',100);
            $table->unsignedInteger('idDM');
            $table->foreign("idDM")->references("idDM")->on("danhmuc")->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sampham');
    }
}
