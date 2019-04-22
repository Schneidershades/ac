<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PackageUser;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(!auth()->user()->package){
            $createPackage = new PackageUser;
            $createPackage->user_id = auth()->user()->id;
            $createPackage->package_id = 1;
            $createPackage->save();
        }
        return view('backend.home');
    }
}
