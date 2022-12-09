<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parks', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('division_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('address');
            $table->string('email')->nullable()->unique();
            $table->string('phone')->nullable();
            $table->string('image')->nullable();
            $table->string('photo')->nullable();
            $table->string('picture')->nullable();


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
        Schema::dropIfExists('parks');
    }
}
