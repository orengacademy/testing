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
                $table->bigIncrements('id');
                $table->string('titleproject');
                $table->string('client');
                $table->string('PMO');
                $table->string('Engineers');
                $table->date('startdate');
                $table->date('enddate');
                $table->date('scope');
                $table->date('type');
                $table->timestamps();
                // $table->decimal('value', 8, 2);
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
