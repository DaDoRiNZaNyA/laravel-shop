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
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('age')->nullable();
            $table->string('address')->nullable();
            $table->unsignedSmallInteger('gender')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('middle_name');
            $table->dropColumn('last_name');
            $table->dropColumn('age');
            $table->dropColumn('address');
            $table->dropColumn('gender');
        });
    }
};
