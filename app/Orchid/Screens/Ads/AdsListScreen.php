<?php

namespace App\Orchid\Screens\Ads;

use App\Models\Ads;
use App\Orchid\Layouts\Ads\AdsListLayout;
use Orchid\Screen\Screen;

class AdsListScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Ads $ads): iterable
    {
        return [
            "ads"=>$ads->fetchAllAds()
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Adverts';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            AdsListLayout::class
        ];
    }
}
