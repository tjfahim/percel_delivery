<?php

namespace App\Http\Controllers;

use App\Models\UltraDelivery;
use Illuminate\Http\Request;

class UltraServiceDeliveryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'from_name' => 'nullable|string',
            'from_address' => 'nullable|string',
            'to_name' => 'nullable|string',
            'to_address' => 'required|string',
            'from_contact_no' => 'nullable|string',
            'to_contact_no' => 'nullable|string',
            'delivery_type' => 'nullable|string',
            'payment_category' => 'nullable|string',
            'payment_id' => 'nullable|string',
            'message' => 'nullable|string',
        ]);
    
        $ultraDelivery = new UltraDelivery();
        $ultraDelivery->user_id = auth()->id();
        $ultraDelivery->from_name = $request->input('from_name');
        $ultraDelivery->from_address = $request->input('from_address');
        $ultraDelivery->to_name = $request->input('to_name');
        $ultraDelivery->to_address = $request->input('to_address');
        $ultraDelivery->from_contact_no = $request->input('from_contact_no');
        $ultraDelivery->to_contact_no = $request->input('to_contact_no');
        $ultraDelivery->delivery_type = $request->input('delivery_type');
        $ultraDelivery->payment_category = $request->input('payment_category');
        $ultraDelivery->payment_id = $request->input('payment_id');
        $ultraDelivery->message = $request->input('message');
        $ultraDelivery->status = 'pending';
    
        $ultraDelivery->save();
    
        return redirect()->route('ultradeliveries.index')
            ->with('success', 'UltraDelivery created successfully.');
    }
    


    public function index()
    {
        // Retrieve all UltraDelivery records from the database
        $ultradeliveries = UltraDelivery::where('user_id', auth()->id())->get();

        return view('user.UltraDelivery', compact('ultradeliveries'));
    }
    public function index2()
    {
        // Retrieve all UltraDelivery records from the database
        $ultradeliveries = UltraDelivery::all();

        return view('admin.UltraDelivery', compact('ultradeliveries'));
    }


    public function update(Request $request, $id)
    {
   
    
        $ultradeliveries = UltraDelivery::find($id);
    
        // Update ultradeliveries data based on the request
        $ultradeliveries->status = 'delivered';
    
        $ultradeliveries->save();
    
        return redirect()->route('ultradeliveries.index2')
            ->with('success', 'Package updated successfully.');
    }
    


}
