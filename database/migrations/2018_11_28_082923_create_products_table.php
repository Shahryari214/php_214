<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //اصلاعات محصول دالودی در این جدول قرار میگیرد.
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');//عنوان محصول
            $table->longText('content');// توضیحات محصل
            $table->integer('price');//قیمت محصول
            $table->string('size');// حجم فایل دانلودی
            $table->string('IDproduct');//شناسه محصول
            $table->integer('numvisit');//تعداد بازدید محول
            $table->integer('numbuy');// تعداد خرید محصول
            $table->timestamp('insertdate');// تاریخ درج محصول
            $table->string('image');
            $table->integer('subcategory_id');
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
        Schema::dropIfExists('products');
    }
}
