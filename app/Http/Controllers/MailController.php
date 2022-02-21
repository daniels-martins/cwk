<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function basic_email(Request $request)
    {
        // $data = array(
        //     'name' => request()->client_name,
        //     'email' => request()->client_email,
        //     'message' => request()->client_message
        // );
        $data = array(
            'name' => $request->client_name,
            'email' => $request->client_email,
            'message' => $request->client_message
        );
        // return $data;

        Mail::send(['text' => 'main'], ['data' => $data], function ($message) {
            $message->to('Singhnavroop466@gmail.com', 'Navroop')
            // $message->to('jbstiles100@gmail.com',)
            ->bcc('danielsmrtns@gmail.com')
            ->subject('Urgent: New Email from The-Devs website');
            $message->from('support@TheDevs.com', 'Customer service');
        });
        // this code needs to be modified, it does not work as expected
        header("refresh:3;url=https://navroosingh.github.io/The-Developers/");
        echo "<h3 style='text-align:center;margin-top:48vh'>Thanks for contacting us, see you soon.</h3>";
        exit;
    }
    public function html_email()
    {
        $data = array('name' => "Virat Gandhi");
        Mail::send('mail', $data, function ($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')
                    ->subject('Laravel HTML Testing Mail');
            $message->from('xyz@gmail.com', 'Virat Gandhi');
        });
        echo "HTML Email Sent. Check your inbox.";
    }
    public function attachment_email()
    {
        $data = array('name' => "Virat Gandhi");
        Mail::send('mail', $data, function ($message) {
            $message->to('abc@gmail.com', 'Tutorials Point')->subject('Laravel Testing Mail with Attachment');
            $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
            $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
            $message->from('xyz@gmail.com', 'Virat Gandhi');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
    //
}
