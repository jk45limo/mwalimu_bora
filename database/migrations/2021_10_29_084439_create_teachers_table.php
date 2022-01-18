<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->integer('phone_number')->unique();
            $table->string('country');
            $table->string('county');
            $table->string('gender');
            $table->longText('address');
            $table->string('profession');
            $table->string('uploaded_cv');
            $table->string('primary_school')->nullable();
            $table->string('secondary_school')->nullable();
            $table->string('university')->nullable();
            $table->string('subject_combination')->nullable();
            $table->string('teaching_level')->nullable();
            $table->string('primary_subject')->nullable();
            $table->string('other_subject')->nullable();
            $table->string('classes_teaching')->nullable();
            $table->longText('professional_summary')->nullable();
            $table->string('designation_code')->nullable();
            $table->string('tsc_number')->nullable();
            $table->string('other_associations')->nullable();
            $table->string('kra_pin')->nullable();
            $table->string('referral_code')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('teachers');
    }
}
