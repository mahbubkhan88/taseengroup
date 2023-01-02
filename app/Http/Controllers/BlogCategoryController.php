<?php

namespace App\Http\Controllers;

use App\Models\BlogCategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    //List blog category method
    public function BlogCategoryList()
    {
        $categories = BlogCategoryModel::oldest()->get();
        return view('dashboard.blog_category.list', compact('categories'));
    }


    //Create blog category method
    public function BlogCategoryCreate()
    {
        return view('dashboard.blog_category.create');
    }


    //Insert blog category function
    public function BlogCategoryStore(Request $request)
    {
        $category               = new BlogCategoryModel();
        $category->name         = $request->input('name');
        $category->slug         = Str::slug($request->name, '-');
        $category->description  = $request->input('description');

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

        $category->save();

        $notification = array(
            'message'    => 'The category is inserted',
            'alert-type' => 'success'
        );

        return redirect()->route('blog_category.list')->with($notification);
    }


    //Edit blog category method
    public function BlogCategoryEdit($id)
    {
        $category = BlogCategoryModel::findOrFail($id);
        return view('dashboard.blog_category.edit', compact('category'));
    }


    //Update blog category function
    public function BlogCategoryUpdate(Request $request, $id)
    {
        $category              = BlogCategoryModel::find($id);
        $category->name        = $request->input('name');
        $category->slug        = Str::slug($request->name, '-');
        $category->description = $request->input('description');

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

        $category->update();

        $notification = array(
            'message'    => 'The category is updated',
            'alert-type' => 'success'
        );

        return redirect()->route('blog_category.list')->with($notification);
    }


    //Delete blog category feedback function
    public function BlogCategoryDelete($id)
    {
        $category = BlogCategoryModel::find($id);

        $category->delete();

        $notification = array(
            'message'    => 'The category is deleted',
            'alert-type' => 'success'
        );

        return redirect()->route('blog_category.list')->with($notification);
    }
}