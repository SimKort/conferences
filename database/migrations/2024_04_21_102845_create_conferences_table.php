<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('date')->nullable(); // Add this line to define the 'date' column
            $table->string('address');
            $table->integer('participants');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}
