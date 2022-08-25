@extends('layouts.layout')


@section('content')
    <title>Homepage Human Resource</title>

    <div class="flex-center position-ref full-height">

        <div class="customer">

            <div class="basic">
                <a href="/humanResource/addEmployee">Add Employee</a>
            </div>

            <div class="basic">
                <a href="/humanResource/removeEmployee">Remove Employee</a>
            </div>

            <div class="basic">
                <a href="/humanResource/listOfAllEmployee">All Employee List</a>
            </div>

            <div class="basic">
                <a href="/humanResource/showPayrollInformationEmployee">Show Payroll Information</a>
            </div>

            <div class="basic">
                <a href="/humanResource/monthlyLoanAndExpenseEmployee">Monthly Loan & Expense</a>
            </div>

        </div>

    </div>
@endsection
