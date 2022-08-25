@extends('layouts.layout')

@section('content')
    <title>Employee Payroll</title>
    <div class="table">


        <table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>STATUS</th>
                <th>TYPE</th>
                <th>METHOD</th>
                <th>SALALRY</th>
            </tr>

            @foreach ($payroll as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->name }}</td>
                    <td>{{ $p->status }}</td>
                    <td>{{ $p->type }}</td>
                    <td>{{ $p->payment_method }}</td>
                    <td>{{ $p->salary }}</td>
                </tr>
            @endforeach

        </table>

    </div>
@endsection
