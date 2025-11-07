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
        Schema::create('template_action_relation_ship', function (Blueprint $table) {
            $table->id();
            $table->foreignId('template_id');
            $table->foreignId('action_id');

            $table->unique(['template_id', 'action_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_action_relation_ship');
    }
};
