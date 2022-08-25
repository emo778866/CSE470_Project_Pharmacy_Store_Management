@extends('layouts.layout')


@section('content')
    <title>Update Customer</title>

    <div class="table">

        <table>

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>MOBILE</th>
                <th>ACTION</th>
            </tr>

            @foreach ($customer as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->mobile }}</td>
                    <td><a class="update" href={{ '/customer/updateCustomer/' . $c['id'] }}>UPDATE</a></td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
