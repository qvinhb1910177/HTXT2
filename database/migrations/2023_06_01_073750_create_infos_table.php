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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            $table->string('hoten');
            $table->boolean('gioitinh');
            $table->date('ngaysinh');
            $table->text('noisinh');
            $table->text('dantoc');
            $table->integer('cccd');
            $table->string('email');
            $table->integer('sdt');
            $table->text('diachi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
