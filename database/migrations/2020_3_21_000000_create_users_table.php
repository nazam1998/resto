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
            $table->string('fichier')->nullable();
            $table->string('photoTeam')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            
            $table->unsignedBigInteger('id_role');
            $table->foreign('id_role')->on('roles')->references('id')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('id_testimonial')->nullable();
            $table->foreign('id_testimonial')->on('testimonials')->references('id')->onDelete('set null')->onUpdate('cascade');
            
            
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
