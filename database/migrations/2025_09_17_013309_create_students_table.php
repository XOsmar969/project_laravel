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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            //tambahkan kolom untuk name.grade,email,address sesuai dengan data array kalian
            $table->string('name');         // nama siswa
            $table->string('date');         // nama date
            $table->integer('classroom_id');        // kelas/tingkat (disimpan sebagai string)
            $table->string('email')->unique(); // email, unik biar tidak ganda
            $table->string('address');      // alamat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
