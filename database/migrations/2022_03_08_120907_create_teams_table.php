<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments("teamId");
            $table->string("teamName");
            $table->string("teamImage");
            $table->string("teamDetail")->nullable();
            $table->string("teamPost");
            $table->string("teamTel")->nullable();
            $table->string("teamMail")->nullable();
            $table->integer("directionId");
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
        Schema::dropIfExists('teams');
    }
}
