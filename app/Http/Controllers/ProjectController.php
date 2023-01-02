<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use App\Models\ProjectCategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    //List project method
    public function ProjectList()
    {
        $projects = ProjectModel::latest()->get();
        return view('dashboard.project.list', compact('projects'));
    }


    //Create project method
    public function ProjectCreate()
    {
        //Get project category
        $categories = ProjectCategoryModel::orderBy('id', 'ASC')->get();

        return view('dashboard.project.create', compact('categories'));
    }


    //Insert project function
    public function ProjectStore(Request $request)
    {
        $project                      = new ProjectModel();
        $project->project_title       = $request->input('project_title');
        $project->slug                = Str::slug($request->project_title, '-');
        $project->project_name        = $request->input('project_name');
        $project->client_name         = $request->input('client_name');
        $project->project_category_id = $request->input('project_category_id');
        $project->date                = $request->input('date');
        $project->location            = $request->input('location');
        $project->project_link        = $request->input('project_link');
        $project->description         = $request->input('description');
        $project->image               = $request->input('image');

        $request->validate(
            [
                'project_title'       => 'required',
                'project_name'        => 'required',
                'client_name'         => 'required',
                'project_category_id' => 'required',
                'date'                => 'required',
                'location'            => 'required',
                'project_link'        => 'required',
                'description'         => 'required',
                'image'               => 'required|mimes:jpg,jpeg,png'
            ],
            [
                'project_title.required'        => 'The project title is required',
                'project_name.required'         => 'The project name is required',
                'client_name.required'          => 'The client name is required',
                'date.required'                 => 'The date is required',
                'location.required'             => 'The location is required',
                'project_link.required'         => 'The project URL is required',
                'description.required'          => 'The description is required',
                'image.required'                => 'The image is required',
            ]
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/project_images/', $filename);
            $project->image = $filename;
        }

        $project->save();
        // dd($project);

        $notification = array(
            'message'    => 'Project inserted successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('project.list')->with($notification);
    }


    //View project method
    public function ProjectView($slug)
    {
        $project = ProjectModel::where('slug', $slug)->first();

        return view('dashboard.project.view', compact('project'));
    }


    //Edit project method
    public function ProjectEdit($id)
    {
        //Get project category
        $categories = ProjectCategoryModel::orderBy('id', 'ASC')->get();

        $project = ProjectModel::findOrFail($id);
        return view('dashboard.project.edit', compact('project', 'categories'));
    }


    //Update project function
    public function ProjectUpdate(Request $request, $id)
    {
        $project = ProjectModel::findOrFail($id);
        $project->project_title       = $request->input('project_title');
        $project->slug                = Str::slug($request->project_title, '-');
        $project->project_name        = $request->input('project_name');
        $project->client_name         = $request->input('client_name');
        $project->project_category_id = $request->input('project_category_id');
        $project->date                = $request->input('date');
        $project->location            = $request->input('location');
        $project->project_link        = $request->input('project_link');
        $project->description         = $request->input('description');

        $request->validate(
            [
                'project_title'       => 'required',
                'project_name'        => 'required',
                'client_name'         => 'required',
                'project_category_id' => 'required',
                'date'                => 'required',
                'location'            => 'required',
                'project_link'        => 'required',
                'description'         => 'required',
            ],
            [
                'project_title.required'        => 'The project title is required',
                'project_name.required'         => 'The project name is required',
                'client_name.required'          => 'The client name is required',
                'date.required'                 => 'The date is required',
                'location.required'             => 'The location is required',
                'project_link.required'         => 'The project URL is required',
                'description.required'          => 'The description is required',
            ]
        );

        if ($request->hasFile('image')) {
            //old image delete
            $destination = 'uploads/project_images/' . $project->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/project_images/', $filename);
            $project->image = $filename;
        }

        $project->update();

        $notification = array(
            'message'    => 'Project updated successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('project.list')->with($notification);
    }


    //Delete project function
    public function ProjectDelete($id)
    {
        $project = ProjectModel::find($id);

        $destination = 'uploads/project_images/' . $project->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $project->delete();

        $notification = array(
            'message'    => 'Project deleted successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('project.list')->with($notification);
    }
}