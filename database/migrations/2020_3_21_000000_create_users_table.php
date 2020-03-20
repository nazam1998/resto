<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')->on('roles')->references('id')->onDelete('cascade')->onUpdate('cascade');


            $table->unsignedBigInteger('id_poste')->nullable();
            $table->foreign('id_poste')->on('postes')->references('id')->onDelete('cascade')->onUpdate('cascade');
            
            
            $table->unsignedBigInteger('id_comment')->nullable();
            $table->foreign('id_comment')->on('comments')->references('id')->onDelete('cascade')->onUpdate('cascade');
            
            
            $table->unsignedBigInteger('id_testimonial')->nullable();
            $table->foreign('id_testimonial')->on('testimonials')->references('id')->onDelete('cascade')->onUpdate('cascade');
            
            
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
        Schema::dropIfExists('users');
    }
}
