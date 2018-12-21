<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
      //return $request->input('name');
      //obliga a que los campos de name y email se llenen,
      //si no no hace submit.
      $this->validate($request, [
        'name'=> 'required',
        'email'=> 'required'
    ]);
  //  return 'SUCCESS';
  //create new Message
  $message = new Message;
  $message->name = $request->input('name');
  $message->email = $request->input('email');
  $message->message = $request->input('message');
  //save message
  $message->save();

  //redirect
  return redirect('/')->with('success','Message Sent');//return to home.

    }


    public function getMessages(){
      $messages = Message::all();

      return view('messages')->with('messages',$messages);
    }
}
