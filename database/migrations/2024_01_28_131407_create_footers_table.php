<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('links')->nullable();
            $table->string('home')->nullable();
            $table->string('aboutus')->nullable();
            $table->string('services')->nullable();
            $table->string('testinomial')->nullable();
            $table->string('partenrs')->nullable();
            $table->string('quicklinls')->nullable();
            $table->string('contact')->nullable();
            $table->string('faq')->nullable();
            $table->string('reachus')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('footers');
    }
}
