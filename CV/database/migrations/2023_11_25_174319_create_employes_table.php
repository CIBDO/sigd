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
        Schema::create('employes', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('position', 50)->nullable();
            $table->string('department', 50)->nullable();
            $table->date('hire_date')->nullable();
            $table->decimal('salary', 10, 2)->nullable();
            $table->string('email', 100)->nullable();
            $table->integer('id_service')->nullable();
            $table->integer('id_cv')->nullable();
            $table->string('matricule', 50)->nullable();
            $table->string('cadre', 100)->nullable();
            $table->string('localite', 50)->nullable();
            $table->string('sexe', 10)->nullable();
            $table->string('service', 20)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
