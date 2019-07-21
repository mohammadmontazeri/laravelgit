<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->enum('type',["course","article"]);
            $table->string('image');
            $table->text('detail');
            $table->integer('price');
            $table->string('writer');
            $table->integer('episode');
            $table->string('summery','500');
            $table->integer('percentage');
            $table->string('before_knl','300');
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
        //
    }
}
