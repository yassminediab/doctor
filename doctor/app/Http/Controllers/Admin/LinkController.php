<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        return view('admin.link.index', [
            'link' => Link::first()
        ]);
    }
    public function edit($id)
    {
        $link = Link::find($id);

        return view('admin.link.edit', [
            'link' => $link
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        Link::where('id', $request->id)->update($data);
        return redirect('/admin/link')->with('success', 'updated Successfully!');
    }
}
