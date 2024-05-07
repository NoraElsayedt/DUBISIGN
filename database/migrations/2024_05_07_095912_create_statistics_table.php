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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->integer('number_of_task')->default('0');
            $table->foreignId('assigned_to_id')->references('id')->on('admins')
            ->onDelete('cascade')->cascadeOnUpdate();

            $table->foreignId('assigned_by_id')->references('id')->on('users')
            ->onDelete('cascade')->cascadeOnUpdate();
          
            // $table->foreignId('task_id')->references('id')->on('tasks')
            // ->onDelete('cascade')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistics');
    }
};
