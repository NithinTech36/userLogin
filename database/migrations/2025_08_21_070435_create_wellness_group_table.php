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
        Schema::create('wellness_group', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        Schema::create('wellness_interests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('wellness_group_id')->constrained('wellness_group')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wellness_interests');
        Schema::dropIfExists('wellness_group');
    }
};
