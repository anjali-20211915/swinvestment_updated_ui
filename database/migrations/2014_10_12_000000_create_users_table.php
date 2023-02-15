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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();

            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();

            $table->string('password')->nullable();
            $table->bigInteger('phoneex')->nullable();
            $table->string('country')->nullable();
            $table->string('stateofop')->nullable();

            $table->string('role')->nullable();
            $table->bigInteger('usercdrno')->nullable();
            $table->string('firmmail')->nullable();
            $table->string('firmurl')->nullable();
            $table->date('dob')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('firmcdrno')->nullable();
            $table->string('usertype')->nullable();
            $table->bigInteger('phoneno')->nullable();
            $table->string('acreditistatus')->nullable();






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
        
        Schema::dropIfExists('users');
            }
};
