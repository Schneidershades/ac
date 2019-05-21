<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Models\Country;
use App\Models\Profile;
use App\Models\User;
use App\Models\Functions\Helper;
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

    public function edit($id)
    {
        return view('users.profile_edit')
            ->with('user', Auth::user())
            ->with('countries', Country::all());
    }


    public function save(Request $request, $id)
    {
        $user = User::find($id);
        
        if ($request->image){
            // add the new photo
            $image = $request->file('image');
            $filename = $user->username.'-'.time().'-'.str_slug($image->getClientOriginalName()).'.'.$image->getClientOriginalExtension();
            $location = 'assets/images/profile/' . $filename;
            
            Image::make($image)->resize(490, 250)->save($location);

            $oldFilename = $user->image;
            // add the new photo
            $user->image = $location;
            // delete the old photo
            Storage::delete($oldFilename);
        }


        $user->name = $request->fullname;
        $user->official_email = $request->official_email;
        $user->phone1 = $request->phone1;
        $user->phone2 = $request->phone2;
        $user->website = $request->website;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->youtube = $request->youtube;
        $user->googleplus = $request->googleplus;
        $user->instagram = $request->instagram;
        $user->pinterest = $request->pinterest;
        $user->linkedin = $request->linkedin;
        $user->whatsapp = $request->whatsapp;
        // $user->vimeo = $request->vimeo;
        $user->country_id = $request->country_id;
        $user->category_id = $request->category_id;
        $user->state_id = $request->state_id;
        $user->city_id = $request->city_id;
        $user->postal_code = $request->postal_code;
        $user->address = $request->address;
        $user->about = $request->about;
        $user->testimonials = $request->testimonials;
        $user->show_testimonials = $request->show_testimonials;
        $user->save();

        Session::flash('success', 'Account profile updated');
        return redirect()->route('profile.show', auth()->user()->id);
    }

    public function show($id)
    {
        return view('users.profile_show')
            ->with('user', Auth::user())
            ->with('countries', Country::all());
    }
}
