@extends('layouts.layout')


@section('content')
    <title>Remove Manufacturer</title>

    <div class="table">

        <table>

            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>MOBILE</th>
                <th>ACTION</th>
            </tr>

            @foreach ($manufacturer as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->name }}</td>
                    <td>{{ $m->mobile }}</td>
                    <td><a class="delete" href={{ '/manufacturer/removeManufacturer/' . $m['id'] }}>DELETE</a></td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
