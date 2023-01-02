<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    //List client method
    public function ClientList()
    {
        $clients = ClientModel::oldest()->get();
        return view('dashboard.client.list', compact('clients'));
    }


    //Create client method
    public function ClientCreate()
    {
        return view('dashboard.client.create');
    }


    //Insert client function
    public function ClientStore(Request $request)
    {
        $client        = new ClientModel();
        $client->name  = $request->input('name');
        $client->logo  = $request->input('logo');

        $request->validate(
            [
                'name'   => 'required',
                'logo'  => 'required|mimes:jpg,jpeg,png'
            ],
            [
                'name.required'  => 'Organization name is required',
                'logo.required' => 'Organization logo is required',
            ]
        );

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/client_images/', $filename);
            $client->logo = $filename;
        }

        $client->save();

        $notification = array(
            'message'    => 'Organization information inserted',
            'alert-type' => 'success'
        );

        return redirect()->route('client.list')->with($notification);
    }


    //Edit client method
    public function ClientEdit($id)
    {
        $client = ClientModel::findOrFail($id);
        return view('dashboard.client.edit', compact('client'));
    }


    //Update client function
    public function ClientUpdate(Request $request, $id)
    {
        $client        = ClientModel::find($id);
        $client->name  = $request->input('name');

        $request->validate(
            [
                'name'  => 'required',
                'logo' => 'required|mimes:jpg, jpeg, png',
            ],
            [
                'name.required'  => 'Organization name is required',
                'logo.required'  => 'Organization logo is required',
            ]
        );

        if ($request->hasFile('logo')) {
            //old image delete
            $destination = 'uploads/client_images/' . $client->logo;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            //new image upload
            $file = $request->file('logo');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/client_images/', $filename);
            $client->logo = $filename;
        }

        $client->update();

        $notification = array(
            'message'    => 'Organization information updated',
            'alert-type' => 'success'
        );

        return redirect()->route('client.list')->with($notification);
    }


    //Delete client feedback function
    public function ClientDelete($id)
    {
        $client = ClientModel::find($id);

        $destination = 'uploads/client_images/' . $client->logo;
        if (File::exists($destination)) {
            File::delete($destination);
        }

        $client->delete();

        $notification = array(
            'message'    => 'Organization information deleted',
            'alert-type' => 'success'
        );

        return redirect()->route('client.list')->with($notification);
    }
}