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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category'); // e.g. Web Dev, UI/UX, Machine Learning, Mobile Dev
            $table->text('description'); // Short excerpt for project grid card
            $table->text('full_description')->nullable(); // Detailed description for modal
            $table->json('technologies')->nullable(); // Array of tech stacks e.g. ["Laravel", "Tailwind CSS", "Vue.js"]
            $table->string('image')->nullable(); // Path to project banner/screenshot
            $table->string('github_url')->nullable();
            $table->string('demo_url')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
