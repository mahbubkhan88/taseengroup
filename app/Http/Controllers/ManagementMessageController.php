<?php

namespace App\Http\Controllers;

use App\Models\ManagementMessageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ManagementMessageController extends Controller
{
    //List management message method
    public function ManagementMessageList()
    {
        $messages = ManagementMessageModel::oldest()->get();
        return view('dashboard.management_message.list', compact('messages'));
    }


    //Create management message method
    public function ManagementMessageCreate()
    {
        return view('dashboard.management_message.create');
    }


    //Insert management message function
    public function ManagementMessageStore(Request $request)
    {
        $message                 = new ManagementMessageModel();
        $message->title          = $request->input('title');
        $message->name           = $request->input('name');
        $message->designation    = $request->input('designation');
        $message->facebook_link  = $request->input('facebook_link');
        $message->twitter_link   = $request->input('twitter_link');
        $message->linkedin_link  = $request->input('linkedin_link');
        $message->description    = $request->input('description');
        $message->image          = $request->input('image');

        $request->validate(
            [
                'title'           => 'required',
                'name'            => 'required',
                'designation'     => 'required',
                'facebook_link'   => 'required',
                'twitter_link'    => 'required',
                'linkedin_link'   => 'required',
                'description'     => 'required',
                'image'           => 'required|mimes:jpg,jpeg,png'
            ],
            [
                'title.required'          => 'The title is required',
                'name.required'           => 'The name is required',
                'designation.required'    => 'The designation is required',
                'facebook_link.required'  => 'The facebook link is required',
                'twitter_link.required'   => 'The twitter link is required',
                'linkedin_link.required'  => 'The linkedin link is required',
                'description.required'    => 'The description is required',
                'image.required'          => 'The image is required',
            ]
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/management_message_images/', $filename);
            $message->image = $filename;
        }

        $message->save();
        // dd($message);

        $notification = array(
            'message'    => 'Management message is inserted',
            'alert-type' => 'success'
        );

        return redirect()->route('management_message.list')->with($notification);
    }


    //View management message method
    public function ManagementMessageView($id)
    {
        $message = ManagementMessageModel::findOrFail($id);
        return view('dashboard.management_message.view', compact('message'));
    }


    //Edit management message method
    public function ManagementMessageEdit($id)
    {
        $message = ManagementMessageModel::findOrFail($id);
        return view('dashboard.management_message.edit', compact('message'));
    }


    //Update management message function
    public function ManagementMessageUpdate(Request $request, $id)
    {
        $message = ManagementMessageModel::findOrFail($id);
        $message->title          = $request->input('title');
        $message->name           = $request->input('name');
        $message->designation    = $request->input('designation');
        $message->facebook_link  = $request->input('facebook_link');
        $message->twitter_link   = $request->input('twitter_link');
        $message->linkedin_link  = $request->input('linkedin_link');
        $message->description    = $request->input('description');

        $request->validate(
            [
                'title'           => 'required',
                'name'            => 'required',
                'designation'     => 'required',
                'facebook_link'   => 'required',
                'twitter_link'    => 'required',
                'linkedin_link'   => 'required',
                'description'     => 'required',
                'image'           => 'required|mimes:jpg,jpeg,png'
            ],
            [
                'title.required'          => 'The title is required',
                'name.required'           => 'The name is required',
                'designation.required'    => 'The designation is required',
                'facebook_link.required'  => 'The facebook link is required',
                'twitter_link.required'   => 'The twitter link is required',
                'linkedin_link.required'  => 'The linkedin link is required',
                'description.required'    => 'The description is required',
                'image.required'          => 'The image is required',
            ]
        );

        if ($request->hasFile('image')) {
            //old image delete
            $destination = 'uploads/management_message_images/' . $message->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/management_message_images/', $filename);
            $message->image = $filename;
        }

        $message->update();

        $notification = array(
            'message'    => 'Management message is updated',
            'alert-type' => 'success'
        );

        return redirect()->route('management_message.list')->with($notification);
    }


    //Delete management message function
    public function ManagementMessageDelete($id)
    {
        $message = ManagementMessageModel::find($id);

        $destination = 'uploads/management_message_images/' . $message->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $message->delete();

        $notification = array(
            'message'    => 'Management message is deleted',
            'alert-type' => 'success'
        );

        return redirect()->route('management_message.list')->with($notification);
    }
}