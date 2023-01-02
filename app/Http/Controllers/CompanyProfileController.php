<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfileModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyProfileController extends Controller
{
    //Company Profile View Method
    public function CompanyProfileView()
    {
        $data = CompanyProfileModel::findOrFail(1);
        return view('dashboard.company_profile.view', compact('data'));
    }

    //Company Profile Edit Method
    public function CompanyProfileEdit()
    {
        $data = CompanyProfileModel::findOrFail(1);
        return view('dashboard.company_profile.edit', compact('data'));
    }


    //Company Profile Update Method
    public function CompanyProfileUpdate(Request $request)
    {
        $data = CompanyProfileModel::findOrFail(1);
        $data->company_name       = $request->input('company_name');
        $data->company_business   = $request->input('company_business');
        $data->company_type       = $request->input('company_type');
        $data->company_start_date = $request->input('company_start_date');
        $data->employee_number    = $request->input('employee_number');
        $data->year_end           = $request->input('year_end');
        $data->video_link         = $request->input('video_link');
        $data->home_description   = $request->input('home_description');
        $data->page_description   = $request->input('page_description');

        $request->validate(
            [
                'company_name'       => 'required',
                'company_business'   => 'required',
                'company_type'       => 'required',
                'company_start_date' => 'required',
                'employee_number'    => 'required',
                'year_end'           => 'required',
                'video_link'         => 'required',
                'home_description'   => 'required',
                'page_description'   => 'required',
                'image'              => 'required|mimes:jpg, jpeg, png',
            ],
            [
                'company_name.required'       => 'The company name is required',
                'company_business.required'   => 'The company business is required',
                'company_type.required'       => 'The company type is required',
                'company_start_date.required' => 'The company start date is required',
                'employee_number.required'    => 'The employee number is required',
                'year_end.required'           => 'The year end is required',
                'video_link.required'         => 'The video link is required',
                'home_description.required'   => 'The home description is required',
                'page_description.required'   => 'The profile page description is required',
                'image.required'              => 'The image is required',
            ]
        );

        if ($request->hasFile('image')) {
            //old image delete
            $destination = 'uploads/company_profile_images/' . $data->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/company_profile_images/', $filename);
            $data->image = $filename;
        }

        $data->update();

        $notification = array(
            'message'    => 'Company profile updated successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('company_profile.view')->with($notification);
    }
}