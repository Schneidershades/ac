<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\AdvertTag;
use App\Models\Category;
use App\Models\Country;
use App\Models\Tag;
use App\Models\Package;
use Session;
use Image;
use Storage;
use Auth;


class AdvertController extends Controller
{
    public function index()
    {
        $adverts = Advert::latest()->finished()->get();
        return view('admin.activities.advert.index', [
            'adverts' => $adverts
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $advert = Advert::find($id);
        foreach($advert->uploads as $upload){
            if($upload->filename){
                $upload->delete();
                if(file_exists($upload->filename)){
                    @unlink($upload->filename);
                }
            }
        }
        $advert->delete();
        Session::flash('success', 'The Advert was deleted Successfully');
        return redirect()->route('account.advert.index');
    }
}
