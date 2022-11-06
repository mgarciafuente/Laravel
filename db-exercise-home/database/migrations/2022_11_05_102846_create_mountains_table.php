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
        Schema::create('mountains', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // ('name', length)
            // $table->string('email')->unique();
            $table->integer('height'); // $table->decimal('height', 6, 2); (ex) 8848.86
            $table->boolean('belongsToRange');
            $table->dateTime('firstClimbDate'); // ->nullable();
            $table->enum('continent', ['Afrika', 'Asia', 'Europe', 'America', 'Oceania']);
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
        Schema::dropIfExists('mountains');
    }
};
