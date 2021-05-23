<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
  public function store(Request $request){
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'subject' => 'required',
      'message' => 'required',
    ]);

    Mail::send('email.contact-message', [
      'msg' => $request->message
    ], function ($mail) use ($request) {
      $mail->from($request->email, $request->name);

      $mail->to('ball.engineer@yandex.com')->subject('Contact Message');
    });

    return redirect()->back()->with('flash_message', 'Thank you for your message.');
}
}
