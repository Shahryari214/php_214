<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // در این جدول مقدار ویژگی ها قرار میگیزد. مثلا attribute با عنوان سایز value با عنوان a4,a5,a6, .... دارد.
        Schema::create('values', function (Blueprint $table) {
            $table->increments('id');
            $table->string('valuetitle');
            $table->integer('attribute_id');
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
        Schema::dropIfExists('values');
    }
}
