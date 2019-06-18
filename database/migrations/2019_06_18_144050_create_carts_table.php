<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->text('description');
          $table->decimal('price',6,2);
          $table->string('featured_img');
          $table->integer('cant')->nullable();
          $table->bigInteger('user_id');
          $table->integer('status')->default(0);
          $table->integer('cart_number')->nullable();       
          $table->timestamps();
          $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
