<?php

namespace App\Orchid\Layouts\AdsCategories;

use App\Models\AdsSubCategory;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SubCategoriesListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'sub_categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make("sub_category_name","Sub Category")
            ->sort()
            ->cantHide()
            ->filter(Input::make())
            ->render(function (AdsSubCategory $adsSubCategory) {

                return Link::make($adsSubCategory->sub_category_name)
                    ->route("platform.ads.sub_categories.edit", $adsSubCategory->id);
            }),
        ];
    }
}
