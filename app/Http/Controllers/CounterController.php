<?php

namespace App\Http\Controllers;

use App\Models\CounterModel;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    //List counter method
    public function CounterList()
    {
        $counters = CounterModel::oldest()->get();
        return view('dashboard.counter.list', compact('counters'));
    }


    //Create counter method
    public function CounterCreate()
    {
        return view('dashboard.counter.create');
    }


    //Insert counter function
    public function CounterStore(Request $request)
    {
        $counter          = new CounterModel();
        $counter->title   = $request->input('title');
        $counter->icon    = $request->input('icon');
        $counter->counter = $request->input('counter');

        $request->validate(
            [
                'title'   => 'required',
                'icon'    => 'required',
                'counter' => 'required|integer'
            ],
            [
                'title.required'   => 'The title is required',
                'icon.required'    => 'The icon is required',
                'counter.required' => 'The counter is required',
                'counter.integer'  => 'The counter must be an integer',
            ]
        );

        $counter->save();

        $notification = array(
            'message'    => 'The counter is inserted',
            'alert-type' => 'success'
        );

        return redirect()->route('counter.list')->with($notification);
    }


    //Edit counter method
    public function CounterEdit($id)
    {
        $counter = CounterModel::findOrFail($id);
        return view('dashboard.counter.edit', compact('counter'));
    }


    //Update counter function
    public function CounterUpdate(Request $request, $id)
    {
        $counter        = CounterModel::find($id);
        $counter->title   = $request->input('title');
        $counter->icon    = $request->input('icon');
        $counter->counter = $request->input('counter');

        $request->validate(
            [
                'title'   => 'required',
                'icon'    => 'required',
                'counter' => 'required|integer'
            ],
            [
                'title.required'   => 'The title is required',
                'icon.required'    => 'The icon is required',
                'counter.required' => 'The counter is required',
                'counter.integer'  => 'The counter must be an integer',
            ]
        );

        $counter->update();

        $notification = array(
            'message'    => 'The counter is updated',
            'alert-type' => 'success'
        );

        return redirect()->route('counter.list')->with($notification);
    }


    //Delete counter feedback function
    public function CounterDelete($id)
    {
        $counter = CounterModel::find($id);

        $counter->delete();

        $notification = array(
            'message'    => 'The counter is deleted',
            'alert-type' => 'success'
        );

        return redirect()->route('counter.list')->with($notification);
    }
}