<?php

namespace App\Orchid\Layouts\AdsCategories;

use App\Models\AdsCategory;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class SubCategoriesEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        $categories = AdsCategory::fetchAllCategoties();
        $categories_arr = [];
        foreach ($categories as $cat) {
            $categories_arr[$cat->id] = $cat->category_name;
        }
        return [
            Input::make("adsSubCategory.sub_category_name")
                ->type("text")
                ->max(255)
                ->title(__('Enter Sub Category'))
                ->required()
                ->placeholder(__('Sub Category Name')),

            Select::make('adsSubCategory.ads_category_id')
                ->title('Select Category')
                ->options($categories_arr)
                ->required()
                ->value($cat['adsSubCategory.ads_category_id']),

            // Input::make('adsSubCategory.image')
            //     ->type('file')
            //     ->title(__('Image(optional)'))
            //     ->placeholder(__('Select Image')),
        ];
    }
}
