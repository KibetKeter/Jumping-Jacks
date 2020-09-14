<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donor__accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('Individual')->default(true);
            $table->string('donor_name');
            $table->string('donor_location');
            $table->string('tel_no');
            $table->string('donor_email');
            $table->string('donor_product');
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
        Schema::dropIfExists('donor__accounts');
    }
}
