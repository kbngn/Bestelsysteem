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
        Schema::create('werkorders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_nummer');
            $table->string('omschrijving');
            $table->string('status')->nullable();
            $table->string('sub_gb_inactief')->nullable();
            $table->string('cat2')->nullable();
            $table->string('opmerking_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('werkorders');
    }
};
