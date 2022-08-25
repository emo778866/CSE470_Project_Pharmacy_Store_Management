@extends('layouts.layout')


@section('content')
    <title>Homepage Manufacturer</title>

    <div class="flex-center position-ref full-height">

        <div class="manufacturer">

            <div class="basic">
                <a href="/manufacturer/addManufacturer">Add Manufacturer</a>
            </div>

            <div class="basic">
                <a href="/manufacturer/removeManufacturer">Remove Manufacturer</a>
            </div>

            <div class="basic">
                <a href="/manufacturer/topManufacturer">Top Manufacturer</a>
            </div>

            <div class="basic">
                <a href="/manufacturer/listOfAllManufacturer">All Manufacturer List</a>
            </div>

            <div class="basic">
                <a href="/manufacturer/ledgerOfManufacturer">Manufacturer Ledger</a>
            </div>

        </div>

    </div>
@endsection
