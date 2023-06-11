<?php

namespace App\Orchid\Screens\AdsCategories;

use App\Models\AdsCategory;
use App\Orchid\Layouts\AdsCategories\CategoriesEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CategoriesEdit extends Screen
{

    public $adsCategory;
    /**
     * Query data.
     *
     * @return array
     */
    public function query(AdsCategory $adsCategory, Request $request): iterable
    {
        // $adsCategory->fetchCategory($request);
        return [
            
            "adsCategory"=>$adsCategory,
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Categories Edit';
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
            ->method("save_ads_category"),
            Button::make("Delete")
            ->icon("cross")
            ->canSee($this->adsCategory->exists)
            ->method("deleteCat")
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
        Layout::block(CategoriesEditLayout::class)
        ->title(__('Category Information'))
        ->description(__('create ads categories to be used by the ads system'))
        ->commands(
            Button::make(__('Save'))
                ->type(Color::DEFAULT())
                ->icon('check')
                ->canSee($this->adsCategory->exists)
                ->method('save_ads_category')
        ),];
    }



    public function save_ads_category(AdsCategory $adsCategory, Request $request)
    {
        
        $ads_Category_name = $request->input("adsCategory.category_name");
        
        // work on saving image later
        $adsCategory->category_name = $ads_Category_name;
        $adsCategory->save();

        Toast::info(__('Category was saved.'));

        return redirect()->route('platform.ads.categories');

        // Toast::warning(__('Error occured'));
        // return redirect()->route('platform.ads.categories');

    }

    public function deleteCat(AdsCategory $adsCategory, Request $request)
    {
        $adsCategory->delete($request->input("category"));
        Toast::warning(__('Category was deleted.'));
        return redirect()->route('platform.ads.categories');
    }
}
