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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title', 128);
            $table->string('slug')->charset('ascii');
            /*$table->string('slug')->unique()->default(function ($value) {
                return Str::slug($value->title);
            });*/
            $table->text('content');
            $table->timestamps();
        });
    }

    /**git
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};


