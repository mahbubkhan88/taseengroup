<?php

namespace App\Http\Controllers;

use App\Models\BlogTagModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogTagController extends Controller
{
    //List blog tag method
    public function BlogTagList()
    {
        $tags = BlogTagModel::oldest()->get();
        return view('dashboard.blog_tag.list', compact('tags'));
    }


    //Create blog tag method
    public function BlogTagCreate()
    {
        return view('dashboard.blog_tag.create');
    }


    //Insert blog tag function
    public function BlogTagStore(Request $request)
    {
        $tag               = new BlogTagModel();
        $tag->name         = $request->input('name');
        $tag->slug         = Str::slug($request->name, '-');
        $tag->description  = $request->input('description');

        $request->validate(
            [
                'name'         => 'required',
                'description'  => 'required',
            ],
            [
                'name.required'         => 'The name is required',
                'description.required'  => 'The description is required',
            ]
        );

        $tag->save();

        $notification = array(
            'message'    => 'The tag is inserted',
            'alert-type' => 'success'
        );

        return redirect()->route('blog_tag.list')->with($notification);
    }


    //Edit blog tag method
    public function BlogTagEdit($id)
    {
        $tag = BlogTagModel::findOrFail($id);
        return view('dashboard.blog_tag.edit', compact('tag'));
    }


    //Update blog tag function
    public function BlogTagUpdate(Request $request, $id)
    {
        $tag              = BlogTagModel::find($id);
        $tag->name        = $request->input('name');
        $tag->slug        = Str::slug($request->name, '-');
        $tag->description = $request->input('description');

        $request->validate(
            [
                'name'        => 'required',
                'description' => 'required',
            ],
            [
                'name.required'        => 'The name is required',
                'description.required' => 'The description is required',
            ]
        );

        $tag->update();

        $notification = array(
            'message'    => 'The tag is updated',
            'alert-type' => 'success'
        );

        return redirect()->route('blog_tag.list')->with($notification);
    }


    //Delete blog tag feedback function
    public function BlogTagDelete($id)
    {
        $tag = BlogTagModel::find($id);

        $tag->delete();

        $notification = array(
            'message'    => 'The tag is deleted',
            'alert-type' => 'success'
        );

        return redirect()->route('blog_tag.list')->with($notification);
    }
}