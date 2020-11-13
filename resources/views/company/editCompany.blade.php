@extends('layout.layout')

@section('content')
    <div class="card">
        <div class="card-header">

            <h3>Edit Company</h3>
        </div>
        <form action="{{ route('company.update', ['company_id' => $company->id]) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" value="{{ $company->name }}">

                </div>
                <div class="form-group">
                    <label>Code</label>
                    <input class="form-control" type="number" name="code" value="{{ $company->code }}"
                    >
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input class="form-control" type="text" name="address" value="{{ $company->address }}"
                    >
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input class="form-control" type="text" name="city"
                           value="{{ $company->city }}"
                    >
                </div>
                <div class="form-group">
                    <label>Country</label>
                    <input class="form-control" type="text" name="country" value="{{ $company->country }}">

                </div>

            </div>

            <div class="card-footer">
                <button class="btn btn-success">Update</button>
                <a href="{{ route('companies.list') }}" class="btn btn-primary">
                    Company List
                </a>
            </div>

        </form>

    </div>
@endsection
