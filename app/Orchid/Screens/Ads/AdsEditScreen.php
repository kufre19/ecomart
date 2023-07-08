<?php

namespace App\Orchid\Screens\Ads;

use App\Models\Ads;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

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
            ->method("updateAds",["status"=>Ads::ACTIVE]),

            Button::make("Disapprove")
            ->icon("close")
            ->method("updateAds",["status"=>Ads::DISAPPROVE]),

            Button::make("Pause")
            ->icon("ban")
            ->method("updateAds",["status"=>Ads::PAUSED])

        ];
    }


    public function updateAds(Ads $ads,Request $request)
    {
       $status = $request->input("status");
       $ads->update([
            "status"=>$status
       ]);
       
       Toast::success("Advert Upated Successfully!");
       return redirect(route("platform.ads.list"));
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
                    if($ads->status == Ads::DISAPPROVE)
                    {
                        $stat = "error";
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

            Layout::rows([
               
            ])
        ];
    }



}
