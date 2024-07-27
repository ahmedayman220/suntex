<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('about_us_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('description');
            $table->string('ceo_name');
            $table->longText('ceo_description');
            $table->string('lang_code');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
