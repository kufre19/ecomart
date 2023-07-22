<?php

namespace App\Orchid\Screens\AdsCategories;

use App\Models\AdsSubCategory;
use App\Orchid\Layouts\AdsCategories\SubCategoriesListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layout;
use Orchid\Screen\Screen;

class SubCategoriesListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $sub_cat = AdsSubCategory::fetchAllSubCat();
        return [
            "sub_categories"=>$sub_cat,
            "sub_category"=>"",
            "category"=>""
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Sub Categories';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make("Add")
            ->icon("plus")
            ->route("platform.ads.sub_categories.edit"),
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            SubCategoriesListLayout::class
        ];
    }
}
