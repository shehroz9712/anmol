<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_queries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('title');
            $table->string('phone_number');
            $table->string('yourtitle');
            $table->string('companyname');
            $table->string('size_of_company');
            $table->string('industry');
            $table->string('management');
            $table->string('practice');
            $table->string('business_address');
            $table->string('management_system');
            $table->string('support');
            $table->unsignedTinyInteger('is_active')->default(0);
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
        Schema::dropIfExists('request_queries');
    }
}
