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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->text('img_bath')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gender'); // مؤثتا سترينغ
            $table->date('birth_date');
            $table->string('Specialises')->nullable(); // مؤقتا سترينغ
            $table->longText('Experience')->nullable();
            $table->unsignedFloat('min')->nullable();
            $table->unsignedFloat('max')->nullable();
            $table->unsignedFloat('rate')->nullable();
            $table->dateTime('times')->nullable();

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
        Schema::dropIfExists('people');
    }
};
