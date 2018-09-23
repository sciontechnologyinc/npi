<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyinformation', function (Blueprint $table) {
            $table->increments('id');
            $table->text('missionstatement');
            $table->text('philosophy');
            $table->text('ourrole');
            $table->text('ourvalues');
            $table->text('address');
            $table->string('contactno');
            $table->string('email');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
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
        Schema::dropIfExists('companyinformation');
    }
}
