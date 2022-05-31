@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Customers - index page</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('customers.create') }}"> Opret ny customer</a>
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
            <th>birth_date</th>
            <th>Phone</th>
            <th>Email</th>
            <th>address</th>
            <th>city</th>
            <th>postal_code</th>
            <th>credit_card_number</th>
            <th>driver_license_number</th>
        </tr>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->first_name }}</td>
                <td>{{ $customer->last_name }}</td>
                <td>{{ $customer->birth_date }}</td>
                <td>{{ $customer->phone }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->city }}</td>
                <td>{{ $customer->postal_code }}</td>
                <td>{{ $customer->credit_card_number }}</td>
                <td>{{ $customer->driver_license_number }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('customers.show',$customer->id) }}">Vis</a>
                    <a class="btn btn-primary" href="{{ route('customers.edit',$customer->id) }}">Rediger</a>
                    <form action="{{ route('customers.destroy',$customer->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Slet</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
