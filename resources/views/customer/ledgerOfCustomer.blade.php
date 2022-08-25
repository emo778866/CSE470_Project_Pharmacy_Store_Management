@extends('layouts.layout')

@section('content')
    <title>Customer Ledger</title>

    <div class="table">

        <table>

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ACTION</th>
            </tr>

            @foreach ($customer as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td><a class="delete" href={{ '/customer/showLedgerOfCustomer/' . $c['id'] }}>LEDGER</a></td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
