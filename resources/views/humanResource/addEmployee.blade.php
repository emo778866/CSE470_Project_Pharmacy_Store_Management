@extends('layouts.layout')


@section('content')
    <title>Add Employee</title>

    <div class="form-body">

        <form action="/humanResource/addEmployee" method="POST">

            {{-- without csrf the POST method won't work --}}
            @csrf

            <div class="title">Registration</div>

            <div class="customer-manufacturer-details">

                <div class="input-box">
                    <span class="details">Gender</span>
                    <select class="dropdown" name="gender" id="">
                        <option selected disabled>Choose employee gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Prefer not to say">Prefer not to say</option>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details">Type</span>
                    <select class="dropdown" name="type" id="">
                        <option selected disabled>Choose employee type</option>
                        <option value="Salesman">Salesman</option>
                        <option value="Manager">Manager</option>
                        <option value="Cashier">Cashier</option>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="text" name="address" placeholder="Enter employee address">
                </div>

                <div class="input-box">
                    <span class="details">Mobile No</span>
                    <input type="text" name="mobile" placeholder="Enter employee mobile number" required>
                </div>

                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="name" placeholder="Enter employee name" required>
                </div>

            </div>

            <div class="button">
                <input type="submit" value="register">
            </div>

        </form>

    </div>
@endsection
