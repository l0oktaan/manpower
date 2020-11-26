<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('no')->unsigned()->index();
            $table->string('name1');
            $table->string('name2');
            $table->tinyInteger('type');
            $table->tinyInteger('level1');
            $table->tinyInteger('level2');
            $table->tinyInteger('section');
            $table->tinyInteger('division');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('positions');
    }
}
