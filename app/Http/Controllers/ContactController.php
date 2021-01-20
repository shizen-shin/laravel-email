<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;  //追記

class ContactController extends Controller
//以下追記
{
    public function index()   //コンタクトフォームを表示
    {
        return view('contact.index');
    }

    public function send(Request $request)  //メールの自動送信設定
    {
        Mail::send('emails.text', [], function($data){
                $data   ->to('hlaupcpky38@gmail.com')
                        ->subject('This is a test mail');
        });

        return back()->withInput($request->only(['name']))
                     ->with('sent', '送信完了しました。');    //送信完了を表示
    }
}
