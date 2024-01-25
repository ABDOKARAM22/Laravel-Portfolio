<?php

namespace App\Http\Controllers;

use App\Mail\UserMessages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function sendmail(Request $request){

    $data = $request->validate([
            'name' => 'required|String|max:120',
            'email' => 'required|Email',
            'phone' => 'required|numeric',
            'subject' => 'required|string|max:120',
            'message' => 'required|string|max:255',
            'more_details' => 'Nullable|string|max:150'
        ]);
        
        view('mail.usersmessages',['data'=>$data]);
        Mail::to("abdelrahmankaram22@gmail.com")->send(new UserMessages($data));
        return redirect()->route('welcome')->withFragment('contact')->with('success',"Your message has been sent. Thank you!");
    }
}

