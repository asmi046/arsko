<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\News;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\TinyMce\Fields\TinyMce;

/**
 * @extends ModelResource<News>
 */
class NewsResource extends ModelResource
{
    protected string $model = News::class;

    protected string $title = 'Новости';
    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Заголовок новости', 'title'),
            Image::make('Изображение новости', 'img'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Text::make('Заголовок новости', 'title'),
            Text::make('Слаг для ссылки', 'slug'),
            TinyMce::make('Текст новости', 'text'),
            Image::make('Изображение новости', 'img'),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            Text::make('Заголовок новости', 'title'),
            Text::make('Слаг для ссылки', 'slug'),
            TinyMce::make('Текст новости', 'text'),
            Image::make('Изображение новости', 'img'),
        ];
    }

    /**
     * @param News $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'text' => ['required', 'string'],
            'img' => ['required', 'string', 'max:255'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            \MoonShine\UI\Fields\Text::make('Заголовок новости', 'title'),
            \MoonShine\UI\Fields\Text::make('Текст новости', 'text'),
        ];
    }
}
