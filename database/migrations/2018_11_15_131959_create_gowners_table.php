<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGownersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gowners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',100)->unique();
            $table->string('password');
            $table->text('overview')->nullable();
            $table->string('ratingPoint')->nullable();
            $table->string('imagePath')->nullable();
            $table->string('portfolio')->nullable();
            $table->integer('categoryId')->nullable();
            $table->string('certificationOne')->nullable();
            $table->string('certificationTwo')->nullable();
            $table->string('certificationThree')->nullable();
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('workQuality')->nullable();
            $table->string('activationStatus');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gowners');
    }
}
