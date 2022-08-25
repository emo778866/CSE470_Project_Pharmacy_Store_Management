@extends('layouts.layout')

@section('content')
    <title>Loan & Expense</title>

    <div class="loan-and-expense">

        <div class="center">
            <span>Choose Month</span>
        </div>

        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '1' }}">January</a></div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '2' }}">February</a></div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '3' }}">March</a></div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '4' }}">April</a></div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '5' }}">May</a></div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '6' }}">June</a></div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '7' }}">July</a></div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '8' }}">August</a></div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '9' }}">September</a>
        </div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '10' }}">October</a>
        </div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '11' }}">November</a>
        </div>
        <div class="center atag"><a href="{{ '/humanResource/showMonthlyLoanAndExpenseEmployee/' . '12' }}">December</a>
        </div>

    </div>
@endsection
