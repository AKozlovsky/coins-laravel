<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->char('continent', 2);
            $table->char('country', 2);
            $table->bigInteger('item');
            $table->timestamps();
            $table->foreign('continent')->references('code')->on('continents');
            $table->foreign('country')->references('code')->on('countries');
            $table->foreign('item')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collections');
    }
}
