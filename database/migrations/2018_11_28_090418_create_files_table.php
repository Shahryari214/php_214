<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //در این جدول مسیر فایل دانلودی قرار میگیرد. هر محصولی فقط یک فایل برای دانلود دارد.
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('path');
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
        Schema::dropIfExists('files');
    }
}
