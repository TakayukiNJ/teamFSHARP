<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    
    public $data = [];
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data['inputs'] = $data;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact')->with($this->data);
    }
    
    // // 送信処理
    // public function send(Request $request)
    // {
    //     $rules = [
    //         'name' => 'required|string',
    //         'email' => 'required|email',
    //         'message' => 'required'
    //         // 'title' => 'required',
    //     ];
    //     $this->validate($request, $rules);
     
    //     $to = [
    //         ['email' => 'nj.takayuki@gmail.com', 'name' => 'DHGS Nakajo']
    //     ];
     
    //     $data = $request->only('name', 'email', 'message');
    //     Mail::to($to)->send(new Contact($data));
     
    //     return redirect()->route('contact.result');
    // }
    
    // public function result()
    // {
    //     return view('contact.result');
    // }
}
