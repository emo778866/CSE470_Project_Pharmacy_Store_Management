@extends('layouts.layout')


@section('content')


@section('content')
    <title>Add Manufacturer</title>

    <div class="form-body">

        <form action="/manufacturer/addManufacturer" method="POST">

            {{-- without csrf the POST method won't work --}}
            @csrf

            <div class="title">Registration</div>

            <div class="customer-manufacturer-details">

                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" name="email" placeholder="Enter manufacturer email">
                </div>

                <div class="input-box">
                    <span class="details">City</span>
                    <input type="text" name="city" placeholder="Enter manufacturer city">
                </div>

                <div class="input-box">
                    <span class="details">Name</span>
                    <input type="text" name="name" placeholder="Enter manufacturer name" required>
                </div>

                <div class="input-box">
                    <span class="details">Division</span>
                    <select class="dropdown" name="division" id="">
                        <option value="Dhaka">Dhaka</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option selected disabled>Choose Division</option>
                    </select>
                </div>

                <div class="input-box">
                    <span class="details">ID</span>
                    <input type="text" name="id" placeholder="Enter manufacturer id">
                </div>

                <div class="input-box">
                    <span class="details">Mobile</span>
                    <input type="text" name="mobile" placeholder="Enter manufacturer mobile">
                </div>

            </div>

            <div class="button">
                <input type="submit" value="register">
            </div>

        </form>

    </div>
@endsection
