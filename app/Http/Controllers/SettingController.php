<?php

namespace App\Http\Controllers;

use App\Models\SettingModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    //Setting View Method
    public function SettingView()
    {
        $setting = SettingModel::findOrFail(1);
        return view('dashboard.setting.view', compact('setting'));
    }

    //Setting Edit Method
    public function SettingEdit()
    {
        $setting = SettingModel::findOrFail(1);
        return view('dashboard.setting.edit', compact('setting'));
    }


    //Setting Update Method
    public function SettingUpdate(Request $request)
    {
        $setting = SettingModel::findOrFail(1);
        $setting->telephone         = $request->input('telephone');
        $setting->fax               = $request->input('fax');
        $setting->phone_one         = $request->input('phone_one');
        $setting->phone_two         = $request->input('phone_two');
        $setting->email_address     = $request->input('email_address');
        $setting->corporate_office  = $request->input('corporate_office');
        $setting->registered_office = $request->input('registered_office');
        $setting->facebook_link     = $request->input('facebook_link');
        $setting->linkedin_link     = $request->input('linkedin_link');
        $setting->youtube_link      = $request->input('youtube_link');
        $setting->instagram_link    = $request->input('instagram_link');
        $setting->footer_copyright  = $request->input('footer_copyright');
        $setting->description       = $request->input('description');

        $request->validate(
            [
                'telephone'         => 'required',
                'fax'               => 'required',
                'phone_one'         => 'required',
                'phone_two'         => 'required',
                'email_address'     => 'required',
                'corporate_office'  => 'required',
                'registered_office' => 'required',
                'facebook_link'     => 'required',
                'linkedin_link'     => 'required',
                'youtube_link'      => 'required',
                'instagram_link'    => 'required',
                'footer_copyright'  => 'required',
                'description'       => 'required',
                'logo'              => 'required|mimes:jpg, jpeg, png',
            ],
            [
                'telephone.required'         => 'The telephone is required',
                'fax.required'               => 'The fax is required',
                'phone_one.required'         => 'The phone one is required',
                'phone_two.required'         => 'The phone two is required',
                'email_address.required'     => 'The email address is required',
                'corporate_office.required'  => 'The corporate office is required',
                'registered_office.required' => 'The registered office is required',
                'facebook_link.required'     => 'The facebook link is required',
                'linkedin_link.required'     => 'The linkedin link is required',
                'youtube_link.required'      => 'The youtube link is required',
                'instagram_link.required'    => 'The instagram link is required',
                'footer_copyright.required'  => 'The copyright is required',
                'description.required'       => 'The description is required',
                'logo.required'              => 'The logo is required',
            ]
        );

        if ($request->hasFile('logo')) {
            //old image delete
            $destination = 'uploads/setting_images/' . $setting->logo;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('logo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/setting_images/', $filename);
            $setting->logo = $filename;
        }

        $setting->update();

        $notification = array(
            'message'    => 'Website setting updated successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('setting.view')->with($notification);
    }
}