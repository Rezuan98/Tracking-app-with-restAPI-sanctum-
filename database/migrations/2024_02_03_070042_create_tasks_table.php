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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('name');
            $table->string('mobile');
            $table->string('district');
            $table->string('upazilla');
            $table->string('address');
            $table->string('photo')->nullable();
            $table->enum('status',['pending','completed'])->default('pending');
            $table->string('charge')->nullable();
            $table->string('monthlyfee')->nullable();
            $table->string('note')->nullable();
            $table->date('date');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
