@extends('layouts.layout')

@section('content')
    <title>Medicine Search Result</title>
    <div class="table">

        <table>

            <tr>
                <th>NAME</th>
                <th>MANUFACTURER</th>
                <th>MG</th>
                <th>PRICE</th>
                <th>STOCK</th>
            </tr>

            @foreach ($medicine as $m)
                <tr>
                    <td>{{ $m->name }}</td>
                    <td>{{ $m->manufacturer }}</td>
                    <td>{{ $m->mg }}</td>
                    <td>{{ $m->unit_price }}</td>
                    <td>{{ $m->stock }}</td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
