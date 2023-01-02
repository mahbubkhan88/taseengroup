<?php

namespace App\Http\Controllers;

use App\Models\BlogCategoryModel;
use App\Models\BlogModel;
use App\Models\BlogTagModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    //List blog method
    public function BlogList()
    {
        $blogs = BlogModel::latest()->get();
        return view('dashboard.blog.list', compact('blogs'));
    }

    //Create blog method
    public function BlogCreate()
    {
        //Get blog categories
        $categories = BlogCategoryModel::orderBy('id', 'ASC')->get();

        //Get blog tags
        $tags = BlogTagModel::orderBy('id', 'ASC')->get();

        return view('dashboard.blog.create', compact('categories', 'tags'));
    }


    //Insert blog function
    public function BlogStore(Request $request)
    {
        $blog                    = new BlogModel();
        $blog->user_id           = Auth::id();
        $blog->blog_category_id  = $request->input('blog_category_id');
        $blog->title             = $request->input('title');
        $blog->slug              = Str::slug($request->title, '-');
        $blog->description       = $request->input('description');
        $blog->image             = $request->input('image');

        $request->validate(
            [
                'title'             => 'required',
                'blog_category_id'  => 'required',
                'description'       => 'required',
                'image'             => 'required|mimes:jpg,jpeg,png'
            ],
            [
                'title.required'             => 'The title is required',
                'blog_category_id.required'  => 'The category is required',
                'description.required'       => 'The description is required',
                'image.required'             => 'The image is required',
            ]
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/blog_images/', $filename);
            $blog->image = $filename;
        }

        $blog->save();

        //Tag insert
        $blog->tags()->attach($request->tags);
        // dd($blog);

        $notification = array(
            'message'    => 'Blog inserted successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('blog.list')->with($notification);
    }


    //View blog method
    public function BlogView($slug)
    {
        $blog = BlogModel::where('slug', $slug)->first();

        return view('dashboard.blog.view', compact('blog'));
    }


    //Edit blog method
    public function BlogEdit($id)
    {
        $blog = BlogModel::findOrFail($id);

        //Get blog category
        $categories = BlogCategoryModel::orderBy('id', 'ASC')->get();

        //Get blog tags
        $tags = BlogTagModel::orderBy('id', 'ASC')->get();

        return view('dashboard.blog.edit', compact('blog', 'categories', 'tags'));
    }



    //Update blog function
    public function BlogUpdate(Request $request, $id)
    {
        $blog = BlogModel::findOrFail($id);
        $blog->user_id           = Auth::id();
        $blog->blog_category_id  = $request->input('blog_category_id');
        $blog->title             = $request->input('title');
        $blog->slug              = Str::slug($request->title, '-');
        $blog->description       = $request->input('description');

        $request->validate(
            [
                'title'             => 'required',
                'blog_category_id'  => 'required',
                'description'       => 'required',
            ],
            [
                'title.required'             => 'The title is required',
                'blog_category_id.required'  => 'The category is required',
                'description.required'       => 'The description is required',
            ]
        );

        if ($request->hasFile('image')) {
            //old image delete
            $destination = 'uploads/blog_images/' . $blog->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/blog_images/', $filename);
            $blog->image = $filename;
        }

        $blog->update();

        //Update related tags
        $blog->tags()->sync($request->tags);

        $notification = array(
            'message'    => 'Blog updated successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('blog.list')->with($notification);
    }



    //Delete blog function
    public function BlogDelete($id)
    {
        $blog = BlogModel::find($id);

        $destination = 'uploads/blog_images/' . $blog->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        //Delete related tags
        $blog->tags()->detach();

        $blog->delete();

        $notification = array(
            'message'    => 'Blog deleted successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('blog.list')->with($notification);
    }
}