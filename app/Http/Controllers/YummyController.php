<?php

namespace App\Http\Controllers;
use App\Models\Contact;


use Illuminate\Http\Request;

class YummyController extends Controller
{
    function index(){
        return view('Yummy.index');
    }
    function viewContact(){
        $contacts=Contact::all();
        return view('Yummy.view_contact' , compact('contacts'));
    }
    function about(){
        return view('Yummy.about');
    }
    function menu(){
        return view('Yummy.menu');
    }
    function event(){
        return view('Yummy.event');
    }
    function chefs(){
        return view('Yummy.chefs');
    }
    function gallery(){
        return view('Yummy.gallery');
    }
    function contact(){
        return view('Yummy.contact');
    }
    function Postcontact(Request $request){
            $request->validate([
                'name' => 'required|string|max:255',
                "email"=>'required',
                "subject"=>'required',
                "message"=>'required',
                "image"=>'required',

            ]


        );
        $NameImage =time(). '_' .rand() .$request->file("image")->getClientOriginalExtension();

        $request->file("image")->move(public_path('uploades') ,$NameImage  );


       contact::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'subject'=>$request->subject,
        'message'=>$request->message,
        'image'=>$NameImage,


       ]);
        return redirect()->route('index');
    }


}
