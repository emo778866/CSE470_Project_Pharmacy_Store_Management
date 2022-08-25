@extends('layouts.layout')


@section('content')
    <title>Create Return List</title>

    <div class="form-body">

        <form action="/returnList/createManufacturerReturnList" method="POST">

            {{-- without csrf the POST method won't work --}}
            @csrf

            <div class="title">Return List</div>

            <div class="customer-manufacturer-details">

                <div class="input-box">
                    <span class="details">Purchase ID</span>
                    <input type="text" name="purchase_id" placeholder="Enter purchase ID" required>
                </div>

                <div class="input-box">
                    <span class="details">Date</span>
                    <input type="text" name="date" placeholder="Enter purchase date Y-M-D">
                </div>

                <div class="input-box">
                    <span class="details">Total Amount</span>
                    <input type="text" name="total" placeholder="Enter total amount">
                </div>

                <div class="input-box">
                    <span class="details">ID</span>
                    <input type="text" name="id" placeholder="Enter manufacturer ID" required>
                </div>

                <div class="input-box">
                    <span class="details">Manufacturer Name</span>
                    <input type="text" name="name" placeholder="Enter manufacturer name">
                </div>

            </div>

            <div class="button">
                <input type="submit" value="create">
            </div>

        </form>

    </div>
@endsection
