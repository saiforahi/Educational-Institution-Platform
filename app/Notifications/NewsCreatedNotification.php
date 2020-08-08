<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\News;
class NewsCreatedNotification extends Notification implements ShouldQueue
{
    use Queueable;
    public $new_news;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(News $news)
    {
        //
        $this->new_news=$news;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'news_title'=>$this->new_news->title,
            'news_body' => $this->new_news->body,
            'news_image_link'=> $this->new_news->link,
            'news_from_institute' => $this->new_news->institute_id,
            'institute_name' => $this->new_news->institute->name
        ];
    }

}
