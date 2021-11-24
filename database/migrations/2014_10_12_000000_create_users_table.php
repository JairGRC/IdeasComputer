<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name',255);
            $table->string('email',100)->unique();
            $table->string('phone',9)->nullable();
            $table->enum('profile',['ADMIN','EMPLOYEE'])->default('ADMIN');
            $table->enum('status',['ACTIVATE','LOCKED'])->default('ACTIVATE');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',50);
            $table->string('image',50)->nullable();
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
        Schema::dropIfExists('users');
    }
}