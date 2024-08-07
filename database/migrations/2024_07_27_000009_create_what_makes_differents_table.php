<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhatMakesDifferentsTable extends Migration
{
    public function up()
    {
        Schema::create('what_makes_differents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('lang_code');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
