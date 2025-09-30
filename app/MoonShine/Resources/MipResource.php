<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Mip;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Position;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Mip>
 */
class MipResource extends ModelResource
{
    protected string $model = Mip::class;

    protected string $title = 'Участки МИП';
    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Название проекта', 'title'),
            Image::make('Обложка', 'cover'),
            Text::make('Кадастровый номер', 'cadastral_number'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Text::make('Название проекта', 'title'),
            Text::make('Слаг для ссылки', 'slug'),
            Image::make('Обложка', 'cover'),
            Image::make('Главное изображение', 'head_img'),
            Image::make('Карта', 'map'),
            Text::make('Геопозиция', 'geo'),
            TinyMce::make('Описание проекта', 'description'),
            Text::make('Презентация проекта', 'presentation'),
            Text::make('Кадастровый номер', 'cadastral_number'),
            Text::make('Адрес', 'address'),
            Number::make('Площадь участка', 'area'),
            Number::make('Градостроительный потенциал', 'urban_potential'),
            Text::make('Допустимая этажность', 'max_floors'),
            Number::make('Процент застройки', 'build_percent'),
            Text::make('Собственность', 'ownership'),
            Text::make('Категория земель', 'land_category'),
            Text::make('Функциональная зона', 'functional_zone'),
            TinyMce::make('Вид использования', 'usage_type'),
            TinyMce::make('Особые условия использования', 'special_usage'),
            Text::make('Обременение', 'encumbrance'),
            Json::make('Галерея', 'gallery')->fields([
                Position::make(),
                Image::make('Изображение', 'img'),
                Text::make('Заголовок', 'title'),
            ])->removable(),
            Json::make('Социальная инфраструктура', 'social_infrastructure')->fields([
                Position::make(),
                Text::make('Параметры', 'title'),
            ])->removable(),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            Text::make('Название проекта', 'title'),
            Text::make('Слаг для ссылки', 'slug'),
            Image::make('Обложка', 'cover'),
            Image::make('Главное изображение', 'head_img'),
            Image::make('Карта', 'map'),
            Text::make('Геопозиция', 'geo'),
            TinyMce::make('Описание проекта', 'description'),
            Text::make('Презентация проекта', 'presentation'),
            Text::make('Кадастровый номер', 'cadastral_number'),
            Text::make('Адрес', 'address'),
            Number::make('Площадь участка', 'area'),
            Number::make('Градостроительный потенциал', 'urban_potential'),
            Text::make('Допустимая этажность', 'max_floors'),
            Number::make('Процент застройки', 'build_percent'),
            Text::make('Собственность', 'ownership'),
            Text::make('Категория земель', 'land_category'),
            Text::make('Функциональная зона', 'functional_zone'),
            TinyMce::make('Вид использования', 'usage_type'),
            TinyMce::make('Особые условия использования', 'special_usage'),
            Text::make('Обременение', 'encumbrance'),
            Json::make('Галерея', 'gallery')->fields([
                Position::make(),
                Image::make('Изображение', 'img'),
                Text::make('Заголовок', 'title'),
            ])->removable(),
            Json::make('Социальная инфраструктура', 'social_infrastructure')->fields([
                Position::make(),
                Text::make('Параметры', 'title'),
            ])->removable(),
        ];
    }

    /**
     * @param Mip $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'cover' => ['required', 'string', 'max:255'],
            'cadastral_number' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'area' => ['required', 'numeric'],
            'urban_potential' => ['required', 'integer'],
            'max_floors' => ['required', 'string', 'max:255'],
            'build_percent' => ['required', 'integer'],
            'ownership' => ['required', 'string', 'max:255'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            Text::make('Название проекта', 'title'),
            TinyMce::make('Описание проекта', 'description'),
            Text::make('Кадастровый номер', 'cadastral_number'),
        ];
    }
}
