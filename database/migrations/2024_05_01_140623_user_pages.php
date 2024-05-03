<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {
         Schema::create('pages', function (Blueprint $table) {
             $table->id();
             $table->string('first_name');
             $table->string('last_name');
             $table->date('date_of_death');
             $table->string('middle_name')->nullable();
             $table->date('date_of_birth');
             $table->string('memorial_web_address');
             $table->string('page_type');
             $table->unsignedBigInteger('plan_id');
             $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
             $table->string('privacy_policy');
             $table->string('name_of_card');
             $table->string('credit_card');
             $table->decimal('total_amount', 8, 2);
             $table->string('name');
             $table->string('email');
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
        //
    }
}
