<?php

declare(strict_types=1);

namespace App\Orchid\Layouts\AdsCategories;

use App\Models\AdsCategory;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Persona;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CategoriesListLayout extends Table
{
    /**
     * @var string
     */
    public $target = 'categories';

    /**
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make("category_name", "Category Name")
                ->render(function (AdsCategory $adsCategory) {

                    return Link::make($adsCategory->category_name)
                        ->route("platform.ads.categories.edit", $adsCategory->id);
                }),

        ];
    }
}
