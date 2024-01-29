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
        Schema::create('engagements', function (Blueprint $table) {
            $table->id();
            $table->string('dispatch_number')->nullable();
            $table->string('address')->nullable();
            $table->string('unit')->nullable();
            $table->string('verticles')->nullable();
            $table->string('letter')->nullable();
            $table->string('memo')->nullable();
            $table->date('pstart_date')->nullable();
            $table->date('pend_date')->nullable();
            $table->date('estart_date')->nullable();
            $table->date('eend_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('engagements');
    }
};
