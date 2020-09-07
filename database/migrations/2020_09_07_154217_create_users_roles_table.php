<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_roles', function (Blueprint $table) {
               $table->unsignedBigInteger('userId');
               $table->unsignedBigInteger('roleId');
               $table->timestamps();

               //FOREIGN KEY CONSTRAINTS
               $table->foreign('userId')->references('id')->on('users')->onDelete('cascade');
               $table->foreign('roleId')->references('id')->on('roles')->onDelete('cascade');

               //SETTING THE PRIMARY KEYS
              $table->primary(['userId','roleId']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_roles');
    }
}
