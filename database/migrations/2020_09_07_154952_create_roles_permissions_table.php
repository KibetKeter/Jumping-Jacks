<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_permissions', function (Blueprint $table) {
          $table->unsignedBigInteger('roleId');
          $table->unsignedBigInteger('permissionId');
          $table->timestamps();

          //FOREIGN KEY CONSTRAINTS
          $table->foreign('roleId')->references('id')->on('roles')->onDelete('cascade');
          $table->foreign('permissionId')->references('id')->on('permissions')->onDelete('cascade');

          //SETTING THE PRIMARY KEYS
         $table->primary(['roleId','permissionId']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_permissions');
    }
}
