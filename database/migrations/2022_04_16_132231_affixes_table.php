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
        Schema::create('affixes', function (Blueprint $table) {
            $table->id('affix_id')->autoIncrement();
            $table->text('affix')->nullable(false);
            $table->enum('position', ["pre", "post", "in", "circum"])->nullable(false)->default("post");
            $table->foreignId('language_id')->nullable(false);
            $table->json('grammar')->nullable(true)->default(null);
            $table->text('description')->nullable(true)->default(null);
            $table->text('description_full')->nullable(true)->default(null);
            $table->timestamps();

            $table->foreign('language_id')->references('language_id')->on('languages');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affixes');
    }
};
