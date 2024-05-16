<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_accesses', function (Blueprint $table) {
            $table->id();
            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->string('honouree_email')->nullable();
            $table->string('honouree')->nullable();
            $table->string('legacyurl')->nullable();
            $table->string('relationship')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('request_accesses');
    }
}
