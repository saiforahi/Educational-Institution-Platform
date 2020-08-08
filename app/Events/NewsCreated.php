<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\News;
class NewsCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $new_news;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(News $news)
    {
        $this->new_news=$news;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['news-channel'];
    }

    public function broadcastAs()
    {
        return 'news-event';
    }
}
