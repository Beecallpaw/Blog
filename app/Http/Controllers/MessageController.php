<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class MessageController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'email'=> 'required',
            'password'=>'required',
            'txt'=>'required'
        ]);
        $msg = new Message;
        $msg->email = $request->input('email');
        $msg->password = $request->input('password');
        $msg->txt = $request->input('txt');
        $msg->save();
        return redirect()->route('posts.index');
    }
    public function getMsg(Request $request){
        $messages = Message::all();
        return view('pages.message')->withMessages($messages);
    }
}
