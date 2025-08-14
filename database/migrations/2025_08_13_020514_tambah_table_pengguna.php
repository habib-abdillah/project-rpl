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
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id(); // kolom id primary key auto increment
            $table->string('nama'); // nama pengguna
            $table->string('email')->unique(); // email unik
            $table->string('password'); // password
            $table->string('role')->default('user'); // role default user
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna'); // menghapus tabel pengguna
    }
};
