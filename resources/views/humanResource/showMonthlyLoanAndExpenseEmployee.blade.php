@extends('layouts.layout')

@section('content')
    <title>Loan And Expense</title>

    <div class="table">

        <table>

            <tr>
                <th>DATE</th>
                <th>LOAN</th>
                <th>DEBT</th>
            </tr>

            @foreach ($data['loanAndExpense'] as $lae)
                @if ($data['id'] == $lae->id)
                    <tr>
                        <td>{{ $lae->id }}</td>
                        <td>{{ $lae->loan }}</td>
                        <td>{{ $lae->debt }}</td>
                    </tr>
                @endif
            @endforeach

            <tr>
                <td>TOTAL</td>
                <td>{{ $data['SumOfLoan'] }}</td>
                <td>{{ $data['SumOfDebt'] }}</td>
            </tr>

        </table>

    </div>
@endsection
