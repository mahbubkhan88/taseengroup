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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('telephone');
            $table->string('fax');
            $table->string('phone_one');
            $table->string('phone_two');
            $table->string('email_address');
            $table->string('corporate_office');
            $table->string('registered_office');
            $table->string('facebook_link');
            $table->string('linkedin_link');
            $table->string('youtube_link');
            $table->string('instagram_link');
            $table->string('footer_copyright');
            $table->longText('description');
            $table->string('logo');
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
        Schema::dropIfExists('settings');
    }
};