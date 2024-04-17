<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('identification')->unique();
            $table->text('image')->nullable();
            $table->string('name');
            $table->string('first_last_name');
            $table->string('second_last_name');
            $table->string('gender');
            $table->String('phone')->unique()->nullable();
            $table->String('emergency_phone')->nullable();
            $table->string('address')->nullable();
            $table->string('diseases')->nullable();
            $table->string('email')->unique();
            $table->date('date_of_admission')->nullable();
            $table->double('salary')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('employees');
    }
}
