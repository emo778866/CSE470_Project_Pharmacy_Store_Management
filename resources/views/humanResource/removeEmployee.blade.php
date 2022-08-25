@extends('layouts.layout')


@section('content')
    <title>Remove Employee</title>

    <div class="table">

        <table>

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>MOBILE</th>
                <th>ACTION</th>
            </tr>

            @foreach ($employee as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->name }}</td>
                    <td>{{ $e->mobile }}</td>
                    <td><a class="delete" href={{ '/humanResource/removeEmployee/' . $e['id'] }}>DELETE</a></td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
