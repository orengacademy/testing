<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->string('residentstatus')->nullable();
            $table->string('typeofresident')->nullable();
            $table->string('nationality')->nullable();
            $table->string('maritalstatus')->nullable();
            $table->string('personalemail')->nullable();
            $table->string('streetaddress')->nullable();
            $table->string('mobilephone')->nullable();
            $table->string('emergencycontactname')->nullable();
            $table->string('emergencycontactno')->nullable();
            $table->string('joindate')->nullable();
            $table->string('position')->nullable();
            $table->string('ic')->nullable();
            $table->string('dob')->nullable();
            $table->string('race')->nullable();
            $table->string('disabilitystatus')->nullable();
            $table->string('children')->nullable();
            $table->string('state')->nullable();
            $table->string('postcode')->nullable();
            $table->string('city')->nullable();
            $table->string('paymentmethod')->nullable();
            $table->string('bankname')->nullable();
            $table->string('bankaccount')->nullable();
            $table->string('earningfreq')->nullable();
            $table->string('location')->nullable();
            $table->string('epf')->nullable();
            $table->string('ssfwnumber')->nullable();
            $table->string('socsocategory')->nullable();
            $table->string('pcbnumber')->nullable();
            $table->string('role')->nullable();
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
};
