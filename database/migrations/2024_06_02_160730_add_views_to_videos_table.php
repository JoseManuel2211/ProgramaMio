<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddViewsToVideosTable extends Migration
{
    public function up()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->unsignedBigInteger('views')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->dropColumn('views');
        });
    }
    
}

