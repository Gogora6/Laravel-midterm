@extends('layout.layout')

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">birthday</th>
            <th scope="col">personal Id</th>
            <th scope="col">Salary</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>

        </tr>
        </thead>

        <tbody>
        <form action="{{ route('employee.add') }}" method="post">
            @csrf
            <tr>
                <th scope="row">#</th>
                <th><input type="text" name="name" class="form-control"></th>
                <th><input type="text" name="lastname" class="form-control"></th>
                <th><input type="date" name="birthdate" class="form-control"></th>
                <th><input type="number" name="personal_id" class="form-control"></th>
                <th><input type="number" name="salary" class="form-control"></th>
                <th>
                    <button class="btn btn-success">Add</button>
                </th>
            </tr>
        </form>
        @foreach($employees as $employee)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <th>{{ $employee->name  }}</th>
                <th>{{ $employee->lastname  }}</th>
                <th>{{ $employee->birthdate  }}</th>
                <th>{{ $employee->personal_id  }}</th>
                <th>{{ $employee->salary  }}</th>
                <th><a href="{{route('employee.edit', ['employee_id' => $employee->id]) }}" class="btn btn-primary">
                        Edit</a></th>

                <th>
                    <form action="{{ route('employee.delete') }}" method="post">
                        @csrf
                        <input type="hidden" name="employee_id" value="{{ $employee->id }}">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
