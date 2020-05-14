<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppoinmentRequest;
use App\Http\Requests\BlogsRequest;
use App\Http\Requests\SettingsRequest;
use Illuminate\Http\Request;
use App\AppoinmetSchduale;
use DB;

class BlogsController extends Controller
{
    public function index()
    {
        return view('admin.blogs.index', [
            'blogs' => Blog::all()
        ]);
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(BlogsRequest $request)
    {
        $imageName = time().'.'.request()->file->getClientOriginalExtension();
        request()->file->move(public_path('images'), $imageName);
            Blog::create([
                'title' => $request->title ,
                'description' => $request->description ,
                'image' => $imageName ,
            ]);

        return redirect('/admin/blogs')->with('success', 'created Successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);

        return view('admin.blogs.edit', [
            'blog' => $blog
        ]);
    }

    public function update(Request $request)
    {
      //  dd($request->all());
        $data = [];
        $data = $request->except('_token','file');
        if($request->file)
        {
            $imageName = time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }
        Blog::where('id', $request->id)->update($data);
        return redirect('/admin/blogs')->with('success', 'updated Successfully!');
    }

    public function delete($id)
    {
        Blog::find($id)->delete();
        return redirect('/admin/blogs')->with('success', 'deleted Successfully!');
    }
}
