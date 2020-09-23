<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('institute_id')->constrained('institutes');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->string('name');
            $table->string('room');
            $table->time('start');
            $table->time('end');
            $table->time('duration');
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
        Schema::dropIfExists('i_classes');
    }
}
