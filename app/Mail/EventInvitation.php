<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Event;
use App\Models\Artist;

class EventInvitation extends Mailable
{
    use Queueable, SerializesModels;

    public $event;
    public $artist;
    public $organizationName;
    public $organizationAddress;
    public $phoneNumber;
    public $rsvpDeadline;

    public function __construct(Event $event, Artist $artist, $organizationDetails)
    {
        $this->event = $event;
        $this->artist = $artist;
        $this->organizationName = $organizationDetails['name'];
        $this->organizationAddress = $organizationDetails['address'];
        $this->phoneNumber = $organizationDetails['phone'];
        $this->rsvpDeadline = $organizationDetails['rsvpDeadline'];
    }

    public function build()
    {
        return $this->subject('Invitation to Event: ' . $this->event->name)
                    ->view('emails.invitation');
    }
}
