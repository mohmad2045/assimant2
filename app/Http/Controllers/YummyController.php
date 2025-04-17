<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YummyController extends Controller
{
    function index(){
        return view('Yummy.index');
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
        dd($request);
    }


}
