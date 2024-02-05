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
            $table->renameColumn('name', 'nama');
            $table->string('nisn')->unique()->nullable()->after('name');
            $table->string('email')->nullable()->change();
            $table->enum('role', ['siswa', 'admin'])->after('password');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->rename('name', 'nama');
            $table->string('email')->nullable()->change();
        });
    }
};
