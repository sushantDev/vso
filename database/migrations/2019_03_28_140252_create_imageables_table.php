<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageablesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('imageables', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->unsignedBigInteger('image_id');
      $table->integer('imageable_id')->unsigned()->nullable();
      $table->string('slug')->nullable();
      $table->string('imageable_type')->nullable();
      $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('imageables');
  }
}
