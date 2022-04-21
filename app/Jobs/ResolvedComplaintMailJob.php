<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ResolvedComplaintMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
     public $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        //
        $this->user=$user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        //dd($this->user->toArray());
        $to_mail=$this->user[0]->email;
        $to_name=$this->user[0]->name;
        $var=array('name'=>'Electric Mart','body'=>$this->user[0]->name);
        Mail::send('resolvedmail',$var,function($message) use($to_name,$to_mail){
        $message->to($to_mail)
        ->subject('Resolved !! Your Complaint');
        });
    }
}
