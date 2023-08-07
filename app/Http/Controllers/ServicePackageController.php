<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class ServicePackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages', compact('packages'));
    }
    public function homeindex()
    {
        $packages = Package::all();
        return view('bike-listing', compact('packages'));
    }

    public function create()
    {
        return view('admin.packagesAdd');
    }

    private $storagePath = 'public/images';

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'delivery_type' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size: 2MB (2048 KB).
        ]);
    
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
    
       
        $package = new Package;
        $package->name = $request->input('name');
        $package->price = $request->input('price');
        $package->delivery_type = $request->input('delivery_type');
        $package->image = $fileName;
        $package->save();

      
    
        return redirect()->route('packages.index')
            ->with('success', 'Package created successfully.');
    }
    

    public function edit($id)
    {
        $package = Package::find($id);
        return view('admin.packagesEdit', compact('package'));
    }
    public function details_page($id)
    {
        $package = Package::find($id);
        return view('vehical-details62a2', compact('package'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'delivery_type' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Max file size: 2MB (2048 KB).
        ]);
    
        $fileName = time() . '.' . $request->image->extension();
        $request->image->storeAs('public/images', $fileName);
    
        $package = Package::find($id);
    
        // Update package data based on the request
 
       
        $package->name = $request->input('name');
        $package->price = $request->input('price');
        $package->delivery_type = $request->input('delivery_type');
        $package->image = $fileName;
        $package->save();


    
        return redirect()->route('packages.index')
            ->with('success', 'Package updated successfully.');
    }
    
    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();

        return redirect()->route('packages.index')
            ->with('success', 'Package deleted successfully.');
    }
}
