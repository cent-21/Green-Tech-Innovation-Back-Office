<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReazisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reazisations', function (Blueprint $table) {
            $table->increments("reazisationId");
            $table->tinyInteger("status")->default(1);
            $table->string("reazisationName");
            $table->string("reazisationLink")->nullable();
            $table->text("reazisationDetail");
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
        Schema::dropIfExists('reazisations');
    }
}
