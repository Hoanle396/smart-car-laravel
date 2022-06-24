<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->text('images');
            $table->string('name_vi');
            $table->text('description_vi');
            $table->string('name_en');
            $table->text('description_en');
            $table->string('name_jp');
            $table->text('description_jp');
            $table->string('name_ko');
            $table->text('description_ko');
            $table->string('name_cn');
            $table->text('description_cn');
            $table->string('name_pt');
            $table->text('description_pt');
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
        Schema::dropIfExists('news');
    }
}
