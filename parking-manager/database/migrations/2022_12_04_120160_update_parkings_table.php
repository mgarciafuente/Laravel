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
        Schema::table('parkings', function (Blueprint $table) {
            $table->unsignedBigInteger('userId')->nullable()->change();
            $table->foreign('userId')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade')->change();
            $table->renameColumn('userId', 'user_id');
        });
    }
};
