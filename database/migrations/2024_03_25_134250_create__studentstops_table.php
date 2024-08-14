<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('_studentstops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('stops_id');
        

            // Define foreign key constraints
            $table->foreign('student_id')->references('id')->on('_student')->onDelete('cascade');
            $table->foreign('stops_id')->references('id')->on('_stops')->onDelete('cascade');
           // $table->foreignId('studentid')->constrained('_student');
           // $table->foreignId('stopid')->constrained('_stops');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('_studentstops');
    }
};
