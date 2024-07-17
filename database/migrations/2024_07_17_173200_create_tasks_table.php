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
            $table->timestamps();
            $table->string('due_date')->nullable();
            $table->string('name');
            $table->string('priority');
            $table->string('image_path')->nullable();
            $table->longText('status');
            $table->longText('description')->nullable();
            $table->foreignId('assigned_user_id')->constrained('users');
            $table->foreignId('updated_by')->constrained('users');
            $table->foreignId('created_by')->constrained('users');
            $table->foreignId('project_id')->constrained('projects');
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
