<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->dateTime('created_at');
            $table->dateTime('updated_at')->nullable();
            $table->dateTime('deleted_at')->nullable();
            $table->string('country');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('state');
            $table->string('city');
            $table->string('zone');
            $table->string('zip_code');
            $table->float('lat', 5, 5)->default(24.55500);
            $table->float('lng', 5, 5)->default(24.55500);
            $table->string('type');
            $table->bigInteger("added_by")->unsigned();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
