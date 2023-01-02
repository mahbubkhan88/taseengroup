<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\SliderModel;
use Illuminate\Support\Facades\File;


class SliderController extends Controller
{
    //List slider method
    public function SliderList()
    {
        $sliders = SliderModel::latest()->get();
        return view('dashboard.slider.list', compact('sliders'));
    }


    //Create slider method
    public function SliderCreate()
    {
        return view('dashboard.slider.create');
    }


    //Insert slider function
    public function SliderStore(Request $request)
    {
        $slider              = new SliderModel();
        $slider->title       = $request->input('title');
        $slider->description = $request->input('description');
        $slider->image       = $request->input('image');
        $slider->created_at  = Carbon::now();

        $request->validate(
            [
                'title'         => 'required',
                'description'   => 'required',
                'image'         => 'required|mimes:jpg,jpeg,png'
            ],
            [
                'title.required'         => 'Title is required',
                'description.required'   => 'Description is required',
                'image.required'         => 'Image is required',
            ]
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/slider_images/', $filename);
            $slider->image = $filename;
        }

        $slider->save();
        // dd($slider);

        $notification = array(
            'message'    => 'Slider inserted successful',
            'alert-type' => 'success'
        );

        return redirect()->route('slider.list')->with($notification);
    }


    //View slider method
    public function SliderView($id)
    {
        $slider = SliderModel::findOrFail($id);
        return view('dashboard.slider.view', compact('slider'));
    }


    //Edit slider method
    public function SliderEdit($id)
    {
        $slider = SliderModel::findOrFail($id);
        return view('dashboard.slider.edit', compact('slider'));
    }


    //Update slider function
    public function SliderUpdate(Request $request, $id)
    {
        $slider = SliderModel::findOrFail($id);
        $slider->title       = $request->input('title');
        $slider->description = $request->input('description');

        $request->validate(
            [
                'title'       => 'required',
                'description' => 'required',
            ],
            [
                'title.required'       => 'The title is required',
                'description.required' => 'The description is required',
            ]
        );

        if ($request->hasFile('image')) {
            //old image delete
            $destination = 'uploads/slider_images/' . $slider->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/slider_images/', $filename);
            $slider->image = $filename;
        }

        $slider->update();

        $notification = array(
            'message'    => 'Slider updated successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('slider.list')->with($notification);
    }


    //Delete slider function
    public function SliderDelete($id)
    {
        $slider = SliderModel::find($id);

        $destination = 'uploads/slider_images/' . $slider->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $slider->delete();

        $notification = array(
            'message'    => 'Slider deleted successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('slider.list')->with($notification);
    }
}