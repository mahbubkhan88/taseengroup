<?php

namespace App\Http\Controllers;

use App\Models\MissionVisionValueModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MissionVisionValueController extends Controller
{
    //List mission vision value method
    public function MissionVisionValueList()
    {
        $dataList = MissionVisionValueModel::oldest()->get();
        return view('dashboard.mission_vision_value.list', compact('dataList'));
    }


    //Create mission vision value method
    public function MissionVisionValueCreate()
    {
        return view('dashboard.mission_vision_value.create');
    }


    //Insert mission vision value function
    public function MissionVisionValueStore(Request $request)
    {
        $data               = new MissionVisionValueModel();
        $data->title        = $request->input('title');
        $data->description  = $request->input('description');
        $data->image        = $request->input('image');

        $request->validate(
            [
                'title'       => 'required',
                'description' => 'required',
                'image'       => 'required|mimes:jpg,jpeg,png'
            ],
            [
                'title.required'        => 'The Title is required',
                'description.required'  => 'The description is required',
                'image.required'        => 'The image is required',
            ]
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/mission_vision_value_images/', $filename);
            $data->image = $filename;
        }

        $data->save();

        $notification = array(
            'message'    => 'The information is inserted',
            'alert-type' => 'success'
        );

        return redirect()->route('mission_vision_value.list')->with($notification);
    }


    //View mission vision value method
    public function MissionVisionValueView($id)
    {
        $data = MissionVisionValueModel::findOrFail($id);
        return view('dashboard.mission_vision_value.view', compact('data'));
    }



    //Edit mission vision value method
    public function MissionVisionValueEdit($id)
    {
        $data = MissionVisionValueModel::findOrFail($id);
        return view('dashboard.mission_vision_value.edit', compact('data'));
    }


    //Update mission vision value function
    public function MissionVisionValueUpdate(Request $request, $id)
    {
        $data              = MissionVisionValueModel::find($id);
        $data->title       = $request->input('title');
        $data->description = $request->input('description');

        $request->validate(
            [
                'title'        => 'required',
                'description'  => 'required',
                'image'        => 'required|mimes:jpg, jpeg, png',
            ],
            [
                'title.required'       => 'The title is required',
                'description.required' => 'The description is required',
                'image.required'       => 'The image is required',
            ]
        );

        if ($request->hasFile('image')) {
            //old image delete
            $destination = 'uploads/mission_vision_value_images/' . $data->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/mission_vision_value_images/', $filename);
            $data->image = $filename;
        }

        $data->update();

        $notification = array(
            'message'    => 'The information is updated',
            'alert-type' => 'success'
        );

        return redirect()->route('mission_vision_value.list')->with($notification);
    }


    //Delete mission vision value feedback function
    public function MissionVisionValueDelete($id)
    {
        $data = MissionVisionValueModel::find($id);

        $destination = 'uploads/mission_vision_value_images/' . $data->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $data->delete();

        $notification = array(
            'message'    => 'The information is deleted',
            'alert-type' => 'success'
        );

        return redirect()->route('mission_vision_value.list')->with($notification);
    }
}