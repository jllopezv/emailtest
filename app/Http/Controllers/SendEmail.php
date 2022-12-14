<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    public function send(Request $request)
    {
        echo "Enviando email...";
        Mail::to('jllopezvicente@gmail.com')->send(new TestMail());
    }
}
