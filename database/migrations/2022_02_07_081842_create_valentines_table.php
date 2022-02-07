<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateValentinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valentines', function (Blueprint $table) {
            $table->id();
            $table->string('cupid_name', 50);
            $table->text('content');
            $table->string('email', 80)->nullable();
            $table->ipAddress('cupid');
            $table->string('valentine_token', 100);
            $table->ipAddress('lover')->nullable();
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
        Schema::dropIfExists('valentines');
    }
}
