@extends('layouts.layout')

@section('content')
    <title>Customer Return Item</title>
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

            @foreach ($returnList as $rl)
                @if ($id ==$rl->id)
                    <tr>
                        <td>{{ $rl->id }}</td>
                        <td>{{ $rl->date }}</td>
                        <td>{{ $rl->invoice }}</td>
                        <td>{{ $rl->medicine }}</td>
                        <td>{{ $rl->quantity }}</td>
                        <td>{{ $rl->unit }}</td>
                        <td>{{ $rl->total }}</td>
                    </tr>
                @endif
            @endforeach

        </table>

    </div>
@endsection
