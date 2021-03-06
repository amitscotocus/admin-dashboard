<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\UploadImage;

class SendEmailController extends Controller
{

    function index()
    {
     return view('send_email');
    }
    public function store(Request $request){
        $request->validate([
        'name'=>'required',
        'email' => 'required',
        'image'=> 'required',
        ]);

        $resume = time() . '.' . $request['image']->getClientOriginalExtension();
        $imagesendbymailwithstore= new UploadImage();
        $imagesendbymailwithstore->name =  $request->name;
        $imagesendbymailwithstore->email = $request->email;
        $imagesendbymailwithstore->image = $resume;
        $imagesendbymailwithstore->save();

        // for mailling function working
        $imagesendbymailwithstore = array(
            'name' => $request->name,
            'email' => $request->email,
            'image' => 	$request->image,

        );
        Mail::to($imagesendbymailwithstore['email'])->send(new SendMail($imagesendbymailwithstore));
        $request['image']->move(base_path() . '/storage/app/public', $resume);
        return back()->with('success', 'Thanks for contacting us!');
    }
}