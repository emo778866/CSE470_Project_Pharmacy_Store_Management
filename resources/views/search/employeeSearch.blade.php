@extends('layouts.layout')

@section('content')
    <title>Employee Search</title>

    <div class="search">
        <form action="/search/employeeResultSearch">
            <div>
                <input type="text" name="employee" placeholder="Search employee i.e. Employee1, Employee2, etc.">
            </div>
            <button type="submit"> Search </button>
        </form>
    </div>
@endsection
