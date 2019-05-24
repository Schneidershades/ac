<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\RegistrationTransaction;
use Session;

class OrderController extends Controller
{
    public function index()
    {
        $transactions = RegistrationTransaction::all();        
        return view('backend.admin.orders.index')
            ->with('transactions', $transactions);
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
        //
    }
}
