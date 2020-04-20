<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        if(!auth()->guest()){
            return redirect('dashboard');
        }
        $title = "Hello";
        return view("pages.index")->with("title", $title);
    }

    public function about(){
        return view("pages.about");
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['web development', 'C++ competitive programming', '2D Illustration', 'etc..']
        );

        return view("pages.services")->with($data);
    }
}
