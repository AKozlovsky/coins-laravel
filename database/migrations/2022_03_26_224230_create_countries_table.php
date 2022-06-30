<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->char('code', 2)->unique();
            $table->char('continent_code', 2);
            $table->string('country_name', 255);
            $table->string('full_name', 255);
            $table->primary('code');
            $table->timestamps();
            $table->foreign('continent_code')->references('code')->on('continents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');

        Schema::table('countries', function (Blueprint $table) {
            $table->string('url');
        });
    }
}
