<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->string('thumb', 300);
            $table->smallinteger('price');
            $table->string('series', 100);
            $table->string('sale_date', 20);
            $table->string('type', 20);
            $table->string('artists', 100);
            $table->string('writers', 100);
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
        Schema::dropIfExists('comic');
    }
};
