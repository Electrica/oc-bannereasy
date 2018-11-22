<?php namespace Electrica\BannerEasy\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateBannerEasyCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('electrica_bannereasy_banner_easy_categories', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('electrica_bannereasy_banner_easy_categories');
    }
}
