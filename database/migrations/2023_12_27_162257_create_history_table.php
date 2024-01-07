<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('full_name');
            $table->integer('phone');
            $table->date('date');
            $table->time('time');
            $table->text('report');
            $table->string('email');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('history');
    }
};
