<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "WElcome to Laravel keme";
        return view('pages.index')->with('title', $title);
        //return view('pages.index', compact('title'));
    }
    public function about(){

        return view('pages.about');
    }
    public function services(){

        return view('pages.services');
    }
}
