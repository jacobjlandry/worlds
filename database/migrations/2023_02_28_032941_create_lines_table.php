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
        Schema::create('lines', function (Blueprint $table) {
            $table->id();
            $table->integer('story_id')->index();
            $table->text('text');
            $table->boolean('is_actionable')->default(false);
            $table->json('options')->nullable();
            $table->boolean('depends_on_gear')->default(false);
            $table->boolean('grants_gear')->default(false);
            $table->integer('gear_id')->nullable();
            $table->$table->bigInteger('delay')->default(3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lines');
    }
};
