<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBotConfigsTable extends Migration
{
    public function up()
    {
        Schema::create('bot_configs', function (Blueprint $table) {
            $table->id();
            $table->string('domain')->unique();
            $table->string('bot_token');
            $table->string('chat_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bot_configs');
    }
}
