@extends('layouts.layout')


@section('content')
    <title>Add Customer</title>

    <div class="form-body">

        <form action="/customer/addCustomer" method="POST">

            {{-- without csrf the POST method won't work --}}
            @csrf

            <div class="title">Registration</div>

            <div class="customer-manufacturer-details">

                <div class="input-box">
                    <span class="details">Gender</span>
                    <select class="dropdown" name="gender" id="">
                        <option selected disabled>Choose customer gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Prefer not to say">Prefer not to say</option>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details">Type</span>
                    <select class="dropdown" name="type" id="">
                        <option selected disabled>Choose customer type</option>
                        <option value="Basic">Basic</option>
                        <option value="Gold">Gold</option>
                        <option value="Silver">Silver</option>
                        <option value="Premium">Premium</option>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="Enter customer address">
                </div>

                <div class="input-box">
                    <span class="details">Mobile No</span>
                    <input type="text" name="mobile" placeholder="Enter customer mobile number" required>
                </div>

                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" placeholder="Enter customer name" required>
                </div>

                <div class="input-box">
                    <span class="details">Balance</span>
                    <input type="text" name="balance" placeholder="Enter customer balance">
                </div>

            </div>

            <div class="button">
                <input type="submit" value="register">
            </div>

        </form>

    </div>
@endsection
