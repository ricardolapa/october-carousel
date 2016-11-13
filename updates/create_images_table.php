<?php namespace JuntaDigital\Carousel\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('juntadigital_carousel_images', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->boolean('headline_state')->default(false);
            $table->text('headline')->nullable();
            $table->boolean('baseline_state')->default(false);
            $table->text('baseline')->nullable();
            $table->boolean('call_to_action_state')->default(false);
            $table->text('call_to_action')->nullable();
            $table->text('action_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('juntadigital_carousel_images');
    }
}
