<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\AdsCategories;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class CategoriesEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('adsCategory.category_name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Enter Category'))
                ->placeholder(__('Category Name')),

            Input::make('adsCategory.image')
                ->type('file')
                ->title(__('Image(optional)'))
                ->placeholder(__('Select Image')),
        ];
    }
}
