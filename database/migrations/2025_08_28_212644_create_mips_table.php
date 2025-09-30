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
        Schema::create('mips', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('Название проекта');
            $table->string('slug')->unique()->comment('Слаг для ссылки');
            $table->string('cover')->comment('Обложка');
            $table->string('head_img')->nullable()->comment('Главное изображение');
            $table->string('map')->nullable()->comment('Карта');
            $table->string('geo')->nullable()->comment('Геопозиция');
            $table->text('description')->nullable()->comment('Описание проекта');
            $table->string('presentation')->nullable()->comment('Презентация проекта');
            $table->string('cadastral_number')->comment('Кадастровый номер');
            $table->string('address')->comment('Адрес');
            $table->float('area')->comment('Площадь участка');
            $table->integer('urban_potential')->comment('Градостроительный потенциал');
            $table->string('max_floors')->comment('Допустимая этажность');
            $table->integer('build_percent')->comment('Процент застройки');
            $table->string('developer')->nullable()->comment('Застройщик');
            $table->string('develop_type')->nullable()->comment('тип застройки');
            $table->string('ownership')->comment('Собственность');
            $table->string('land_category')->nullable()->comment('Категория земель');
            $table->string('functional_zone')->nullable()->comment('Функциональная зона');
            $table->text('usage_type')->nullable()->comment('Вид использования');
            $table->text('special_usage')->nullable()->comment('Особые условия использования');
            $table->string('encumbrance')->nullable()->comment('Обременение');
            $table->json('gallery')->nullable()->comment('Галерея');
            $table->json('social_infrastructure')->nullable()->comment('Социальная инфраструктура');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mips');
    }
};
