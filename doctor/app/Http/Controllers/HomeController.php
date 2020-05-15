<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Link;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $link = Link::first();

        return view('index',[
           'blogs' => Blog::all(),
           'link' => Link::urlFormat($link->link),
        ]);
    }
}
