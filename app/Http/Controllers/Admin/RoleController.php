<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Session;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
 
    public function index()
    {
        return view('backend.admin.role.index')
            ->with('roles', Role::all());
    }


    public function create()
    {
        return view('backend.admin.role.create');
    }

    public function store(Request $request)
    {
        $role = new Role;
        $role->name = $request->name;
        $role->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        $role = Role::where('id', $id)->first();
        // dd($service);
        if($role == null){
            return redirect()->back();
        }
        return view('backend.admin.role.edit')
            ->with('role', $role);
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
        $role = Role::where('id', $id)->first();
        $role->name = $request->name;
        $role->save();

        // return redirect()->back()->with('success', 'The service price details has been saved');
        return redirect()->route('role.index');

        Session::flash('success', 'The role has been updated');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();

        Session::flash('success', 'The role has been deleted');
    }
}
