<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    //About View Method
    public function AboutView()
    {
        $about = AboutModel::findOrFail(1);
        return view('dashboard.about.view', compact('about'));
    }

    //About Edit Method
    public function AboutEdit()
    {
        $about = AboutModel::findOrFail(1);
        return view('dashboard.about.edit', compact('about'));
    }


    //About Update Method
    public function AboutUpdate(Request $request)
    {
        $about = AboutModel::findOrFail(1);
        $about->title       = $request->input('title');
        $about->sub_title   = $request->input('sub_title');
        $about->description = $request->input('description');

        $request->validate(
            [
                'title'        => 'required',
                'sub_title'    => 'required',
                'description'  => 'required',
                'image'        => 'required|mimes:jpg, jpeg, png',
            ],
            [
                'title.required'       => 'The title is required',
                'sub_title.required'   => 'The sub title is required',
                'description.required' => 'The description is required',
                'image.required'       => 'The image is required',
            ]
        );

        if ($request->hasFile('image')) {
            //old image delete
            $destination = 'uploads/about_images/' . $about->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/about_images/', $filename);
            $about->image = $filename;
        }

        $about->update();

        $notification = array(
            'message'    => 'About updated successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('about.view')->with($notification);
    }
}