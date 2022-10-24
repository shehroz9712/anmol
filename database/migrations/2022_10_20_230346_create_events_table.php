<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name', 64)->nullable();
            $table->string('event_type', 32)->nullable();
            $table->date('event_date')->nullable();
            $table->string('occation')->nullable();
            $table->integer('guest')->nullable();
            $table->time('from')->nullable();
            $table->time('to')->nullable();
            $table->string('venue_name', 64)->nullable();
            $table->string('address')->nullable();
            $table->string('venue_type')->nullable();
            $table->string('contact_email', 128)->nullable();
            $table->string('contact_name', 64)->nullable();
            $table->string('contact_phone', 32)->nullable();
            $table->integer('package_id')->nullable();
            $table->text('description')->nullable();
            $table->string('appitizer_type')->nullable();
            $table->time('appitizer_start')->nullable();
            $table->time('appitizer_end')->nullable();
            $table->integer('appitizer_station')->nullable();
            $table->string('maincource_type')->nullable();
            $table->time('maincource_start')->nullable();
            $table->time('maincource_end')->nullable();
            $table->integer('maincource_station')->nullable();
            $table->string('desert_type')->nullable();
            $table->time('desert_start')->nullable();
            $table->time('desert_end')->nullable();
            $table->integer('desert_station')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('events');
    }
}
