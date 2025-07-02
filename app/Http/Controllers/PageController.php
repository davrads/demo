<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Notice;
use Illuminate\Http\Request;

class PageController extends Controller
{
        //Home Page
    function home()  {
        return view('index');
    }
    //Gallery Page
     function gallery()  {
        return view('gallery');
    }
    //About Page
     function about()  {
        return view('about');
    }
    //Notice Page
    function notice()  {
        return view('notice');
        
    }
}

