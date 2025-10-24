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
        Schema::create('courasels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('textone')->nullable();
            $table->string('textwo')->nullable();
            $table->string('texthree')->nullable();
            $table->string('imageone')->nullable();
            $table->string('imagetwo')->nullable();
            $table->string('imagethree')->nullable();




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courasels');
    }
};
