<?php

namespace App\Http\Controllers;

use App\Models\StrengthModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StrengthController extends Controller
{
    //Strength View Method
    public function StrengthView()
    {
        $strength = StrengthModel::findOrFail(1);
        return view('dashboard.our_strength.view', compact('strength'));
    }

    //Strength Edit Method
    public function StrengthEdit()
    {
        $strength = StrengthModel::findOrFail(1);
        return view('dashboard.our_strength.edit', compact('strength'));
    }


    //Strength Update Method
    public function StrengthUpdate(Request $request)
    {
        $strength = StrengthModel::findOrFail(1);
        $strength->name        = $request->input('name');
        $strength->description = $request->input('description');

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
            $destination = 'uploads/strength_images/' . $strength->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/strength_images/', $filename);
            $strength->image = $filename;
        }

        $strength->update();

        $notification = array(
            'message'    => 'Strength updated successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('strength.view')->with($notification);
    }
}