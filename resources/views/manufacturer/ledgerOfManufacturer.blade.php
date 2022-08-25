@extends('layouts.layout')

@section('content')
    <title>Manufacturer Ledger</title>

    <div class="table">

        <table>

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ACTION</th>
            </tr>

            @foreach ($manufacturer as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->name }}</td>
                    <td><a class="delete" href={{ '/manufacturer/showLedgerOfManufacturer/' . $m['id'] }}>LEDGER</a></td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
