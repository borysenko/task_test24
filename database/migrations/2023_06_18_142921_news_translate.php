<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('news_translates', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('news_id')->unsigned();
            $table->foreign('news_id')
                ->references('id')
                ->on('news')
                ->onDelete('cascade');
            $table->string('lang', 2);
            $table->index(['news_id', 'lang']);
            $table->string('name');
            $table->text('body');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
