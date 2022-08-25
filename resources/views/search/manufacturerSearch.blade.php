@extends('layouts.layout')

@section('content')
    <title>Manufacturer Search</title>

    <div class="search">
        <form action="/search/manufacturerResultSearch">
            <div>
                <input type="text" name="manufacturer" placeholder="Search manufacturer i.e. Square, Novartis, etc.">
            </div>
            <button type="submit"> Search </button>
        </form>
    </div>
@endsection
