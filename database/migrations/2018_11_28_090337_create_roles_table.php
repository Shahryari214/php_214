<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // // در این جدول نقش ها به همراه دسترسی هاشون تعیین میشه.
        // // در این جدول کاربر را تعیین می کنیم. مثلا کاربر ادمین ، یا کاربر کارمند، یا نویسنده و .... که به هر کدام دسترسی های لازم را می دهیم.
        // یک نقش می توانید مربوط به چند کاربر باشد. اما یک کربر فقط می تواندی یک نقش داشته باشد.
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rolename');
            $table->boolean('adduser');
            $table->boolean('deluser');
            $table->boolean('edituser');
            $table->boolean('updateuser');
            $table->boolean('addproduct');
            $table->boolean('showproduct');
            $table->boolean('delproduct');
            $table->boolean('editproduct');
            $table->boolean('updateproduct');
            $table->boolean('addorder');
            $table->boolean('delorder');
            $table->boolean('editorder');
            $table->boolean('updateorder');
            $table->boolean('showorder');
            $table->boolean('adddiscount');
            $table->boolean('deldiscount');
            $table->boolean('editdiscount');
            $table->boolean('updatediscount');
            $table->boolean('showdiscount');
            $table->boolean('addCategory');
            $table->boolean('delCategory');
            $table->boolean('editCategory');
            $table->boolean('updateCategory');
            $table->boolean('showCategory');
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
        Schema::dropIfExists('roles');
    }
}
