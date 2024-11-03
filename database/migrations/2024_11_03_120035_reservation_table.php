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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('countryOfResidence');
            $table->string('phoneNumber')->unique();
            $table->string('email')->unique();
            $table->date('dateReservation');
            $table->integer('numberNight');
            $table->string('numberOfAdults');
            $table->string('numberOfChilds');
            $table->string('howdiduknowaboutus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("reservations");
    }
};
