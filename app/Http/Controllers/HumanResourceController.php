<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\LoanAndExpense;
use App\Models\Payroll;
use Illuminate\Http\Request;

class HumanResourceController extends Controller
{
    public function humanResource()
    {
        return view('/humanResource/homePageHumanResource');
    }

    public function addEmployee()
    {
        return view('humanResource/addEmployee');
    }

    public function store()
    {
        $employee = new Employee();
        $employee->type = request('type');
        $employee->name = request('name');
        $employee->gender = request('gender');
        $employee->mobile = request('mobile');
        $employee->balance = request('balance');
        $employee->address = request('address');
        $employee->save();
        return redirect('/humanResource')->with('msg', 'Employee added successfully!');
    }

    public function removeList()
    {
        $employee = Employee::all();
        return view('/humanResource/removeEmployee')->with('employee', $employee);
    }

    public function removeCustomer($id)
    {
        $customer = Employee::findOrFail($id);
        $customer->delete();
        return redirect('/humanResource/removeEmployee');
    }

    public function listOfAllEmployee()
    {
        $employee = Employee::all();
        return view('/humanResource/listOfAllEmployee')->with('employee', $employee);
    }

    public function showPayrollInformationEmployee()
    {
        $payroll = Payroll::all();
        return view('/humanResource/showPayrollInformationEmployee')->with('payroll', $payroll);
    }

    public function monthlyLoanAndExpenseEmployee()
    {
        return view('/humanResource/monthlyLoanAndExpenseEmployee');
    }

    public function showMonthlyLoanAndExpenseEmployee($id)
    {
        LoanAndExpense::findOrFail($id);
        $loanAndExpense = LoanAndExpense::all();
        $SumOfLoan = LoanAndExpense::where('id', '=', $id)->sum('loan');
        $SumOfDebt = LoanAndExpense::where('id', '=', $id)->sum('debt');
        $data = [
            'loanAndExpense' => $loanAndExpense,
            'id' => $id,
            'SumOfLoan' => $SumOfLoan,
            'SumOfDebt' => $SumOfDebt
        ];
        return view('/humanResource/showMonthlyLoanAndExpenseEmployee')->with('data', $data);
    }
}
