<?php

namespace App\Orchid\Layouts\Ads;

use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class AdsListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'ads';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make("title","Title"),
            TD::make("description","Description"),
            TD::make("status","Status"),
            TD::make("action","Action")
            ->render(function ($ads) {
                return  Link::make('View')->route('platform.ads.edit', $ads->id);
            })


        ];
    }
}
