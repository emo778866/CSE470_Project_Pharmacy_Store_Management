@extends('layouts.layout')

@section('content')
    <title>Wastage Return List</title>
    <div class="table">

        <table>

            <tr>
                <th>INVOICE</th>
                <th>DATE</th>
                <th>ITEM</th>
                <th>AMOUNT</th>
            </tr>

            @foreach ($returnList as $rl)
                <tr>
                    <td>{{ $rl->invoice }}</td>
                    <td>{{ $rl->date }}</td>
                    <td>{{ $rl->item_name }}</td>
                    <td>{{ $rl->amount }}</td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
