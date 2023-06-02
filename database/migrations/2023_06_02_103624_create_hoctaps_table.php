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
        Schema::create('hoctaps', function (Blueprint $table) {
            $table->id();
            $table->text('tinh_10_hk1');
            $table->text('tinh_10_hk2');
            $table->text('tinh_11_hk1');
            $table->text('tinh_11_hk2');
            $table->text('tinh_12_hk1');
            $table->text('tinh_12_hk2');
            $table->text('huyen_10_hk1');
            $table->text('huyen_10_hk2');
            $table->text('huyen_11_hk1');
            $table->text('huyen_11_hk2');
            $table->text('huyen_12_hk1');
            $table->text('huyen_12_hk2');
            $table->text('thpt_10_hk1');
            $table->text('thpt_10_hk2');
            $table->text('thpt_11_hk1');
            $table->text('thpt_11_hk2');
            $table->text('thpt_12_hk1');
            $table->text('thpt_12_hk2');
            $table->year('namtotnghiep');
            $table->string('dtuutien');
            $table->text('khuvucts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hoctaps');
    }
};
