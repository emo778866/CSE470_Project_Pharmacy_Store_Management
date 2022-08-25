@extends('layouts.layout')


@section('content')
    <title>Homepage Search</title>

    <div class="flex-center position-ref full-height">

        <div class="customer">

            <div class="basic">
                <a href="/search/invoiceSearch">Invoice</a>
            </div>

            <div class="basic">
                <a href="/search/medicineSearch">Medicine</a>
            </div>

            <div class="basic">
                <a href="/search/employeeSearch">Employee</a>
            </div>

            <div class="basic">
                <a href="/search/manufacturerSearch">Manufacturer</a>
            </div>

        </div>

    </div>
@endsection
