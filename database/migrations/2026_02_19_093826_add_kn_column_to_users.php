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
            $table->string('name_kn')->nulable();
            $table->string('phone')->nulable();
            $table->string('ward_ids')->nulable();
            $table->boolean('status')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name_kn');
            $table->dropColumn('phone');
            $table->dropColumn('ward_ids');
            $table->dropColumn('status');
        });
    }
};
