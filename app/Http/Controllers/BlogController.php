<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function home(){
        return view('pages.home');
    }
    public function tentang(){
        return view('pages.blog');
    }
    public function contact(){
        return view('pages.contact');
    }
}
