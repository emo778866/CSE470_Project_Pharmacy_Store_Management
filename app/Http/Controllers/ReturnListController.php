<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerReturn;
use App\Models\ManufacturerReturn;
use App\Models\WastageReturn;
use Illuminate\Http\Request;


class ReturnListController extends Controller
{
    public function homepageReturnList()
    {
        return view('/returnList/homepageReturnList');
    }

    public function customerReturnItem()
    {
        $customer = Customer::all();
        return view('/returnList/customerReturnItem')->with('customer', $customer);
    }

    public function viewCustomerReturnItem($id)
    {
        CustomerReturn::findOrFail($id);
        $returnList = CustomerReturn::all();
        $data = [
            'returnList' => $returnList,
            'id' => $id
        ];
        return view('/returnList/viewCustomerReturnItem')->with($data);
    }

    public function createManufacturerReturnlist()
    {
        return view('/returnList/createManufacturerReturnList');
    }

    public function store()
    {
        $returnList = new ManufacturerReturn();
        $returnList->id = request('id');
        $returnList->purchase_id    = request('purchase_id');
        $returnList->manufacturer_name = request('name');
        $returnList->date = request('date');
        $returnList->total = request('total');
        $returnList->save();
        return redirect('/returnList')->with('msg', 'Return list created successfully!');
    }

    public function customerReturnList()
    {
        $returnList = CustomerReturn::orderBy('id', 'asc')->get();
        return view('/returnList/customerReturnList')->with('returnList', $returnList);
    }

    public function wastageReturnList()
    {
        $returnList = WastageReturn::all();
        return view('/returnList/wastageReturnList')->with('returnList', $returnList);
    }
}
