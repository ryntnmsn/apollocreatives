<?php

namespace App\Http\Controllers;

use App\Models\SubService;
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
            $sub_services = array_filter($request->sub_services);

            $merged = [];
            
            foreach($services as $key => $service) {
                $merged[] = $service;
            }

            foreach($sub_services as $key => $sub_service) {
                $merged[] = $sub_service;
            }

            $mail_data = [
                'recipient' => 'apollocreativesmain@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'subject' => $request->subject,
                'services' => $merged,
                'email' => $request->email,
                'contact' => $request->contact,
                'date' => $request->date,
                'time' => $request->time,
                'sub_services' => $merged,
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
