<?php

namespace App\Orchid\Screens\AdsCategories;

use App\Models\AdsCategory;
use App\Orchid\Layouts\AdsCategories\CategoriesListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layout;
use Orchid\Screen\Screen;

class CategoriesListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(): iterable
    {
        $categories = AdsCategory::fetchAllCategoties();
        return [
            "categories"=>$categories
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Categories List';
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
            ->route("platform.ads.categories.edit"),
            Link::make("Sub Categories")
            ->icon("table")
            ->route("platform.ads.sub_categories.list"),
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
            CategoriesListLayout::class
        ];
    }
}
