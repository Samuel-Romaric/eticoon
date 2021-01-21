<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Redirect;

class ContactFormController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendMail(ContactFormRequest $request)
    {
        $mailable = new ContactMail($request->name, $request->email, $request->subject, $request->message);

        $email = 'admin@etcoon.com';

        Mail::to($email)->send($mailable);

        flash(sprintf("Merci de m'avoir écris. Je vous contacterai dans les plus brèf délais!"));

        return Redirect::to('/');
    }

}
