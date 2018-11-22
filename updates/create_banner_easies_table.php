<?php namespace Electrica\BannerEasy\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBannerEasiesTable extends Migration
{
    public function up()
    {
        Schema::create('electrica_bannereasy_banner_easies', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('description');
            $table->string('images');
            $table->timestamp('date_from');
            $table->timestamp('date_to');
            $table->integer('category');
            $table->boolean('active');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('electrica_bannereasy_banner_easies');
    }
}
