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
        Schema::create('cvs', function (Blueprint $table) {
            $table->id('cv_id');
            $table->integer('user_id')->nullable();
            $table->text('education');
            $table->text('experience');
            $table->text('skills');
            $table->string('languages', 100)->nullable();
            $table->text('certifications');
            $table->text('hobbies');
            $table->string('path', 255)->nullable();
            $table->integer('id_employee')->nullable();
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cvs');
    }
};
