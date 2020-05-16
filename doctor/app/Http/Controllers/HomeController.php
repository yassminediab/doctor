<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Link;
use Illuminate\Http\Request;
use App\AppoinmetSchduale;

class HomeController extends Controller
{
    public function index()
    {
        $link = Link::first();
        $settings = AppoinmetSchduale::where('is_weekend', 1)->get();
        foreach ($settings as $setting)
        {
            $days[] = $setting->day_number;
        }

        return view('index',[
           'blogs' => Blog::all(),
           'days' => implode(',',$days),
           'link' => Link::urlFormat($link->link),
        ]);
    }

    public function getblogModel($id)
    {
        return view('admin.blogs.model',[
           'blog' => Blog::find($id),
        ]);
    }
}
