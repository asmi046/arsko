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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500)->comment('Заголовок новости');
            $table->string('slug', 500)->unique()->comment('Слаг для ссылки');
            $table->text('text')->comment('Текст новости');
            $table->string('img', 800)->nullable()->comment('Изображение новости');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
