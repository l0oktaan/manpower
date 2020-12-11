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
            $table->smallIncrements('id');
            $table->smallInteger('no')->unsigned()->index();
            $table->smallInteger('name1_id')->unsigned();
            $table->foreign('name1_id')->references('id')->on('position_name1')->onDelete('cascade');
            $table->smallInteger('name2_id')->unsigned();
            $table->foreign('name2_id')->references('id')->on('position_name2')->onDelete('cascade');
            $table->smallInteger('level_frame_id')->unsigned();
            $table->foreign('level_frame_id')->references('id')->on('level_frames')->onDelete('cascade');
            $table->smallInteger('level_hold_id')->unsigned();
            $table->foreign('level_hold_id')->references('id')->on('level_holds')->onDelete('cascade');
            $table->smallInteger('section_id')->unsigned();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
            $table->smallInteger('division_id')->unsigned();
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade');
            $table->smallInteger('status')->nullable();
            $table->smallInteger('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->string('description',500)->nullable();
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
