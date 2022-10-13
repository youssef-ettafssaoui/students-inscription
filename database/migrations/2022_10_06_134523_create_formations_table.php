<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('gerant_id');
            $table->string('image');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->text('texte');
            $table->string('type');
            $table->integer('status');
            $table->date('last_date');
            $table->date('masse_horraire');
            $table->integer('categorie_id');
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
        Schema::dropIfExists('formations');
    }
}