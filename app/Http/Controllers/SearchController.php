<?php

namespace App\Http\Controllers;

use App\Models\CustomerReturn;
use App\Models\Employee;
use App\Models\Manufacturer;
use App\Models\Medicine;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function homepageSearch()
    {
        return view('/search/homepageSearch');
    }

    public function invoiceSearch()
    {
        return view('/search/invoiceSearch');
    }

    public function invoiceResultSearch(Request $invoice)
    {
        $invoice = CustomerReturn::where('invoice', $invoice->input('invoice'))
            ->get();
        return view('/search/invoiceResultSearch')->with('invoice', $invoice);
    }

    public function medicineSearch()
    {
        return view('/search/medicineSearch');
    }

    public function medicineResultSearch(Request $medicine)
    {
        $medicine = Medicine::where('name',  $medicine->input(strtolower('medicine')))
            ->get();
        return view('/search/medicineResultSearch')->with('medicine', $medicine);
    }

    public function employeeSearch()
    {
        return view('/search/employeeSearch');
    }

    public function employeeResultSearch(Request $employee)
    {
        $employee = Employee::where('name',  $employee->input(strtolower('employee')))
            ->get();
        return view('/search/employeeResultSearch')->with('employee', $employee);
    }

    public function manufacturerSearch()
    {
        return view('/search/manufacturerSearch');
    }

    public function manufacturerResultSearch(Request $manufacturer)
    {
        $manufacturer = Manufacturer::where('name',  $manufacturer->input(strtolower('manufacturer')))
            ->get();
        return view('/search/manufacturerResultSearch')->with('manufacturer', $manufacturer);
    }
}
