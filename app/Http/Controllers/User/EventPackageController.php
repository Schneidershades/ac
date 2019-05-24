<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EventPackage;

class EventPackageController extends Controller
{
     public function index()
    {
        return view('users.event_package')
            ->with('event_packages_all',  EventPackage::all());
    }
}
