<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Booking;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('firstName', 15)->nullable(false);
            $table->string('SurName', 15)->nullable(false);
            $table->string('address', 150)->nullable(false);
            $table->date("date")->nullable(false);
            $table->time("time")->nullable(false);
            $table->string("phone",20)->nullable(false);
            $table->string("Comment", "300")->nullable(true);
            $table->string("Mservice", "50")->nullable(false);
            $table->multiLineString("Fservice")->nullable(true);
            $table->boolean("Approved")->default(null)->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
