<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('fathersname');
            $table->date('dob');
            $table->string('gender');
            $table->string('language');
            $table->string('email');
            $table->string('pno');
            $table->string('state');
            $table->string('city');
            $table->string('address');
            $table->string('photourl');
            $table->string('artist_level');
            $table->string('creation_mode');
            $table->string('creation_mode_sub');
            $table->string('creation_video_url')->nullable();
            $table->string('name_inst')->nullable();
            $table->string('inst_address')->nullable();
            $table->string('adhaar')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('scheme')->nullable();
            $table->string('presenter')->nullable();

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
        Schema::dropIfExists('artist');
    }
}
