<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('member_type')->nullable();
            $table->string('company')->nullable();
            $table->unsignedBigInteger('country_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('title')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->integer('phonecode')->nullable();
            $table->string('phone')->nullable();
            $table->string('password')->nullable();
            $table->timestamps();

        //     $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null');
        //     $table->foreign('state_id')->references('id')->on('states')->onDelete('set null');
        // 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
