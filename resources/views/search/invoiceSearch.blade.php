@extends('layouts.layout')

@section('content')
    <title>Invoice Search</title>

    <div class="search">
        <form action="/search/invoiceResultSearch">
            <div>
                <input type="text" name="invoice" placeholder="Search invoice i.e. 1396465583, 1293120911, etc.">
            </div>
            <button type="submit"> Search </button>
        </form>
    </div>
@endsection
