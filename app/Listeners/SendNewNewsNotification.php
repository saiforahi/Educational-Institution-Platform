<?php

namespace App\Listeners;

use App\Events\NewsCreated;
use App\Notifications\NewsCreatedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;
use App\User;
use App\Subscriber;
class SendNewNewsNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewsCreated  $event
     * @return void
     */
    public function handle(NewsCreated $event)
    {
        //
        /*$users=User::whereHas('subscribers', function (Builder $query) use($event) {
            $query->where('institute_id',$event->new_news->institute_id);
        })->get();*/
        $users=array();
        $subscribedusers=Subscriber::where('institute_id',$event->new_news->institute_id)->distinct('user_id')->get();
        foreach($subscribedusers as $subscriber){
            array_push($users, User::find($subscriber->user_id));
        }
        Notification::send($users, new NewsCreatedNotification($event->new_news));
    }
}
