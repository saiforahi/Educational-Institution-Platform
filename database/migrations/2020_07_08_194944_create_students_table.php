<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('student_id')->unique()->nullable();
            $table->foreignId('institute_id')->constrained('institutes');
            //$table->unsignedBigInteger('guardian_id')->nullable();
            $table->string('sex')->nullable();
            $table->timestamps();
            //$table->foreign('guardian_id')->references('id')->on('guardians');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
