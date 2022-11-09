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
            $table->string('photo_url')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('dial_code')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('country')->nullable();
            $table->string('phone')->unique();
            $table->date('dob');
            $table->text('bio')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
