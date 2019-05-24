<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BusinessRegistration;
use App\Models\CompanyRegistration;
use App\Models\TrademarkRegistration;
use App\Models\CopyrightRegistration;
use App\Models\PatentRegistration;
use App\Models\RegistrationItem;
use App\Models\Item;
use Session;

class RegistrationItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function index()
    {
        return view('backend.admin.services.index')
            ->with('items', RegistrationItem::all());
    }

    public function create()
    {
        return view('backend.admin.services.create')
            ->with('items', Item::all());
    }

    public function storeItem(Request $request)
    {

        $item = new Item;

        $item->name = $request->name;
        $item->description = $request->description;
        $item->slug = str_slug($request->name);

        $item->save();

        return redirect()->back();
    }

    public function store(Request $request)
    {   
        $findItem = Item::find($request->item_id);

        if($findItem == null){
            return redirect()->back()->with('error', 'The service price is not available for update');
        }

        $service = new RegistrationItem;
        $service->user_id = Auth::id();
        $service->item_id = $request->item_id;
        $service->amount = $request->amount;
        $service->flexible = $request->flexible;
        $service->flexible_amount = $request->flexible_amount;
        $service->flexible_state = $request->flexible_state;

        $service->save();

        // return redirect()->back()->with('success', 'The service price details has been saved');
        return redirect()->route('service.index');

        Session::flash('success', 'The service price details has been saved');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $service = RegistrationItem::where('id', $id)->first();
        // dd($service);
        if($service == null){
            return redirect()->back();
        }
        return view('backend.admin.services.edit')
                ->with('service', $service)
                ->with('items', Item::all());
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $service = RegistrationItem::where('id', $id)->first();
        $service->user_id = Auth::id();
        $service->item_id = $request->item_id;
        $service->amount = $request->amount;
        $service->flexible = $request->flexible;
        $service->flexible_amount = $request->flexible_amount;
        $service->flexible_state = $request->flexible_state;

        $service->save();

        // return redirect()->back()->with('success', 'The service price details has been saved');
        return redirect()->route('service.index');

        Session::flash('success', 'The service price details has been updated');
    }

    public function destroy($id)
    {
        $service = RegistrationItem::find($id);
        $service->delete();

        Session::flash('success', 'The service price details has been deleted');
    }
}
