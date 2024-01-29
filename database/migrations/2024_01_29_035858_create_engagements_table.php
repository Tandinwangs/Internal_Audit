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
            $table->string('dispatch_number');
            $table->string('address');
            $table->string('unit');
            $table->string('verticles');
            $table->string('letter');
            $table->string('memo');
            $table->date('pstart_date');
            $table->date('pend_date');
            $table->date('estart_date');
            $table->date('eend_date');
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
