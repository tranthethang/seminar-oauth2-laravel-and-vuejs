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
        Schema::create('table_relationships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('follower_id');
            $table->unsignedBigInteger('followed_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_relationships');
    }
};
