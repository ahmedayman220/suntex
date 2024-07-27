<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('facebook_link')->nullable();
            $table->string('instegram_link')->nullable();
            $table->string('snapchat_link')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('top_bar_content_header')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
