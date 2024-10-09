<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperheroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superheroes', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('real_name'); // Real name of the superhero
            $table->string('superhero_name'); // Name by which the superhero is known
            $table->string('photo_url'); // URL for the superhero's photo
            $table->text('additional_info')->nullable(); // Additional information about the superhero (optional)
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('superheroes');
    }
}
