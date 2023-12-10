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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('MP')->default(0);
            $table->integer('MY')->default(0);
            $table->integer('VP')->default(0);
            $table->integer('VY')->default(0);
            $table->integer('EQ')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['MP', 'MY', 'VP', 'VY', 'EQ']);
        });
    }
};
