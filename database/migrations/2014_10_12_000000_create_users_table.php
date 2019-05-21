<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('email')->unique(); 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('slug')->nullable();
            $table->string('address')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('official_email')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('vimeo')->nullable();
            $table->string('googleplus')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('youtube')->nullable();
            $table->string('image')->nullable();
            $table->text('about')->nullable();
            $table->string('package_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('country_id')->nullable();
            $table->string('state_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('testimonials')->nullable();
            $table->string('show_testimonials')->default(false);
            $table->decimal('amount', 40, 2)->default(0);
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
