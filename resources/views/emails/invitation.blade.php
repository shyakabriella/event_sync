<p>{{ $organizationName }}</p>
<p>{{ $organizationAddress }}</p>
<p>Phone: {{ $phoneNumber }}</p>
<p>Date: {{ \Carbon\Carbon::parse($event->date)->format('l, F j, Y') }}</p>

Dear {{ $artist->name }},

We are delighted to invite you to {{ $event->name }}, a brief description of the event. This event will be held on {{ \Carbon\Carbon::parse($event->date)->format('l, F j, Y') }} at {{ \Carbon\Carbon::parse($event->date)->format('g:i A') }} in Venue, located at {{ $event->location }}.

We believe that your presence would greatly enhance the experience of all who attend.

Please RSVP by {{ $rsvpDeadline }} to confirm your attendance. You can reply to this email or contact us at {{ $organizationAddress }}.

We look forward to the pleasure of your company at {{ $event->name }}.

<br /> <br /> <br />

Warm regards,

<br />
{{ $organizationName }}
