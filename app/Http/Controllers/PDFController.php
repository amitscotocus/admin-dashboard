<?php
  
namespace App\Http\Controllers;
use Log;
use PDF;
use Mail;
  
class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $data["email"] = "laravelamit@gmail.com";
        $data["title"] = "From DevOpsSchool.com";
        $data["body"] = "This is Demo";
 
        $files = [
            public_path('files/yit-brochure.pdf'),
            public_path('files/laravel.png'),
        ];
        // log::info('mail aa rha hai');
        Mail::send('emails.myTestMail', $data, function($message)use($data, $files) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"]);
 
            foreach ($files as $file){
                $message->attach($file);
            }
            
        });
 
        dd('Mail sent successfully');
    }
}