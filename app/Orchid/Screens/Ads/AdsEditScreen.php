<?php

namespace App\Orchid\Screens\Ads;

use App\Models\Ads;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;

class AdsEditScreen extends Screen
{
    /**
     * Query data.
     *
     * @return array
     */
    public function query(Ads $ads): iterable
    {
      
        return [
            'advert'=>$ads
        ];
    }

    /**
     * Display header name.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Manage Advert';
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make("Approve")
            ->icon("check")
            ->method("approve_ads"),

            Button::make("Disapprove")
            ->icon("cross")
            ->method("disapprove_ads")

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
            Layout::legend('advert', [
                Sight::make("category",'Category')
                ->render(function (Ads $ads){
                    return $ads->getcategory->category_name;
                }),
                Sight::make("sub_category",'Sub Category')
                ->render(function (Ads $ads){
                    return $ads->getsubCategory->sub_category_name;
                }),
                Sight::make('status', 'Status')->render(function (Ads $ads) {
                    if($ads->status == Ads::PENDING)
                    {
                        $stat = "warning";
                    }
                    if($ads->status == Ads::PAUSED)
                    {
                        $stat = "danger";
                    }
                    if($ads->status == Ads::ACTIVE)
                    {
                        $stat = "success";
                    }
                    $textAndIndicator = "<i class='text-{$stat}'>●</i> {$ads->status}";
                    return $textAndIndicator;
                }),
                Sight::make('created_at', 'Created'),
                Sight::make('updated_at', 'Updated'),
                Sight::make('Description')->render(function (Ads $ads) {
                    return $ads->description;
                }),
               
            ])->title('Advert'),
        ];
    }
}
