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
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->longtext('description');
            $table->date('datum');
            $table->time('startTime');
            $table->time('endTime');
            $table->decimal('cost', 15, 2);
            $table->boolean('food');
            $table->integer('maxPeople');
            $table->longText('imageUrl')->nullable();
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
        Schema::dropIfExists('activity');
    }
};
