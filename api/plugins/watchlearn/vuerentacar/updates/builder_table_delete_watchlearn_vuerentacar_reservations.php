<?php namespace Watchlearn\Vuerentacar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteWatchlearnVuerentacarReservations extends Migration
{
    public function up()
    {
        Schema::dropIfExists('watchlearn_vuerentacar_reservations');
    }
    
    public function down()
    {
        Schema::create('watchlearn_vuerentacar_reservations', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->dateTime('pickup');
            $table->dateTime('dropoff');
            $table->integer('user_id');
            $table->integer('vehicle_id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
