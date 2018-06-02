<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_people', function (Blueprint $table) {
            $table->increments('contact_people_id');
            $table->string('contact_people_firstname');
            $table->string('contact_people_lastname');
            $table->string('contact_people_email')->unique();
            $table->string('contact_people_phone');
            $table->string('contact_people_weachat_id')->nullable();
            // active_flag is used for identifying status of delete or not
            $table->tinyInteger('active_flag')->default(1);
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
        Schema::dropIfExists('contact_people');
    }
}
