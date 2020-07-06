<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newstbls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('heading');
            $table->string('description');
            $table->string('image');
            $table->string('video');
            $table->longText('audio');
            $table->integer('is_active');
            $table->integer('cid')->unsigned();
            $table->foreign('cid')->references('id')->on('scategories');
            $table->timestamps();
            $table->longText('Details');
            $table->longText('extraDetails');
            $table->string('heading2');
            $table->string('heading3');
            $table->longText('twitEmd');
            $table->longText('FbEmd');
            $table->longText('YoutubeEmd');
            $table->longText('InstaEmd');
            $table->longText('para_4');
            $table->longText('para_5');
            $table->longText('para_6');
            $table->longText('para_7');
            $table->longText('heading4');
            $table->longText('heading5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('newstbls');
    }
}
