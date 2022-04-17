<?php

use App\Models\Language;
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
        Schema::create('words', function (Blueprint $table) {
            $table->id('word_id')->autoIncrement();
            $table->text('word')->nullable(false);
            $table->foreignId('language_id')->nullable(false);
            $table->json('grammar')->nullable(true);
            $table->json('affixes')->nullable(true);
            $table->text('stem')->nullable()->default(null);
            $table->foreignId('lemma')->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->text('description_full')->nullable()->default(null);
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
        Schema::dropIfExists('words');
    }
};
