<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->string('budget');
            $table->string('duration');
            $table->string('allergies')->nullable();
            $table->boolean('meat_status')->default();
            $table->boolean('fish_status')->default();
            $table->timestamps();
            $table->foreign('users_id')
                        ->references('id')->on('users')
                        ->onUpdate('cascade')
						->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('preferences');
    }
}
