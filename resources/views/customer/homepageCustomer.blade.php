@extends('layouts.layout')


@section('content')
    <title>Homepage Customer</title>

    <div class="flex-center position-ref full-height">

        <div class="customer">

            <div class="basic">
                <a href="/customer/addCustomer">Add Customer</a>
            </div>

            <div class="basic">
                <a href="/customer/removeCustomer">Remove Customer</a>
            </div>

            <div class="basic">
                <a href="/customer/updateCustomer">Update Customer</a>
            </div>

            <div class="basic">
                <a href="/customer/listOfAllCustomer">All Customer List</a>
            </div>

            <div class="basic">
                <a href="/customer/ledgerOfCustomer">Customer Ledger</a>
            </div>

        </div>

    </div>
@endsection
