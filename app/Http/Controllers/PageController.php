<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //dito gagawa ng function

    public function welcome(){
        return view ('welcome');
    }
    public function home(){
        return view ('home');
    }
  public function support(){
        return view ('pages/support');
}
 public function about(){
        return view ('pages/about');
}
    public function contact(){
        return view ('pages/contact');
}
public function personalinfo(){
        return view ('pages/personalinfo');
}
    
    public function employee(){
        return view ('pages/employee');
}
}