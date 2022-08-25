@extends('layouts.layout')


@section('content')
    <title>Homepage Return List</title>

    <div class="flex-center position-ref full-height">

        <div class="returnList">

            <div class="basic">
                <a href="/returnList/customerReturnItem">View Customer Return Item</a>
            </div>

            <div class="basic">
                <a href="/returnList/createManufacturerReturnList">Create Manufacturer Return List</a>
            </div>

            <div class="basic">
                <a href="/returnList/customerReturnList">View Customer Return List</a>
            </div>

            <div class="basic">
                <a href="/returnList/wastageReturnList">View Wastage Return List</a>
            </div>

        </div>

    </div>
@endsection
