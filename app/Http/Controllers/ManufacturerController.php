<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function homepageManufacturer()
    {
        return view('/manufacturer/homepageManufacturer');
    }

    public function addManufacturer()
    {
        return view('/manufacturer/addManufacturer');
    }

    public function store()
    {
        $manufacturer = new Manufacturer();
        $manufacturer->id = request('id');
        $manufacturer->name = request('name');
        $manufacturer->email = request('email');
        $manufacturer->mobile = request('mobile');
        $manufacturer->city = request('city');
        $manufacturer->division = request('division');
        $manufacturer->save();
        return redirect('/manufacturer')->with('msg', 'manufacturer added successfully!');
    }

    public function removeList()
    {
        $manufacturer = Manufacturer::all();
        return view('/manufacturer/removeManufacturer')->with('manufacturer', $manufacturer);
    }

    public function removeManufacturer($id)
    {
        $manufacturer = Manufacturer::findOrFail($id);
        $manufacturer->delete();
        return redirect('/manufacturer/removeManufacturer');
    }

    public function listOfAllManufacturer()
    {
        $manufacturer = Manufacturer::all();
        return view('/manufacturer/listOfAllManufacturer')->with('manufacturer', $manufacturer);
    }

    public function ledgerOfManufacturer()
    {
        $manufacturer = Manufacturer::all();
        return view('/manufacturer/ledgerOfManufacturer')->with('manufacturer', $manufacturer);
    }

    public function topManufacturer()
    {
        $manufacturer = Manufacturer::orderBy('created_at', 'asc')->limit(5)->get();
        return view('/manufacturer/topManufacturer')->with('manufacturer', $manufacturer);
    }
}
