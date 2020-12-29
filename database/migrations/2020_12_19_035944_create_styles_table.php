<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('styles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('backgroundColor');
            $table->string('navBarColor');
            $table->string('iconNavBarColor');
            $table->string('footerColor');
            $table->string('textFooterColor');
            $table->string('textCategoryColor');
            $table->string('navBarLogo');
            $table->string('footerLogo');
            $table->string('loginLogo');
            $table->string('slideItem');
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
        Schema::dropIfExists('styles');
    }
}
