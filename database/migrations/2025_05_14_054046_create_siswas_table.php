<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration {
    public function up(): void {
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nis')->unique();
            $table->enum('gender', ['L', 'P']);
            $table->string('alamat');
            $table->string('kontak');
            $table->string('email')->unique();
            $table->boolean('status_pkl')->default(false);
            $table->timestamps();
        });
    }


    public function down(): void {
        Schema::dropIfExists('siswa');
    }
};
