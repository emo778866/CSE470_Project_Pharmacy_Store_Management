@extends('layouts.layout')

@section('content')
    <title>Top Manufacturer</title>
    <div class="table">

        <table>

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>MOBILE</th>
                <th>CITY</th>
                <th>DIVISION</th>
                <th>COLLABORATION SINCE</th>
            </tr>

            @foreach ($manufacturer as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->name }}</td>
                    <td>{{ $m->email }}</td>
                    <td>{{ $m->mobile }}</td>
                    <td>{{ $m->city }}</td>
                    <td>{{ $m->division }}</td>
                    <td>{{ date('Y-m-d') }}</td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
