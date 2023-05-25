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
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text("description");
            $table->integer("price");
            $table->binary('image');
            $table->enum('status', array('unavailable', "available"))->default('unavailable');
            $table->bigInteger("Category_id")->unsigned()->nullable();
            $table->foreign("Category_id")->references("id")->on("Categories")->onDelete("cascade");
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
        Schema::dropIfExists('meals');
    }
};
