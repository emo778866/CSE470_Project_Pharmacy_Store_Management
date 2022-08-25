@extends('layouts.layout')

@section('content')
    <title>Manufacturer Ledger</title>
    <div class="table">


        <table>
            <tr>
                <th>ID</th>
                <th>DATE</th>
                <th>DEBIT</th>
                <th>CREDIT</th>
            </tr>

            @foreach ($ledger as $l)
                @if ($id == $l->id)
                    <tr>
                        <td>{{ $l->id }}</td>
                        <td>{{ $l->date }}</td>
                        <td>{{ $l->debit }}</td>
                        <td>{{ $l->credit }}</td>
                    </tr>
                @endif
            @endforeach

        </table>

    </div>
@endsection
