<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Partners;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Partners>
 */
class PartnersResource extends ModelResource
{
    protected string $model = Partners::class;

    protected string $title = 'Партнеры';
    protected string $column = 'name';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            Text::make('Наименование партнера', 'name'),
            Image::make('Логотип партнера', 'logo')->dir(''),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Text::make('Наименование партнера', 'name'),
            Image::make('Логотип партнера', 'logo')->dir(''),
            Number::make('Порядок вывода', 'sort_order'),
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            Text::make('Наименование партнера', 'name'),
            Image::make('Логотип партнера', 'logo')->dir(''),
            Number::make('Порядок вывода', 'sort_order'),
        ];
    }

    /**
     * @param Partners $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'string', 'max:255'],
            'sort_order' => ['required', 'integer'],
        ];
    }

    protected function filters(): iterable
    {
        return [
            \MoonShine\UI\Fields\Text::make('Наименование партнера', 'name'),
        ];
    }
}
