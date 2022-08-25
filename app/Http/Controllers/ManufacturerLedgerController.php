<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ManufacturerLedger;

class ManufacturerLedgerController extends Controller
{

    public function showLedgerOfManufacturer($id)
    {
        ManufacturerLedger::findOrFail($id);
        $ledger = ManufacturerLedger::all();
        $data = [
            'id'  => $id,
            'ledger' => $ledger
        ];
        return view('/manufacturer/showLedgerOfManufacturer')->with($data);
    }
}
