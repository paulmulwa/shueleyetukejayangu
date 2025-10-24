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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();





            $table->string('toptext')->nullable();
            $table->string('photo')->nullable();
            $table->string('year')->nullable();
            $table->text('descp')->nullable();
            $table->text('descp1')->nullable();
            $table->text('descp2')->nullable();
            // $table->string('icon')->nullable();
            // $table->string('title')->nullable();
            // $table->text('descp3')->nullable();
            $table->string('tprof')->nullable()->comment('totalprofessionals');
            $table->string('tpsell')->nullable()->comment('totalpropertysell');
            $table->string('tprent')->nullable()->comment('totalpropertyrent');
            $table->string('tcust')->nullable()->comment('totalcustomers');




            $table->text('message')->nullable();
    

















            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
