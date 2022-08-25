@extends('layouts.layout')


@section('content')
    <title>home</title>

    {{-- @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif --}}
    <div class="flex-center position-ref full-height">

        <div class="homepage">
            <div class="basic">
                <a href="/customer">Customer</a>
            </div>
            <div class="basic">
                <a href="/manufacturer">Manufacturer</a>
            </div>
            <div class="basic">
                <a href="/returnList">Return List</a>
            </div>
            <div class="basic">
                <a href="/humanResource">Human Resource</a>
            </div>
            <div class="basic">
                <a href="/search" class="">Search</a>
            </div>

        </div>

    </div>
@endsection
