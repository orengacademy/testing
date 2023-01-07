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
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titleproject')->nullable();
            $table->string('client')->nullable();
            $table->string('projectcode')->nullable();
            $table->string('year')->nullable();
            $table->string('Engineers')->nullable();
            $table->string('PMO')->nullable();
            $table->string('scope')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('startdate')->nullable();
            $table->string('enddate')->nullable();
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
        Schema::dropIfExists('projects');
    }
};
