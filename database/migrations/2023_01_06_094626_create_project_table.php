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
        $table->Increments('id');
        $table->string('titleproject')->nullable();;
        $table->string('projectcode')->nullable();;
        $table->string('client')->nullable();;
        $table->string('PMO')->nullable();;
        $table->string('Engineers')->nullable();;
        $table->date('startdate')->nullable();;
        $table->date('enddate')->nullable();;
        $table->string('scope')->nullable();;
        $table->string('type')->nullable();;
        $table->string('status')->nullable();;
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
