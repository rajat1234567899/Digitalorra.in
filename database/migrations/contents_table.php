<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('section')->unique(); // Example: 'home', 'about', 'contact'
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('contents');
    }
};
