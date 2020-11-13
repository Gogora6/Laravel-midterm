@extends('layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Edit Employee</h3>
        </div>
        <form action="{{ route('employee.update', ['employee_id' => $employee->id]) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>First Name</label>
                    <input class="form-control" type="text" name="name" value="{{ $employee->name }}">

                </div>
                <div class="form-group">
                    <label>lastname</label>
                    <input class="form-control" type="text" name="lastname" value="{{ $employee->lastname }}"
                    >
                </div>
                <div class="form-group">
                    <label> Birthdate</label>
                    <input class="form-control" type="date" name="birthdate" value="{{ $employee->birthdate }}"
                    >
                </div>
                <div class="form-group">
                    <label>Personal Id</label>
                    <input class="form-control" type="number" name="personal_id" value="{{ $employee->personal_id }}"
                    >
                </div>
                <div class="form-group">
                    <label>Salary</label>
                    <input class="form-control" type="number" name="salary"
                           value="{{ $employee->salary }}"
                    >
                </div>

            </div>

            <div class="card-footer">
                <button class="btn btn-success">Update</button>
                <a href="{{ route('employees.list') }}" class="btn btn-primary">
                    Employee List
                </a>
            </div>

        </form>

    </div>
@endsection
