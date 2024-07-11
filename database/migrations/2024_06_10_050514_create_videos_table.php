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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string("workShop");
            $table->string("Week_No");
            $table->string("Title");
            $table->string("Cartoon");
            $table->string("Video");
            $table->string("Teacher_name");
             $table->string("Purpose");
             $table->string("Status")->default('false');
            $table->longText("Notes")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};