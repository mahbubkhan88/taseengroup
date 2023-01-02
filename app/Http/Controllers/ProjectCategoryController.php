<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategoryModel;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    //List category method
    public function ProjectCategoryList()
    {
        $categories = ProjectCategoryModel::oldest()->get();
        return view('dashboard.project_category.list', compact('categories'));
    }


    //Create category method
    public function ProjectCategoryCreate()
    {
        return view('dashboard.project_category.create');
    }


    //Insert category function
    public function ProjectCategoryStore(Request $request)
    {
        $category               = new ProjectCategoryModel();
        $category->name         = $request->input('name');
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

        return redirect()->route('project_category.list')->with($notification);
    }


    //Edit category method
    public function ProjectCategoryEdit($id)
    {
        $category = ProjectCategoryModel::findOrFail($id);
        return view('dashboard.project_category.edit', compact('category'));
    }


    //Update category function
    public function ProjectCategoryUpdate(Request $request, $id)
    {
        $category              = ProjectCategoryModel::find($id);
        $category->name        = $request->input('name');
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

        return redirect()->route('project_category.list')->with($notification);
    }


    //Delete category feedback function
    public function ProjectCategoryDelete($id)
    {
        $category = ProjectCategoryModel::find($id);

        $category->delete();

        $notification = array(
            'message'    => 'The category is deleted',
            'alert-type' => 'success'
        );

        return redirect()->route('project_category.list')->with($notification);
    }
}