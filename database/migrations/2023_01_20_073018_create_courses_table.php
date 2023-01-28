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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('desctiprions')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->longText('outcomes');
            $table->smallInteger('category_id');
            $table->longText('requirements')->nullable();
            $table->double('price', 22, 2)->nullable();
            $table->double('discount', 22, 2)->nullable();
            $table->integer('user_id');
            $table->string('overview')->nullable();
            $table->integer('status');
            $table->integer('is_free')->nullable();
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
        Schema::dropIfExists('courses');
    }
};
