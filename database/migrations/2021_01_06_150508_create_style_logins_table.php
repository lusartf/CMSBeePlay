<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStyleLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('style_logins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('imgBackground')->default('/storage/background/background.jpg');
            $table->string('colorBox')->nullable(true)->default('#1C1C1C');
            $table->string('colorButton')->nullable(true)->default('background: linear-gradient(to left, #FF4000, #DF3A01, #FE642E);');
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
        Schema::dropIfExists('style_logins');
    }
}
