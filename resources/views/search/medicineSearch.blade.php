@extends('layouts.layout')

@section('content')
    <title>Medicine Search</title>

    <div class="search">
        <form action="/search/medicineResultSearch">
            <div>
                <input type="text" name="medicine" placeholder="Search invoice i.e. Napa, Novartis">
            </div>
            <button type="submit"> Search </button>
        </form>
    </div>
@endsection
