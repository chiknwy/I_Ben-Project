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
        Schema::create('titiks', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('coordinate');
            $table->text('longitude');
            $table->text('latitude');
>>>>>>> 950001015bc5af1ec870d8c195426de688afbb51
            $table->text('alamat');
            $table->string('image')->nullable();
            $table->string('pertalite');
            $table->string('pertamax');
            $table->string('pertamax_turbo');
            $table->string('solar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titik');
    }
};
