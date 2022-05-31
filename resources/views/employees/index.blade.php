@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employees - index page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employees.create') }}"> Opret ny employee</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>First_name</th>
            <th>Last_name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>employee_number</th>
            <th>salary</th>
            <th>hired_date</th>
            <th>title</th>
            <th>address</th>
            <th>city</th>
            <th>postal_code</th>
        </tr>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->employee_number }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->hired_date }}</td>
                <td>{{ $employee->title }}</td>
                <td>{{ $employee->address }}</td>
                <td>{{ $employee->city }}</td>
                <td>{{ $employee->postal_code }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('employees.show',$employee->id) }}">Vis</a>
                    <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Rediger</a>
                    <form action="{{ route('employees.destroy',$employee->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
