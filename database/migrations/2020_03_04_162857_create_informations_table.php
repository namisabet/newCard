<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('titre')->nullable();
			$table->string('name',100)->nullable();
			$table->string('ville',50)->nullable();
			$table->string('telephone',50)->nullable();
			$table->string('description',500)->nullable();
			$table->string('budget',50)->nullable();
			$table->string('expertise',9999)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}
