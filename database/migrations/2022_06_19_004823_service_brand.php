<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ServiceBrand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services_brands', function (Blueprint $table) {
            $table->id();
            $table->text('images');
            $table->string('name_vi');
            $table->string('name_en');
            $table->string('name_jp');
            $table->string('name_ko');
            $table->string('name_cn');
            $table->string('name_pt');
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
        Schema::dropIfExists('services_brands');
    }
}
