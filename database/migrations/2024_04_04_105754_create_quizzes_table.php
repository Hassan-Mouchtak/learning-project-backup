<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('matiere_id');
            $table->foreign('matiere_id')->references('id')->on('matieres');

            $table->unsignedBigInteger('cours_id');
            $table->foreign('cours_id')->references('id')->on('courses');

            
            $table->text('question');
            $table->text('correct_answer');
            $table->text('answer_option_1');
            $table->text('answer_option_2');
            $table->text('answer_option_3');
            $table->timestamps();
        });
    }

  

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes');
    }
};
