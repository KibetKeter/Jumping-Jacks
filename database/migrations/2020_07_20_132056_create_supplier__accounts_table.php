<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier__accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('supplier_name');
            $table->string('item_ordered');
            $table->string('quantity');
            $table->integer('amount');
            $table->boolean('notDelivered')->default(true); 
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
        Schema::dropIfExists('supplier__accounts');
    }
}
