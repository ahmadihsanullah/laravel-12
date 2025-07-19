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
        Schema::create('perusahaan_details', function (Blueprint $table) {
            $table->id();
            $table->string('founder');
            $table->string('address');
            $table->unsignedBigInteger('perusahaan_id');
            $table->timestamps();

            $table->foreign('perusahaan_id')->references('id')->on('perusahaans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan_details');
    }
};
