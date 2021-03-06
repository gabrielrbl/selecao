<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneroTable extends Migration {
    public function up() {
        Schema::create('genero', function (Blueprint $table) {
            $table->id();
            $table->string('genero')->unique();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('genero');
    }
}
