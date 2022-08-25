<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerLedgerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HumanResource;
use App\Http\Controllers\HumanResourceController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\ManufacturerLedgerController;
use App\Http\Controllers\ReturnListController;
use App\Http\Controllers\SearchController;
use App\Models\Customer;
use App\Models\CustomerLedger;
use App\Models\Manufacturer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// laravel's default homepage
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// *** successfull login ***
Route::get('/home', [HomeController::class, 'index'])->name('home');

// *** homepage view containing all the five requirements ***

// auth helps to prevent un-logged users to view the page
Route::get('/homepage', [HomeController::class, 'homepage'])->middleware('auth');


// *** all realted to customer ***


// customer homepage
Route::get('/customer', [CustomerController::class, 'homepageCustomer'])->middleware('auth');

// adding a customer
Route::get('/customer/addCustomer', [CustomerController::class, 'addCustomer'])->middleware('auth');

Route::post('/customer/addCustomer', [CustomerController::class, 'store'])->middleware('auth');

// removing a customer
Route::get('/customer/removeCustomer', [CustomerController::class, 'removeList'])->middleware('auth');

Route::get('/customer/removeCustomer/{id}', [CustomerController::class, 'removeCustomer'])->middleware('auth');

// updating a customer information
Route::get('/customer/updateCustomer', [CustomerController::class, 'updateList'])->middleware('auth');

Route::get('/customer/updateCustomer/{id}', [CustomerController::class, 'updateCustomer'])->middleware('auth');

Route::put('/customer/saveInDBCustomer/{id}', [CustomerController::class, 'saveInDBCustomer'])->middleware('auth');

// all customer list
Route::get('/customer/listOfAllCustomer', [CustomerController::class, 'listOfAllCustomer'])->middleware('auth');

// showing customer ledger
Route::get('/customer/ledgerOfCustomer', [CustomerController::class, 'ledgerOfCustomer'])->middleware('auth');

Route::get('/customer/showLedgerOfCustomer/{id}', [CustomerLedgerController::class, 'showLedgerOfCustomer'])->middleware('auth');


// *** all realted to manufacturer ***


// manufacturer homepage
Route::get('/manufacturer', [ManufacturerController::class, 'homepageManufacturer'])->middleware('auth');

// adding a manufacturer
Route::get('/manufacturer/addManufacturer', [ManufacturerController::class, 'addManufacturer'])->middleware('auth');

Route::post('/manufacturer/addManufacturer', [ManufacturerController::class, 'store'])->middleware('auth');

// removing a manufacturer
Route::get('/manufacturer/removeManufacturer', [ManufacturerController::class, 'removeList'])->middleware('auth');

Route::get('/manufacturer/removeManufacturer/{id}', [ManufacturerController::class, 'removeManufacturer'])->middleware('auth');

// top manufacturer
Route::get('/manufacturer/topManufacturer', [ManufacturerController::class, 'topManufacturer'])->middleware('auth');

// all manufacturer list
Route::get('/manufacturer/listOfAllManufacturer', [ManufacturerController::class, 'listOfAllManufacturer'])->middleware('auth');

// showing manufacturer ledger
Route::get('/manufacturer/ledgerOfManufacturer', [ManufacturerController::class, 'ledgerOfManufacturer'])->middleware('auth');

Route::get('/manufacturer/showLedgerOfManufacturer/{id}', [ManufacturerLedgerController::class, 'showLedgerOfManufacturer'])->middleware('auth');


// *** all realted to return list ***


// return list homepage
Route::get('/returnList', [ReturnListController::class, 'homepageReturnList'])->middleware('auth');

// customer return item view
Route::get('/returnList/customerReturnItem', [ReturnListController::class, 'customerReturnItem'])->middleware('auth');

Route::get('/returnList/viewCustomerReturnItem/{id}', [ReturnListController::class, 'viewCustomerReturnItem'])->middleware('auth');

// creating manufacturer return list
Route::get('/returnList/createManufacturerReturnList', [ReturnListController::class, 'createManufacturerReturnList'])->middleware('auth');

Route::post('/returnList/createManufacturerReturnList', [ReturnListController::class, 'store'])->middleware('auth');

// customer return list
Route::get('/returnList/customerReturnList', [ReturnListController::class, 'customerReturnList'])->middleware('auth');

// wastage return list
Route::get('/returnList/wastageReturnList', [ReturnListController::class, 'wastageReturnList'])->middleware('auth');


// *** all realted to return list ***


// return list homepage
Route::get('/humanResource', [HumanResourceController::class, 'humanResource'])->middleware('auth');

// adding an employee
Route::get('/humanResource/addEmployee', [HumanResourceController::class, 'addEmployee'])->middleware('auth');

Route::post('/humanResource/addEmployee', [HumanResourceController::class, 'store'])->middleware('auth');

// removing an employee
Route::get('/humanResource/removeEmployee', [HumanResourceController::class, 'removeList'])->middleware('auth');

Route::get('/humanResource/removeEmployee/{id}', [HumanResourceController::class, 'removeCustomer'])->middleware('auth');

// all employee list
Route::get('/humanResource/listOfAllEmployee', [HumanResourceController::class, 'listOfAllEmployee'])->middleware('auth');

// payroll information
Route::get('/humanResource/showPayrollInformationEmployee', [HumanResourceController::class, 'showPayrollInformationEmployee'])->middleware('auth');

// monthly loan and expense
Route::get('/humanResource/monthlyLoanAndExpenseEmployee', [HumanResourceController::class, 'monthlyLoanAndExpenseEmployee'])->middleware('auth');

Route::get('/humanResource/showMonthlyLoanAndExpenseEmployee/{id}', [HumanResourceController::class, 'showMonthlyLoanAndExpenseEmployee'])->middleware('auth');


// *** all realted to search ***


// search homepage
Route::get('/search', [SearchController::class, 'homepageSearch'])->middleware('auth');

// invoice search
Route::get('/search/invoiceSearch', [SearchController::class, 'invoiceSearch'])->middleware('auth');

Route::get('/search/invoiceResultSearch', [SearchController::class, 'invoiceResultSearch'])->middleware('auth');

// medicine search
Route::get('/search/medicineSearch', [SearchController::class, 'medicineSearch'])->middleware('auth');

Route::get('/search/medicineResultSearch', [SearchController::class, 'medicineResultSearch'])->middleware('auth');

//  employee search
Route::get('/search/employeeSearch', [SearchController::class, 'employeeSearch'])->middleware('auth');

Route::get('/search/employeeResultSearch', [SearchController::class, 'employeeResultSearch'])->middleware('auth');

// manufacturer search
Route::get('/search/manufacturerSearch', [SearchController::class, 'manufacturerSearch'])->middleware('auth');

Route::get('/search/manufacturerResultSearch', [SearchController::class, 'manufacturerResultSearch'])->middleware('auth');
