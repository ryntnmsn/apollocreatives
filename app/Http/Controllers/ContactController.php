<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function send(Request $request) {

        if($this->isOnline()) {
            $services = array_filter($request->services);

            $merged = [];
            
            foreach($services as $key => $value) {
                $merged[] = $value;
            }

            $mail_data = [
                'recipient' => 'apollocreativesmain@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'subject' => $request->subject,
                'services' => $merged,
                'body' => $request->message,
            ];

            Mail::send('email-template', $mail_data, function($message) use ($mail_data) {
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'], $mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });
            return redirect()->back()->with('success', 'Email sent successfully!');

        } else {
            return "No connection!";
        }
    }

    public function isOnline($site = 'https://google.com/') {
        if(@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }
}
