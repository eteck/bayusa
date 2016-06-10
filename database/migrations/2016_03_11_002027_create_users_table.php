<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100);
            $table->string('last_name',100);
            $table->string('email')->unique();
            $table->string('username',50)->unique();
            $table->string('password', 60);
            //$table->enum('type',['admin','supervisor','user']);
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')
                  ->on('roles');
            $table->boolean('active');
            $table->text('address');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
