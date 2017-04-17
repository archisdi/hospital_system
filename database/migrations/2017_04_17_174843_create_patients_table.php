<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('gender',['male','female']);
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('occupation');
            $table->boolean('marital_status');
            $table->string('address');
            $table->enum('blood_type',['A','B','O','AB']);
            $table->bigInteger('id_card_number');
            $table->string('parent_name');
            $table->string('n_families');
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
        Schema::dropIfExists('patients');
    }
}
