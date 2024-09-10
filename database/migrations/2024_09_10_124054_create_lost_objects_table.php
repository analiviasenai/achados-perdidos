<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
      Schema::create('lost_objects',function
      (Blueprint $table){
    $table->id();
    $table->string('name');
    $table->text('description');
    $table->string('location');
    $table->date('lost_date');
    $table->timestamps();
      });  
    }
   
};