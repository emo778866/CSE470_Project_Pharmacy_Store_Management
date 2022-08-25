<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function homepageCustomer()
    {
        return view('/customer/homepageCustomer');
    }

    public function addCustomer()
    {
        return view('/customer/addCustomer');
    }

    public function store()
    {
        $customer = new Customer();
        $customer->type = request('type');
        $customer->name = request('name');
        $customer->gender = request('gender');
        $customer->mobile = request('mobile');
        $customer->balance = request('balance');
        $customer->address = request('address');
        $customer->save();
        return redirect('/customer')->with('msg', 'Customer added successfully!');
    }

    public function removeList()
    {
        $customer = Customer::all();
        return view('/customer/removeCustomer')->with('customer', $customer);
    }

    public function removeCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect('/customer/removeCustomer');
    }

    public function updateList()
    {
        $customer = Customer::all();
        return view('/customer/updateCustomer')->with('customer', $customer);
    }

    public function updateCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        return view('/customer/editCustomer')->with('customer', $customer);
    }

    public function saveInDBCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->type = request('type');
        $customer->name = request('name');
        $customer->gender = request('gender');
        $customer->mobile = request('mobile');
        $customer->balance = request('balance');
        $customer->address = request('address');
        $customer->update();
        return redirect('/customer')->with('msg', "Updation done");
    }

    public function listOfAllCustomer()
    {
        $customer = Customer::all();
        return view('/customer/listOfAllCustomer')->with('customer', $customer);
    }

    public function ledgerOfCustomer()
    {
        $customer = Customer::all();
        return view('/customer/ledgerOfCustomer')->with('customer', $customer);
    }

    public function showLedgerOfCustomer($id)
    {
        return view('/customer/showLedgerOfCustomer')->with('id', $id);
    }
}
