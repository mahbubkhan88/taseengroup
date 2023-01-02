<?php

namespace App\Http\Controllers;

use App\Models\ClientFeedbackModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientFeedbackController extends Controller
{
    //List client feedback method
    public function ClientFeedbackList()
    {
        $clientFeedback = ClientFeedbackModel::latest()->get();
        return view('dashboard.client_feedback.list', compact('clientFeedback'));
    }


    //Create client feedback method
    public function ClientFeedbackCreate()
    {
        return view('dashboard.client_feedback.create');
    }


    //Insert client feedback function
    public function ClientFeedbackStore(Request $request)
    {
        $clientFeedback = new ClientFeedbackModel();
        $clientFeedback->client_name  = $request->input('client_name');
        $clientFeedback->designation  = $request->input('designation');
        $clientFeedback->comment      = $request->input('comment');
        $clientFeedback->image        = $request->input('image');

        $request->validate(
            [
                'client_name'   => 'required',
                'designation'   => 'required',
                'comment'       => 'required',
                'image'         => 'required|mimes:jpg,jpeg,png'
            ],
            [
                'client_name.required'  => 'Client name is required',
                'designation.required'  => 'Client designation is required',
                'comment.required'      => 'Client comment is required',
                'image.required'        => 'Client image is required',
            ]
        );

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/client_feedback_images/', $filename);
            $clientFeedback->image = $filename;
        }

        $clientFeedback->save();

        $notification = array(
            'message'    => 'Client feedback inserted successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('client_feedback.list')->with($notification);
    }


    //View client feedback method
    public function ClientFeedbackView($id)
    {
        $comment = ClientFeedbackModel::findOrFail($id);
        return view('dashboard.client_feedback.view', compact('comment'));
    }


    //Edit client feedback method
    public function ClientFeedbackEdit($id)
    {
        $comment = ClientFeedbackModel::findOrFail($id);
        return view('dashboard.client_feedback.edit', compact('comment'));
    }


    //Update client feedback function
    public function ClientFeedbackUpdate(Request $request, $id)
    {
        $data = ClientFeedbackModel::find($id);
        $data->client_name  = $request->input('client_name');
        $data->designation  = $request->input('designation');
        $data->comment      = $request->input('comment');

        $request->validate(
            [
                'client_name' => 'required',
                'designation' => 'required',
                'comment'     => 'required',
                'image'       => 'required|mimes:jpg, jpeg, png',
            ],
            [
                'client_name.required'  => 'Client name is required',
                'designation.required'  => 'Client designation is required',
                'comment.required'      => 'Client comment is required',
                'image.required'        => 'Client image is required',
            ]
        );

        if ($request->hasFile('image')) {
            //old image delete
            $destination = 'uploads/client_feedback_images/' . $data->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/client_feedback_images/', $filename);
            $data->image = $filename;
        }

        $data->update();

        $notification = array(
            'message'    => 'Client feedback updated successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('client_feedback.list')->with($notification);
    }


    //Delete client feedback function
    public function ClientFeedbackDelete($id)
    {
        $comment = ClientFeedbackModel::find($id);

        $destination = 'uploads/client_feedback_images/' . $comment->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $comment->delete();

        $notification = array(
            'message'    => 'Client feedback deleted successfull',
            'alert-type' => 'success'
        );

        return redirect()->route('client_feedback.list')->with($notification);
    }
}