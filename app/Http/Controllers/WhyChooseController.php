<?php

namespace App\Http\Controllers;

use App\Models\WhyChooseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WhyChooseController extends Controller
{
    //Why Choose Us View Method
    public function WhyChooseView()
    {
        $whyChoose = WhyChooseModel::findOrFail(1);
        return view('dashboard.why_choose_us.view', compact('whyChoose'));
    }

    //Why Choose Us Edit Method
    public function WhyChooseEdit()
    {
        $whyChoose = WhyChooseModel::findOrFail(1);
        return view('dashboard.why_choose_us.edit', compact('whyChoose'));
    }


    //Why Choose Us Update Method
    public function WhyChooseUpdate(Request $request)
    {
        $whyChoose = WhyChooseModel::findOrFail(1);
        $whyChoose->name        = $request->input('name');
        $whyChoose->description = $request->input('description');

        $request->validate(
            [
                'name'         => 'required',
                'description'  => 'required',
                'image'        => 'required|mimes:jpg, jpeg, png',
            ],
            [
                'name.required'        => 'The name is required',
                'description.required' => 'The description is required',
                'image.required'       => 'The image is required',
            ]
        );

        if ($request->hasFile('image')) {
            //old image delete
            $destination = 'uploads/why_choose_us_images/' . $whyChoose->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/why_choose_us_images/', $filename);
            $whyChoose->image = $filename;
        }

        $whyChoose->update();

        $notification = array(
            'message'    => 'Why choose us updated successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('why_choose_us.view')->with($notification);
    }
}