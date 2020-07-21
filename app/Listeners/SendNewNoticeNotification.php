<?php

namespace App\Listeners;

use App\Events\NoticeUploaded;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewNoticeNotification
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
     * @param  NoticeUploaded  $event
     * @return void
     */
    public function handle(NoticeUploaded $event)
    {
        //
    }
}
