<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('type', 50); //Vverfly; Landing
            $table->string('operator');
            $table->text('billing_add');
            $table->string('aircraft_reg');
            $table->string('call_sign');
            $table->string('trip_ref_no')->nullable();
            $table->string('aircraft_type');
            $table->decimal('max_weight');
            $table->string('max_weight_unit');
            $table->string('purpose');
            $table->string('goods_type');
            $table->string('notes')->nullable();
            $table->string('flight_rules');
            $table->string('sector')->nullable();
            $table->string('flight_level')->nullable();
            $table->decimal('crew_count');
            $table->decimal('pax_count');
            $table->string('depar_date');
            $table->string('arri_date');
            $table->string('etd_utc');
            $table->string('eta_utc');
            $table->string('aerodrome_of_departure');
            $table->string('aerodrome_of_estination');
            $table->string('fir_in');
            $table->string('fir_out');
            $table->string('status', 30);
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
        Schema::dropIfExists('requests');
    }
}
