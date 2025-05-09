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
        Schema::create('stadions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->nullOnDelete();
            $table->string('bot_token')->nullable();
            $table->string('title');
            $table->text('about_text');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->json('pictures')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stadions');
    }
};
