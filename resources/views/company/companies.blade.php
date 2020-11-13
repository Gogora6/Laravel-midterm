@extends('layout.layout')


@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Code</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Country</th>
            <th scope="col">EDIT</th>
            <th scope="col">DELETE</th>

        </tr>
        </thead>

        <tbody>
        <form action="{{ route('company.add') }}" method="post">
            @csrf
            <tr>
                <th scope="row">#</th>
                <th><input type="text" name="name" class="form-control"></th>
                <th><input type="number" name="code" class="form-control"></th>
                <th><input type="text" name="address" class="form-control"></th>
                <th><input type="text" name="city" class="form-control"></th>
                <th><input type="text" name="country" class="form-control"></th>
                <th>
                    <button class="btn btn-success">Add</button>
                </th>
            </tr>
        </form>
        @foreach($companies as $company)
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <th>{{ $company->name  }}</th>
                <th>{{ $company->code  }}</th>
                <th>{{ $company->address  }}</th>
                <th>{{ $company->city  }}</th>
                <th>{{ $company->country  }}</th>
                <th><a href="{{route('company.edit', ['company_id' => $company->id]) }}" class="btn btn-primary">
                        Edit</a></th>

                <th>
                    <form action="{{ route('company.delete') }}" method="post">
                        @csrf
                        <input type="hidden" name="company_id" value="{{ $company->id }}">
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
