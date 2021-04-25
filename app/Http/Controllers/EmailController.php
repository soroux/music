<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //

    public function index(){
        $emails = Email::where('type','receive')->paginate(10);
        $emails_unread=Email::where('type','receive')->where('status','unread')->count();
        return view('dashboard.mail',[
            'emails'=>$emails,
            'unread'=>$emails_unread]);
    }
    public function sent(){
        $emails = Email::where('type','send')->paginate(10);
        $emails_unread=Email::where('type','receive')->where('status','unread')->count();
        return view('dashboard.mail-sent',[
            'emails'=>$emails,
            'unread'=>$emails_unread]);
    }

    public function read(Email $email){

$email->status = 'read';
    $email->update();
        $emails_unread=Email::where('type','receive')->where('status','unread')->count();

        return view('dashboard.mail-read',['email'=>$email,'unread'=>$emails_unread]);
    }

    public function reply(Email $email){
        $emails_unread=Email::where('type','receive')->where('status','unread')->count();

        return view('dashboard.mail-compose',['email'=>$email,'unread'=>$emails_unread]);
    }

    public function send(Request $request ){
        $input['name'] = Auth()->user()->name;
        $input['phone'] = "not visible";
        $input['subject'] = $request->subject;
        $input['content'] = $request->message;
        $input['email'] = $request->email;
        $input['type']='send';
        $mail = new Email();
        $mail->create($input);

        Mail::send('dashboard.mail-template',$input,function ($message) use ($input){
            $message->to($input['email'])->subject($input['subject']);
        });
        $request->session()->flash('message','پیام شما با موفقیت ارسال شد');
        return back();

    }
}
