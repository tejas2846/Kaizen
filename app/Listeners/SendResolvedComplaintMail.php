<?php

namespace App\Listeners;

use App\Events\ResolvedComplaintMail;
use App\Jobs\ResolvedComplaintMailJob;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendResolvedComplaintMail
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
     * @param  \App\Events\ResolvedComplaintMail  $event
     * @return void
     */
    public function handle(ResolvedComplaintMail $event)
    {
        //
       // dd($event->user);
       //return response()->json(['message'=>$event->user]);
        dispatch(new ResolvedComplaintMailJob($event->user));
    }
}
