<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{
    public function send_form(Request $request){
    	$name=$request->name;
    	$tel=$request->tel;

    	Mail::to('vera.kopylchuk@gmail.com')->send(new MailClass($name, $tel));
    	
		flash()->overlay('Спасибо! Мы перезвоним!',' ');

		return redirect()->back();
    }
     
}
