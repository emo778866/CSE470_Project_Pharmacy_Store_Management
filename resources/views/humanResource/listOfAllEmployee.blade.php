@extends('layouts.layout')


@section('content')
    <title>All Employee</title>

    <div class="table">

        <table>

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>TYPE</th>
                <th>GENDER</th>
                <th>MOBILE</th>
                <th>ADDRESS</th>
                <th>MEMBER SINCE</th>
            </tr>

            @foreach ($employee as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->name }}</td>
                    <td>{{ $e->type }}</td>
                    <td>{{ $e->gender }}</td>
                    <td>{{ $e->mobile }}</td>
                    <td>{{ $e->address }}</td>
                    <td>{{ date('Y-m-d') }}</td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
