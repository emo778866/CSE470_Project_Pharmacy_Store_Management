<?php

namespace App\Http\Controllers;

use App\Models\CustomerLedger;

class CustomerLedgerController extends Controller
{

    public function showLedgerOfCustomer($id)
    {
        CustomerLedger::findOrFail($id);
        $ledger = CustomerLedger::all();
        $data = [
            'id'  => $id,
            'ledger' => $ledger
        ];
        return view('/customer/showLedgerOfCustomer')->with($data);
    }
}
