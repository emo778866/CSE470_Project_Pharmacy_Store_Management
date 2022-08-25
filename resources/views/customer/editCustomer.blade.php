@extends('layouts.layout')


@section('content')
    <title>Update Customer</title>

    <div class="form-body">

        <form action={{ '/customer/saveInDBCustomer/' . $customer->id }} method="POST">

            {{-- without csrf the POST method won't work --}}
            @csrf
            @method('PUT')

            <div class="title">Update</div>

            <div class="customer-manufacturer-details">

                <div class="input-box">
                    <span class="details">Gender</span>
                    <select class="dropdown" name="gender" id="">
                        <option selected>{{ $customer->gender }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Prefer not to say">Prefer not to say</option>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details">Type</span>
                    <select class="dropdown" name="type" id="">
                        <option selected>{{ $customer->type }}</option>
                        <option value="Basic">Basic</option>
                        <option value="Gold">Gold</option>
                        <option value="Silver">Silver</option>
                        <option value="Premium">Premium</option>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" value="{{ $customer->address }}"
                        placeholder="Enter customer address">
                </div>

                <div class="input-box">
                    <span class="details">Mobile No</span>
                    <input type="text" name="mobile" value="{{ $customer->mobile }}"
                        placeholder="Enter customer mobile number" required>
                </div>

                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" value="{{ $customer->name }}" placeholder="Enter customer name"
                        required>
                </div>

                <div class="input-box">
                    <span class="details">Balance</span>
                    <input type="text" name="balance" value="{{ $customer->balance }}"
                        placeholder="Enter customer balance">
                </div>

            </div>

            <div class="button">
                <input type="submit" value="update">
            </div>

        </form>

    </div>
@endsection
