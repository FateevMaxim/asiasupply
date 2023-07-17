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
        Schema::create('boergers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_description');
            $table->foreignId('boerger_category_id')->constrained();
            $table->string('avatar')->nullable();
            $table->jsonb('description');
            $table->text('media')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boergers');
    }
};
