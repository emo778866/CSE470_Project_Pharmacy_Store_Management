@extends('layouts.layout')

@section('content')
    <title>Invoice Search Result</title>
    <div class="table">

        <table>

            <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>INVOICE</th>
                <th>MEDICINE</th>
                <th>QUANTITY</th>
                <th>UNIT</th>
                <th>TOTAL</th>
            </tr>

            @foreach ($invoice as $i)
                <tr>
                    <td>{{ $i->id }}</td>
                    <td>{{ $i->date }}</td>
                    <td>{{ $i->invoice }}</td>
                    <td>{{ $i->medicine }}</td>
                    <td>{{ $i->quantity }}</td>
                    <td>{{ $i->unit }}</td>
                    <td>{{ $i->total }}</td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
