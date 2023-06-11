<?php

namespace App\Orchid\Screens\AdsCategories;

use App\Models\AdsSubCategory;
use App\Orchid\Layouts\AdsCategories\SubCategoriesEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class SubCategoriesEditScreen extends Screen
{
    /**
     * Query data.
     * 
     *
     * @return array
     */

     public $adsSubCategory;

    public function query(AdsSubCategory $adsSubCategory): iterable
    {
        $this->adsSubCategory  = $adsSubCategory;
        return [
            "adsSubCategory" => $adsSubCategory
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
            Button::make("Save")
                ->icon("check")
                ->method("saveNewSubCat"),

            Button::make("Delete")
                ->icon("cross")
                ->canSee($this->adsSubCategory->exists)
                ->method("deleteSubCat")
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
            Layout::block(SubCategoriesEditLayout::class)
                ->title("Sub Category")

        ];
    }

    public function saveNewSubCat(AdsSubCategory $adsSubCategory, Request $request)
    {
        $sub_cat = $request->input("adsSubCategory.sub_category_name");
        $cat_id = $request->input("adsSubCategory.ads_category_id");

        $adsSubCategory::create([
            "ads_category_id" => $cat_id,
            "sub_category_name" => $sub_cat
        ]);

        Toast::info(__('Sub Category was saved.'));
        return redirect()->route('platform.ads.sub_categories.list');
    }


    public function deleteSubCat(AdsSubCategory $adsSubCategory, Request $request)
    {
        $adsSubCategory->delete($request->input("adsSubCategory"));
        Toast::warning(__('Sub Category was deleted.'));
        return redirect()->route('platform.ads.sub_categories.list');
    }
}
