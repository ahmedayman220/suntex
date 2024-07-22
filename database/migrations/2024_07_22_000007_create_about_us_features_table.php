<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsFeaturesTable extends Migration
{
    public function up()
    {
        Schema::create('about_us_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description');
            $table->string('lang_code');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
