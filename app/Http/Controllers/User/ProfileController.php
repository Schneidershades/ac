<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Models\Country;
use App\Models\Profile;
use App\Models\User;
use Image;
use Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // check if the user has a profile
        $profile = User::where('id', Auth::id())->first();
    
        return view('users.profile_show')
            ->with('user', Auth::user());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.profile_show')
            ->with('user', Auth::user())
            ->with('countries', Country::all());
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        
        if ($request->avatar){
            // add the new photo
            $image = $request->file('image');
            $filename = $user->username.'-'.time().'-'.str_slug($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
            $location = 'assets/images/users/' . $filename;
            
            Image::make($image)->resize(490, 250)->save($location);

            $oldFilename = $user->image;
            // add the new photo
            $user->image = $location;
            // delete the old photo
            Storage::delete($oldFilename);
        }

        $user->fullname = $request->fullname;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->youtube = $request->youtube;
        $user->googleplus = $request->googleplus;
        $user->instagram = $request->instagram;
        $user->pinterest = $request->pinterest;
        $user->linkedin = $request->linkedin;
        $user->vimeo = $request->vimeo;
        $user->biography = $request->biography;
        $user->mobile_number = $request->mobile_number;
        $user->phone_number = $request->phone_number;
        $user->website = $request->website;
        $user->country_id = $request->country_id;
        $user->state_id = $request->state_id;
        $user->city_id = $request->city_id;
        $user->postal_code = $request->postal_code;
        $user->address = $request->address;
        $user->save();

        Session::flash('success', 'Account profile updated');
        return redirect()->back();
    }

    public function show($id)
    {
        return view('users.profile_show')
            ->with('user', Auth::user())
            ->with('countries', Country::all());
    }
}
