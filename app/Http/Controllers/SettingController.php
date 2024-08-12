<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function edit()
    {
        $setting=Setting::first();
        return view('setting.edit',compact('setting'));
    }

    // public function edit()
    // {
    //     return view('setting.edit',compact('settings'));
    // }
    public function update(Request $request, Setting $setting)
    {

        $request->validate([
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'opentime'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'linkedin'=>'required',
         ]);
        $setting = Setting::find($request->id);
        $setting->address=$request->address;
        $setting->phone=$request->phone;
        $setting->email=$request->email;
        $setting->opentime=$request->opentime;
        $setting->facebook=$request->facebook;
        $setting->twitter=$request->twitter;
        $setting->linkedin=$request->linkedin;
        $setting->save();
        return redirect()->route('setting.edit')->with('success','setting update');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
