@extends('layouts.layout')


@section('content')
    <title>All Customer</title>

    <div class="table">

        <table>

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>TYPE</th>
                <th>GENDER</th>
                <th>MOBILE</th>
                <th>ADDRESS</th>
                <th>BALANCE</th>
                <th>MEMBER SINCE</th>
            </tr>

            @foreach ($customer as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->type }}</td>
                    <td>{{ $c->gender }}</td>
                    <td>{{ $c->mobile }}</td>
                    <td>{{ $c->address }}</td>
                    <td>{{ $c->balance }}</td>
                    <td>{{ date('Y-m-d')}}</td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
