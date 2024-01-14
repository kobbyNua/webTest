<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('farmers', function (Blueprint $table) {
           // $table->id();
            //$table->timestamps();
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birth_place');
            $table->string('gender');
            $table->string('house_number');
            $table->string('occupation');
            $table->string('region');
            $table->string('dob');
            $table->string('community');
            $table->string('district');
            $table->string('marital_statu');
            $table->mediumText('bio');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmers');
    }
};
