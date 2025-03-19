<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('contents');
    }
};
