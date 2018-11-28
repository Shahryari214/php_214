<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // در این جدول ویژگی های محصولات مانند: فرمت محصول، سایز محصول، مدرنگی، ... قرار میگیرد. که مقدار این ویژگی ها در جدول value قرار میگیرد.
        Schema::create('attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('attributetitle');
            $table->boolean('active');
            $table->text('description'); 
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
        Schema::dropIfExists('attributes');
    }
}
