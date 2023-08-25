<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parcours_steps', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('step_id')->unsigned()->index()->nullable();
            $table->foreign('step_id')->references('id')->on('steps')->onDelete('cascade');
            $table->bigInteger('parcours_id')->unsigned()->index()->nullable();
            $table->foreign('parcours_id')->references('id')->on('parcours')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcours_steps');
    }
};
